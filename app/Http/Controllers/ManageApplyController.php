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
                
                ->select('apply_events.event_id', 'p_osts.EventName', 'p_osts.user_id', 'p_osts.poster_image', 'apply_events.user_id', DB::raw('count(*) as cnt')) 
                ->where('p_osts.user_id', '=', auth()->user()->id)
                ->groupBy('apply_events.event_id')

                ->get();
                

        return view('manageapply.index', compact('apply'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function applylist(Request $request)
    {
        $apply = DB::table('apply_events')
                ->join('users', 'apply_events.user_id', '=', 'users.id')
                ->join('profile', 'apply_events.user_id', '=', 'profile.user_id')
                ->join('p_osts','apply_events.event_id', '=', 'p_osts.id')
                ->where('apply_events.event_id', '=', $request->id) 
                ->select('p_osts.EventName', 'apply_events.id', 'apply_events.user_id', 'apply_events.event_id', 'users.name', 'users.email', 'profile.matric', 'profile.kulliyyah', 'profile.level', 'profile.phone', 'profile.skills', 'apply_events.created_at')
                ->orderBy('apply_events.id')    
                ->get();

       return view('manageapply.applylist', compact('apply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apply = ApplyEvent::find($request->id);

        $apply->delete();
        
        return redirect('manageapply.applylist')->with('success','Application rejected');
    }
}
