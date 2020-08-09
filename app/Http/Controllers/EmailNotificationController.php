<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RemindMe;
use App\Jobs\EventReminder;
use App\User;
use App\POst;
use DB;
use Auth;

class EmailNotificationController extends Controller
{
    public function __construct(){

    }
    
    public function show(Request $request)
    {
    	$post = POst::find($request->id);
    	$user = Auth::user()->id;

    	//Mail::to(Auth::user()->email)->send(new RemindMe($post));
		EventReminder::dispatch($post, $user);

    	return redirect()->back();    


    }
}
