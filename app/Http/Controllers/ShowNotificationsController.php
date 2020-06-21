<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowNotificationsController extends Controller
{
    public function show(){

    	return view('notifications.show',[

    		'notifications' => auth()->user()->notifications

    	]);
    }
}
