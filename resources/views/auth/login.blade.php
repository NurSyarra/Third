@extends('layouts.app')

<style type="text/css">
    .column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
@section('content')

<br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 800px">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="row">
                    <div class="column">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <br><br>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="column">
                    <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> A platform for the organizer or societies to recruit the committee for event.</li>
                          <li><span class="fa fa-check text-success"></span> A platform for student to join more activities in university.</li>
                          <li><span class="fa fa-check text-success"></span> Keep track the activities for the organizer and students.</li>
                          <li><span class="fa fa-check text-success"></span> Easy to use platform which includes familiar functions and features.</li>
                        </ul>
                      <p><a href="/register" class="btn btn-info btn-block">Yes please, register now!</a></p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
