<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2 justify-content-center">
        @if(Auth::user()->type == 'organiser')
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">User Description</div>
                <div class="card-body">
                    <p><b>Name: </b>{{Auth::user()->name}}</p>
                    <p><b>Email: </b>{{Auth::user()->email}}</p>
                    <p><b>User: </b>{{Auth::user()->type}}</p>

                    <p><b>Description: </b>{{Auth::user()->organiserprofile->about}}</p>
                    <p><b>Links: </b><a href="#">{{Auth::user()->organiserprofile->url }} </p>
                    
                    <a href="/organiserprofile/{{Auth::user()->id}}/edit" class="btn btn-info">Edit</a>
                    </div>
                </div>
            </div>
            @endif
            @if(Auth::user()->type == 'student')
                <img src="/storage/avatars/{{Auth::user()->organiserprofile->avatar}}" class="w3-border" style="padding:4px;width:30%" />
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">User Description</div>
                    <div class="card-body">
                        <p><b>Name: </b>{{Auth::user()->name}}</p>
                        <p><b>Email: </b>{{Auth::user()->email}}</p>
                        <p><b>User: </b>{{Auth::user()->type}}</p>

                        <p><b>Description: </b>{{Auth::user()->organiserprofile->about}}</p>
                        <p><b>Links: </b><a href="#">{{Auth::user()->organiserprofile->url }} </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>  
@endsection  
