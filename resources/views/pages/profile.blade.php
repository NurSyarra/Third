<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')

@section('content')

@if(session('successMsg'))

<div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
</div>

@endif


<br><br>
<br><br>
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">My Profile</a>
                </li>
                
                
            </ul>

            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">{{ __('Personal Information ')}}</h5>

                        @csrf
                        
                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Name:') }}</label>

                            <div class="col-lg-9">
                                <label> {{ Auth::user()->name }}</label> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-3 col-form-label form-control-label">{{ __('Email:') }}</label>

                            <div class="col-lg-9">
                                <label> {{ Auth::user()->email }}</label> 
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Matric No.:') }}</label>

                            <div class="col-lg-9">
                                <label> {{ Auth::user()->profile->matric }}</label> 
                            </div>

                            
                        </div>

                        <div class="form-group row">
                            <label for="kulliyyah" class="col-lg-3 col-form-label form-control-label">{{ __('Kulliyyah:') }}</label>

                            <div class="col-lg-9">
                                <label> {{ Auth::user()->profile->kulliyyah }}</label> 
                            </div>

                            
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-lg-3">{{ __('Level of studies:') }} </label>

                            <div class="col-lg-9">
                                <label> {{ Auth::user()->profile->level }}</label> 
                            </div>
                            
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-lg-3 col-form-label form-control-label">{{ __('Phone No.:') }}</label>
                            <div class="col-lg-9">
                                <label> {{ Auth::user()->profile->phone }}</label> 
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="skills" class="col-lg-3 col-form-label form-control-label">{{ __('Skills:') }}</label>
                            <div class="col-lg-9">
                                <label> {{ Auth::user()->profile->skills }}</label> 
                            </div>

                        </div>



                        <br>            

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/editprofile" class="btn btn-primary">{{ __('Edit Profile') }}</a>
                            </div>
                        </div>
                </div>
               
            </div>
        </div>



        <div class="col-lg-4 order-lg-1 text-center">
            <img src="{{ Auth::user()->profile->avatar }}" class="mx-auto img-fluid img-circle d-block" alt="avatar" style="width: 150px; height: 150px; border-radius: 50%">
        </div>
    </div>

</div>

                   
                   
@endsection

