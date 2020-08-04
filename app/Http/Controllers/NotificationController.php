<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SuccessfullyApplyforEvent;
use Illuminate\Support\Facades\Notification;
use App\User;

class NotificationController extends Controller
{
    public function index(){
    	return view('Student.Notifications');
    }
    
    //send notification to current user
    public function store(){

    	//two ways to use
    	//request()->user()->notify(new EventReminder); 
    	Notification::send(request()->user(), new EventReminder());

    	return redirect()->back()->with('status', 'Reminder has been set successfuly!');

    }

    public function sendNotification(){
        session()->flash('Successmessage', 'You have successfully applied for this event. You can check the status of your application in the dashboard.');

        $user = Auth::user();
        $user->notify(new SuccessfullyApplyforEvent(User::findOrFail(1)));
        return view('Student.StudentDashboard');    


    }

    public function notifications()
    {
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }



}


