<?php

namespace App\Http\Controllers;
use Auth;
use App\POst;
use App\Profile;
use App\ApplyEvent;
use Carbon\Carbon;
use DB;

use Illuminate\Http\Request;

class ApplyEventController extends Controller
{
    public function index(){
        $apply = DB::table('apply_events')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->join('users', 'apply_events.user_id', '=', 'users.id')
                ->select('p_osts.Organizer', 'p_osts.EventName', 'p_osts.poster_image', 'apply_events.status', 'apply_events.id')
                ->where('apply_events.user_id', '=', auth()->user()->id)
                ->get();

        return view('Student.StudentDashboard', compact('apply'));    
    }

    public function store(Request $request){

        $user = DB::table('apply_events')->where('user_id', Auth::user()->id)
                                         ->where('event_id', '=', $request->id)
                                         ->first();

        if($user){
             // user found 
            session()->flash('Alertmessage', 'You already applied for this event!');

            return redirect()->back();

        }
        if(!$user){
             //user is not found 
            $apply = new ApplyEvent;

            $apply->user_id = auth()->user()->id;
            $apply->event_id = $request->id;
            $apply->status = 0;

            $apply->save();

            session()->flash('Successmessage', 'You have successfully applied for this event. You can check the status of your application in the dashboard.');

            return redirect()->back();
        }

        
    }

    public function show(Request $request){
        $apply = DB::table('apply_events')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->select('p_osts.*','apply_events.*')
                ->where('apply_events.id', '=', $request->id)
                ->get();

       return view('Student.studenteventdetails', compact('apply'));
                
    }

    public function update(){
        //
    }

    public function destroy(Request $request){
        $apply = ApplyEvent::find($request->id);
        $apply->delete();
        //ApplyEvent::destroy($request->id);

        session()->flash('Successmessage', 'You have successfully cancel your application');

        return redirect()->action('ApplyEventController@index');
    }

}
