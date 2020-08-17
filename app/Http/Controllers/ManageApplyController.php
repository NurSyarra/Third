<?php

namespace App\Http\Controllers;
use Auth;
use App\POst;
use App\Profile;
use App\User;
use App\ApplyEvent;
use DB;
use Illuminate\Http\Request;

class ManageApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $apply = DB::table('apply_events')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                
                ->select('apply_events.event_id', 'p_osts.EventName', 'p_osts.user_id', 'p_osts.poster_image', 'apply_events.user_id', 'apply_events.status', DB::raw('count(*) as cnt')) 
                ->where('p_osts.user_id', '=', auth()->user()->id)
                ->groupBy('apply_events.event_id')

                ->get();
                

        return view('manageapply.index', compact('apply'));

    }
    
    public function acceptlist(Request $request)
    {
        $apply = DB::table('apply_events')
                ->join('users', 'apply_events.user_id', '=', 'users.id')
                ->join('profile', 'apply_events.user_id', '=', 'profile.user_id')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->where('apply_events.event_id', '=', $request->id) 

                ->select('p_osts.EventName', 'apply_events.id', 'apply_events.user_id', 'apply_events.event_id', 'users.name', 'users.email', 'apply_events.status', 'profile.matric', 'profile.kulliyyah', 'profile.level', 'profile.phone', 'profile.skills', 'apply_events.created_at', 'profile.image')

                ->orderBy('apply_events.id')    
                ->get();

       return view('manageapply.acceptlist', compact('apply'));
    }

    public function accept($id)
    {
        $apply = DB::table('apply_events')
                ->join('users', 'apply_events.user_id', '=', 'users.id')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->where('apply_events.user_id', '=', 'profile.user_id')
                ->orWhere('apply_events.event_id', '=', 'p_osts.id') 
                ->orWhere('apply_events.status', 0)
                ->update(['apply_events.status' => 2]);


        return redirect()->back();
    }

    public function reject(Request $request, $id)
    {
        $apply = DB::table('apply_events')
                ->join('users', 'apply_events.user_id', '=', 'users.id')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->where('apply_events.user_id', '=', 'profile.user_id')
                ->orWhere('apply_events.event_id', '=', 'p_osts.id')
                ->orWhere('apply_events.status', 0)
                ->update(['apply_events.status' => 1]);

        $apply = new ApplyEvent;
        
        return redirect()->back();
    }
    public function applylist(Request $request)
    {
        $apply = DB::table('apply_events')
                ->join('users', 'apply_events.user_id', '=', 'users.id')
                ->join('profile', 'apply_events.user_id', '=', 'profile.user_id')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->select('p_osts.EventName', 'apply_events.id', 'apply_events.user_id', 'apply_events.event_id', 'users.name', 'users.email', 'apply_events.status', 'profile.matric', 'profile.kulliyyah', 'profile.level', 'profile.phone', 'profile.skills', 'apply_events.created_at','profile.image', DB::raw('count(*) as cnt'))
                ->where('apply_events.status', 2)
                ->get();

        return view('manageapply.applylist', compact('apply'));
    }
}
