<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class POst extends Model
{
    // Table Name
    protected $table = 'p_osts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }

}

