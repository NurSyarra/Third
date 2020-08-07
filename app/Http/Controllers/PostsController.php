<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\POst;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index','show']]);
    }

    public function index()
    {
        //$posts = POst::all();
        //return POst::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM p_osts');
        //$posts POst::orderBy('title', 'asc')->take(1)->get();
        //$posts = POst::orderBy('title', 'asc')->get();
        $posts = POst::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Organizer' => 'required',
            'EventName' => 'required',
            'EventDate' => 'required|date|date_format:Y-m-d',
            'Description' => 'required',
            'EventLocation' => 'required',
            'Collaborator' => 'required',
            'Contact' => 'required',
            'RecruitmentDate' => 'required',
            'startRec' => 'required',
            
            'poster_image' => 'image|nullable|max:1999',
        ]);
        
        // Handle DatePicker
        

        // Handle File Upload
        if($request->hasFile('poster_image')){
            //Getfilename with the extension
            $filenameWithExt = $request->file('poster_image')->getCLientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('poster_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore  = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('poster_image')->storeAs('public/poster_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post

        $post = new POst;
        $post->Organizer = $request->input('Organizer');
        $post->EventName = $request->input('EventName');
        $post->EventDate = $request->input('EventDate');
        $post->Description = $request->input('Description');
        $post->EventLocation = $request->input('EventLocation');
        $post->Collaborator = $request->input('Collaborator');
        $post->RecruitmentDate = $request->input('RecruitmentDate');
        $post->startRec = $request->input('startRec');
        $Categories = implode(", ", $request->get('option'));
        $post->Categories = $Categories;
        $post->TotalCommittee = $request->get('TotalCommittee');
        $post->Contact = $request->input('Contact');
        $post->user_id = auth()->user()->id;
        $post->poster_image = $fileNameToStore;
        $post->save();
        return redirect('/dashboard')->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = POst::find($id);
        


        return view('posts.show')-> with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = POst::find($id);
     
        //Check if post exists before deleting
        if (!isset($post)){
            return redirect('/posts')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post', $post);
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
        $this->validate($request,[
            'Organizer' => 'required',
            'EventName' => 'required',
            'EventDate' => 'required|date|date_format:Y-m-d',
            'Description' => 'required',
            'EventLocation' => 'required',
            'Collaborator' => 'required',
            'RecruitmentDate' => 'required',
            'startRec' =>'required',
            'Contact' => 'required',
        ]);

        // Handle Categories
        

        // Handle File Upload
        if($request->hasFile('poster_image')){
            //Getfilename with the extension
            $filenameWithExt = $request->file('poster_image')->getCLientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('poster_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore  = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('poster_image')->storeAs('public/poster_images', $fileNameToStore);
        }

        // Create Post

        $post = POst::find($id);
        $post->Organizer = $request->input('Organizer');
        $post->EventName = $request->input('EventName');
        $post->EventDate = $request->input('EventDate');
        $post->Description = $request->input('Description');
        $post->EventLocation = $request->input('EventLocation');
        $post->Collaborator = $request->input('Collaborator');
        $post->RecruitmentDate = $request->input('RecruitmentDate');
        $post->startRec = $request->input('startRec');
        $Categories = implode(", ", $request->get('option'));
        $post->Categories = $Categories;
        $post->TotalCommittee = $request->get('TotalCommittee');
        $post->Contact = $request->input('Contact');
        $post->user_id = auth()->user()->id;
        if($request->hasFile('poster_image')){
            $post->poster_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = POst::find($id);

        //Check if post exists before deleting
        if (!isset($post)){
            return redirect('/posts')->with('error', 'No Post Found');
        }
        
        //Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        

        if($post->poster_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/poster_images/'.$post->poster_image);
        }

        $post->delete();
        return redirect('/dashboard')->with('success','Post Removed');

    }
    
}
