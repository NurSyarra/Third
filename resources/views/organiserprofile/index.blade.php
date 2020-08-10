<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
    #about_title{
         font-family: Cambria; 
         font-size: 20px; 
         font-style: normal; 
         font-variant: normal; 
         font-weight: 300; 
         line-height: 27.9px; 
    }
</style>
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" id="about_title"><center>USER PROFILE</center></div>
                <div class="card-body">
                    <center> <img src="/storage/avatars/noimage.png" class="w3-border" style="padding:4px;width:30%" /></center>
            <br>
                    <p><b>Name: </b>{{Auth::user()->name}}</p>
                    <p><b>Email: </b>{{Auth::user()->email}}</p>
                    <p><b>User: </b>{{Auth::user()->type}}</p>
                    <p><b>Description: </b>{{Auth::user()->organiserprofile->about ?? ''}}</p>
                    <p><b>Links: </b><a href="#">{{Auth::user()->organiserprofile->url ?? ''}}</a> </p>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-6"> 
            <div class="card">
                <div class="card-header" id="about_title"><center>UPDATE USER PROFILE</center></div>
                <div class="card-body">
                <form action="{{ route('organiserprofile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <textarea class="form-control" rows="1" name="name">{{Auth::user()->name}}</textarea>   
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <textarea class="form-control" rows="1" name="email">{{Auth::user()->email}}</textarea> 
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="about"></textarea>   
                    </div>
                    <div class="form-group">
                        <label>Insert Links</label>
                        <textarea class="form-control" rows="3" name="url"></textarea>    
                    </div>
                    <div class="form-group">
                        <label>Change Profile Picture</label>
                        <input type="file" name="avatar" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update Profile</button>
                    </div>
                    
                </div>
                </form>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
            
            </div>
        </div>
    </div>
</div>	
@endsection  

  

