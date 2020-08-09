<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageApply extends Model
{
    protected $table = 'manage_applies';

    public function user(){
        	return $this()->belongsTo(User::class);
        }

    public function posts(){
    	return $this()->belongsToMany(POst::class);

    }
    public function profile(){
        return $this()->belongsToMany(Profile::class);
    }
    
    public function ApplyEvent()
    {
        return $this()->belongsToMany(ApplyEvent::class, 'user_id', 'event_id', 'status');
    }


}
