<?php

namespace App;
use Hootlex\Moderation\Moderatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplyEvent extends Model
{
    protected $table = 'apply_events';

    public function user(){
        	return $this()->belongsTo(User::class);
        }

    public function posts(){
    	return $this()->belongsToMany(POst::class, 'event_id', 'user_id');

    }
    
    public function manageapply()
    {
        return $this->belongsTo(ManageApply::class);
    }
   
   use Moderatable;
   use SoftDeletes;

}
