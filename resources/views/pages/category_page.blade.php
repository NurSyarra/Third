<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('public/mdbootstrap/img/mdb-favicon.ico')}} " type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href=" {{ asset('public/mdbootstrap/css/bootstrap.min.css') }} ">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('public/mdbootstrap/css/mdb.min.css ') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('public/mdbootstrap/css/style.css')}}">

  @extends('layouts.app')

</head>

<body>
@section('content')

<div id="app">        
        <main class="py-4">
            <div class="container">
            	<br>

  <!-- Start your project here-->  
  <h5>Event Category: </h5><hr>

<p>{{ $todayDate = date('Y-m-d')}}</p>

@if(count($post) > 0)

	@foreach($post as $i)
  <!-- Card -->
<div class="card" style="height: 30%; width: 25%">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="/storage/poster_images/{{$i->poster_image}}" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->
  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
      class="fas fa-chevron-right pl-1"></i></a>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">{{ $i->EventName}}</h4>
    <hr>
    <!-- Text -->
    <p class="card-text">Details: {{ $i->Description}}</p>
    <p class="card-text">Location: {{ $i->EventLocation}}</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1">Posted on: {{ $i->created_at }}</i></li>
    </ul>
  </div>

</div>
<!-- Card -->
	@endforeach
	@else
        	<p>No event posted</p>

    @endif

</div>
</main>
</div>

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('public/mdbootstrap/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('public/mdbootstrap/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('public/mdbootstrap/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('public/mdbootstrap/js/mdb.min.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
@endsection

</html>
