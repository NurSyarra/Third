
<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')


@section('content')

	<div class="container">
		<center><h1 id="about_title">Applied Events</h1></center>

	<div>
		
      @if(count($apply) > 0)

      <div class="row">
        @foreach($apply as $apply)
        <div class="col-sm-6" >
          <div class="card" style="width: 310px">
            <div class="card-body">
              <center><h5 class="card-title">{{ $apply->EventName }}</h5>

              <img class="card-img" src="/storage/poster_images/{{$apply->poster_image}}" alt="poster_image" style="height:250px; width: 260px">

              </center><hr>
              
              <p class="card-text">Status of application: 
              @if( $apply->status == 2)
              Accepted
              @elseif($apply->status == 1)
              Rejected
              @else
              Pending
              @endif</p>

              <a href="{{ route('details.show', ['id'=>$apply->id]) }}" class="btn btn-info">View details</a>
            

            </div>
          </div>
        </div>
        @endforeach
      </div>

        
        @else
          <p>You haven't applied for any event</p>
        @endif


		</div>

	</div>


                   
@endsection
