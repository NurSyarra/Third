

<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')


@section('content')
<div id="app">        
    <main class="py-4">
        <div class="container"><br>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    
                      @if(count($apply) > 0)
                      
                        <div class="row">
                          @foreach($apply as $key => $apply)
                          <div class="col-sm-6" >
                            <div class="card" style="width: 310px">
                              <div class="card-body">
                                <center><h5 class="card-title">{{ $apply->EventName }}</h5>

                                  <img class="card-img" src="/storage/poster_images/{{$apply->poster_image}}" alt="poster_image" style="height:250px; width: 260px">
                              
                               <p>Total applicant(s): {{$apply->cnt}}</p>
                      
                                </center><hr>
                                
                                <a href="{{ route('manageapply.acceptlist', ['id'=>$apply->event_id])}}" class="btn btn-info">View applicants</a>

                              </div>
                            </div>
                          </div>
                           @endforeach
                        </div>
                      @else
                        <h3>You have no applicant.</h3>
                      @endif
                         
                </div>                
            </div>
		    </div>
    </main>
</div>




                   
@endsection
