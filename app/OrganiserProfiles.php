<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganiserProfiles extends Model
{
	protected $table = 'organiser_profiles';
	protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    
    
    protected $fillable = [
    	'about', 'avatar', 'url', 'user_id',

    ];
}
