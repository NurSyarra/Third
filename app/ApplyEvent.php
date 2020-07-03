<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyEvent extends Model
{
    protected $table = 'apply_events';

    public function user(){
        	return $this()->belongsTo(User::class);
        }

    public function posts(){
    	return $this()->belongsToMany(POst::class, 'event_id');

    }

}
