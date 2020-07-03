<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\EventReminder;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    
    //send notification to current user
    public function store(){

    	//two ways to use
    	//request()->user()->notify(new EventReminder); 
    	Notification::send(request()->user(), new EventReminder());

    	return redirect()->back()->with('status', 'Reminder has been set successfuly!');

    }



}


