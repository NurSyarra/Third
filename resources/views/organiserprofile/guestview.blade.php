<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><center>USER PROFILE</center></div>
                <div class="card-body">
                    @foreach($org as $org)
                    <center> <img src="/storage/avatars/{{$org->avatar}}" class="w3-border" style="padding:4px;width:30%" /></center>
                    <br>
                    <p><b>Name: </b>{{$org->name}}</p>
                    <p><b>Email: </b>{{$org->email}}</p>
                    <p><b>User: </b>{{$org->type}}</p>
                    <p><b>Description: </b>{{$org->about}}</p>
                    <p><b>Links: </b>{{$org->url}} </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection