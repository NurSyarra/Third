<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Profile;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        /*$user =  User::find($user);

        return view('pages.editprofile', compact('user'));*/


        $user = DB::table('profile')->where('user_id', Auth::user()->id)->first();

        if(!$user){
             //user is not found 
            return view('pages.profile')->with('user', Auth::user());
        }
        if($user){
             // user found 
            return view('pages.editprofile')->with('user', Auth::user());

        }
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
    public function store(Request $request)
    {
        $profile = new Profile;

        $profile->user_id = auth()->user()->id;
        $profile->matric = $request->input('matric');
        $profile->kulliyyah = $request->input('kulliyyah');
        $profile->level = $request->input('level');
        $profile->phone = $request->input('phone');
        $profile->skills = $request->input('skills');
        
        
        if(request()->hasFile('image')){
            //Getfilename with the extension
            $filenameWithExt = request()->file('image')->getCLientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = request()->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore  = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = request()->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        
        $profile->image = $fileNameToStore;
        $profile->save();
        

        return redirect()->route('profile.index')->with('successMsg', 'Successfully update profile'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //return view('pages.editprofile', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
    

        $data = request()->validate([
            'matric' =>'required',
            'kulliyyah' => '',
            'level' => '',
            'phone' => 'required',
            'skills' => '',
            'image' => 'image|nullable|max:1999',
        ]);

        if(request()->hasFile('image')){
            //Getfilename with the extension
            $filenameWithExt = request()->file('image')->getCLientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = request()->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore  = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = request()->file('image')->storeAs('public/images', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.png';
        }

   
        auth()->user()->profile->update(array_merge(
            $data,
            ['image' =>  $fileNameToStore]
        
        ));

        

        return redirect()->back();
    }


    // 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
