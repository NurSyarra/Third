@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2 justify-content-center">
    	{{-- <div class="col-md-4">
    	
    		<br>
        	<div class="card">
        		<div class="card-header">User Description</div>
        		<div class="card-body">
        			<p><b>Name: </b>{{Auth::user()->name}}</p>
        			<p><b>Email: </b>{{Auth::user()->email}}</p>
        			<p><b>User: </b>{{Auth::user()->type}}</p>
        			<p><b>Description: </b>{{Auth::user()->organiserprofile->about}}</p>
                    <p><b>Links: </b>{{Auth::user()->organiserprofile->url }} </p>
        		</div>
        	</div>
        </div> --}}
        <div class="col-md-6"> 
    		<div class="card">
    			<div class="card-header">User Profile</div>
    			<div class="card-body">
                <form action="/organiserprofile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
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
    					<textarea class="form-control" rows="3" name="about">{{Auth::user()->organiserprofile->about}}</textarea>	
    				</div>
                    <div class="form-group">
                        <label>Insert Links</label>
                        <textarea class="form-control" rows="3" name="url">{{Auth::user()->organiserprofile->url}}</textarea>    
                    </div>
                    <div class="form-group">
                        <label>Change Profile Picture</label>
                        <input type="file" name="avatar" class="form-control"> 
                    </div>
    				<div class="form-group">
                        <button class="btn btn-primary">Update Profile</button>
    				</div>
    			</div>
    				@if(Session::has('message'))
    					<div class="alert alert-success">
    						{{Session::get('message')}}
    					</div>
    				@endif
    		</form>
    		</div>
        </div>
    </div>
</div>	
@endsection  
