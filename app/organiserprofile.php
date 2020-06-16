<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organiserprofile extends Model
{
    // Table Name
    protected $table = 'organiserprofiles';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
