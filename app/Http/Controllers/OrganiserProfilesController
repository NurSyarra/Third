<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class OrganiserProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user =  User::find($user);

        return view('organiserprofile.index', compact('user'));
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
    // public function store(Request $request)
    // {
    //     $data = request()->validate([
    //         'about' => '',
    //         'url' => '',
    //     ]);
 
    //     auth()->user()->organiserprofile->update($data);

    //     return redirect('organiserprofile.index')->with('success','Profile Updated');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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

        return redirect("/organiserprofile/{$user->id}");
    }

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
