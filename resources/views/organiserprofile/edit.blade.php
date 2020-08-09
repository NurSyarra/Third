
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><center>USER PROFILE</center></div>
                <div class="card-body">
                    <center> <img src="/storage/avatars/{{Auth::user()->organiserprofile->avatar}}" class="w3-border" style="padding:4px;width:30%" /></center>
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
                <div class="card-header"><center>UPDATE USER PROFILE</center></div>
                <div class="card-body">
                <form action="{{ route('organiserprofile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Name</label>
                        <textarea class="form-control" rows="1" name="name">{{ old('name') ?? $org->name  }}</textarea>   
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <textarea class="form-control" rows="1" name="email">{{ old('email') ?? $org->email  }}</textarea> 
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="about">{{ old('about') ?? $org->organiserprofile->about  }}</textarea>   
                    </div>
                    <div class="form-group">
                        <label>Insert Links</label>
                        <textarea class="form-control" rows="3" name="url">{{ old('url') ?? $org->organiserprofile->url  }}</textarea>    

                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                </div>
            </div>
    </div>
</div>
</div>
@endsection  