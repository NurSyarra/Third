

@extends('layouts.app')

@section('content')

@foreach($apply as $apply)

<div class="container">
    <div class="row my-2">
        <div class="col-lg-12 bg-primary p-2 text-white mt-2 text-center text-capitalize">
        {{ $apply->EventName }}</div>
    </div>
    <div class="row mt-4"> 
    <div class="col-lg-4 text-center border-right border-secondery">
        <div class="tab-content row h-100 d-flex justify-content-center align-items-center" id="myTabContent">
            <div class="tab-pane fade show active col-lg-12" id="home" role="tabpanel" aria-labelledby="home-tab">
                <img class="img-fluid" src="/storage/poster_images/{{$apply->poster_image}}" />

            </div>
        </div>
    </div>

    <div class="col-lg-8">
                    <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label>Organizer</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1"><a href="/organiserprofile">{!!$apply->Organizer!!}</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Description</label>
                    </div>
                    <div class="col-md-8">
                        <p class="ex1">{!!$apply->Description!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label>Event Date</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->EventDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Event Location</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->EventLocation!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label>Collaborator</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->Collaborator!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Categories</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->Categories!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Recruitment Date</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->startRec!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Last Recruitment Date</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->RecruitmentDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Total Committee Needed</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->TotalCommittee!!}</p>
                    </div>
                </div>
                   
                <div class="row">
                    <div class="col-md-4">
                        <label>Contact Person</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$apply->Contact!!}</p>
                    </div>
                </div>    

                <div class="row">
                    <div class="col-md-4">
                        <label>Status of Application</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">
                            @if( $apply->accepted == 1)
                                Approved
                            @else
                                Pending
                            @endif
                        </p>
                    </div>
                </div>    
                    
                <hr>
                <small>Posted on {{$apply->created_at}} by {{$apply->Organizer}}</small>
                <hr>                    
                <a href="" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Cancel Application</a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Warning!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" >
                        <br>
                       <center>Cancel Application?</center> 
                       <br>
                      </div>
                      <div class="modal-footer" style="margin-left: auto; margin-right: auto ">
                        <button type="button" class="btn btn-secondary" style="width: 200px" data-dismiss="modal">Close</button>
                        {!! Form::open(['method' => 'Delete', 'route' => ['application.destroy', 'id'=>$apply->id ] ]) !!}
                        <button type="submit" class="btn btn-danger" style="width: 200px">Yes!</button>
                        {!! Form::close() !!}
                                   
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>

               <br><br>
                
        @endforeach

                  


@endsection
