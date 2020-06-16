@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
    	<div class="col-md-4">
    	{!! Form::open(['action' => 'OrganiserProfileController@update', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}
    		<img src="{{asset('poster_images/noimage.jpg')}}">
    			<div class="card">
    				<div class="card-header">Update Profile Picture</div>
    				<div class="card-body">
    					<input type="file" name="profile_img" class="form-control">
    					<br>
    					<button class="btn btn-primary">Update</button>
    				</div>
    			</div>
    		<br>
        	<div class="card">
        		<div class="card-header">User Description</div>
        		<div class="card-body">
        			<p><b>Name: </b>{{Auth::user()->name}}</p>
        			<p><b>Email: </b>{{Auth::user()->email}}</p>
        			<p><b>User: </b>{{Auth::user()->type}}</p>
        			<p><b>Description: </b>{{-- {{Auth::user()->organiserprofiles->desc}} --}}</p>
        		</div>
        	</div>
        </div>
        <div class="col-md-6"> 
    		<div class="card">
    			<div class="card-header">User Profile</div>
    			<div class="card-body">
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
    					<textarea class="form-control" rows="3" name="desc">{{-- {{Auth::user()->organiserprofiles->desc}} --}}</textarea>	
    				</div>
    				<div class="form-group">
    					<button class="btn btn-success">Update</button>	
    				</div>
    			</div>
    				@if(Session::has('message'))
    					<div class="alert alert-success">
    						{{Session::get('message')}}
    					</div>
    				@endif
    		{!! Form::close() !!}
    		</div>
        </div>
    </div>
</div>	
@endsection  