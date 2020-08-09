<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\OrganiserProfiles;
use Illuminate\Support\Facades\DB;
use Auth;
use Intervention\Image\Facades\Image;


class OrganiserProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $org = DB::table('organiser_profiles')
                ->join('users', 'users.id', '=', 'organiser_profiles.user_id')
                ->select('users.*', 'organiser_profiles.*')
                ->where('user_id', Auth::user()->id)
                ->first();

        if(!$org){
             //user is not found 
            return view('organiserprofile.index')->with('org', Auth::user());
        }
        if($org){
             // user found 
            return view('organiserprofile.edit')->with('org', Auth::user());

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
        
        $org = new OrganiserProfiles;

        $org->user_id = auth()->user()->id;
        $org->about = $request->input('about');
        $org->url = $request->input('url');
        
        //handle avatar
        if(request()->hasFile('avatar')){
            //Getfilename with the extension
            $filenameWithExt = request()->file('avatar')->getCLientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = request()->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore  = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = request()->file('avatar')->storeAs('public/avatars', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        $org->avatar = $fileNameToStore;
        $org->save();

        return redirect()->route('organiserprofile.index')->with('successMsg', 'Successfully update profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
       
        return view('organiserprofile.edit', compact('user'));
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
            'about' => '',
            'url' => '',
            'type' => 'organiser',
            'avatar' => 'image|nullable|max:1999',
        ]);

        if(request()->hasFile('avatar')){
            //Getfilename with the extension
            $filenameWithExt = request()->file('avatar')->getCLientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = request()->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore  = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = request()->file('avatar')->storeAs('public/avatars', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        auth()->user()->organiserprofile->update(array_merge(
            $data,
            ['avatar' => $fileNameToStore]
        ));

        return redirect()->back();
    }

    public function GuestView(Request $request)
    {

        $org = DB::table('organiser_profiles')
                ->join('users', 'users.id', '=', 'organiser_profiles.user_id')
                ->where('organiser_profiles.user_id', '=', $request->id)
                ->select('users.name', 'users.email', 'users.type', 'organiser_profiles.about','organiser_profiles.url', 'organiser_profiles.avatar')
                ->get();

        return view('organiserprofile.guestview', compact('org'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $org = OrganiserProfiles::find($id);

        $org->cancel();
        return view('organiserprofile.edit')->with('org', Auth::user());
    }
}