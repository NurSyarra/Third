  
<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')


@section('content')

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
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @if(session('success'))
                            <div class="alert alert-success" roles="alert">
                            {{ session('success')}}
                            </div>
                        @endif

                        
                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Name:') }}</label>

                            <div class="col-lg-9">
                                <label type="textarea" id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" > {{ Auth::user()->name }}</label>

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
                                <label type="textarea" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"> {{ Auth::user()->email }}</label>

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
                                <input type="textarea" id="matric" class="form-control @error('matric') is-invalid @enderror" name="matric" >

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
                                <select id="kulliyyah" class="form-control @error('kulliyyah') is-invalid @enderror" name="kulliyyah">
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
                                <input id="phone" type="textarea" class="form-control @error('phone') is-invalid @enderror" name="phone" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Skills') }}</label>

                            <div class="col-lg-9">
                                <input id="skills" type="textarea" class="form-control @error('skills') is-invalid @enderror" name="skills" >

                                @error('skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <br>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="cancel" class="btn btn-dark">
                                    {{ __('Cancel') }}
                                </button>

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




                    
        </div>
    </div>

</div>

                   
@endsection
