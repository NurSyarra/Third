  
<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')


@section('content')
<br>
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active"> My Profile</a>
                </li>
                
            </ul>

            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">{{ __('Personal Information ')}}</h5>
                    <form method="POST" action="{{ route('pages.updatedprofile') }}" enctype="multipart/form-data">
                        @csrf

                        @if(session('success'))
                            <div class="alert alert-success" roles="alert">
                            {{ session('success')}}
                            </div>
                        @endif

                        
                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Name:') }}</label>

                            <div class="col-lg-9">
                                <input type="textarea" id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-3 col-form-label form-control-label">{{ __('Email') }}</label>

                            <div class="col-lg-9">
                                <input type="textarea" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Matric No.') }}</label>

                            <div class="col-lg-9">
                                <input type="textarea" id="matric" type="matric" class="form-control @error('matric') is-invalid @enderror" name="matric" >

                                @error('matric_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kulliyyah" class="col-lg-3 col-form-label form-control-label">{{ __('Kulliyyah') }}</label>

                            <div class="col-lg-9">
                                <select id="kulliyyah" class="form-control @error('kulliyyah') is-invalid @enderror" name="kulliyyah" type="kulliyyah" >
                                  <option id="koed">Kulliyyah of Education</option>
                                  <option id="kict">Kulliyyah of Information Technology</option>

                                </select> 

                                @error('kulliyyah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-lg-3 col-form-label form-control-label">{{ __('Level') }}</label>

                            <div class="col-lg-9">
                                <select class="form-control" id="level" type="level" class="form-control @error('level') is-invalid @enderror" name="level">
                                  <option id="1">1</option>
                                  <option id="2">2</option>
                                  <option id="3">3</option>
                                  <option id="4">4</option>
                                </select>

                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Phone No.') }}</label>

                            <div class="col-lg-9">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="interest" class="col-lg-3 col-form-label form-control-label">{{ __('Interest') }}</label>

                            <div class="col-lg-9">
                                <input type="checkbox" name="interest[]" value="1">Education</br>
                                <input type="checkbox" name="interest[]" value="2">Animals & Nature</br>
                                <input type="checkbox" name="interest[]" value="3">Arts</br>
                                <input type="checkbox" name="interest[]" value="4">Community Services</br>
                                <input type="checkbox" name="interest[]" value="5">Festival</br>
                                <input type="checkbox" name="interest[]" value="6">Health</br>


                                @error('interest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="Update" class="btn btn-primary">
                                    {{ __('Update profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="messages">
                    


                </div>
            </div>
        </div>



        <div class="col-lg-4 order-lg-1 text-center">
            <img class="mx-auto img-fluid img-circle d-block" alt="avatar" style="width: 150px; height: 150px; border-radius: 50%">
            <label for="avatar" class="custom-file">Upload Profile Picture</label>
                <input type="file" class="@error('avatar') is-invalid @enderror" name="avatar">

                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    
        </div>
    </div>

</div>

                   
@endsection
