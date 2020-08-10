<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
p.ex1 {
  text-align: justify;
  padding-right;
}

</style>
@extends('layouts.app')

@section('content')


@if (session()->has('Successmessage'))
<div class="alert alert-success">
  <strong> {{session()->get('Successmessage')}} </strong><a href="/Studentdashboard" class="alert-link">Click here to view the dashboard</a>
</div>
@endif

@if (session()->has('Alertmessage'))
<div class="alert alert-danger">
  {{session()->get('Alertmessage')}}
</div>
@endif


<div class="container">
    <div class="row my-2">
        <div class="col-lg-12 bg-primary p-2 text-white mt-2 text-center text-capitalize">
           {{$post->EventName}}
        </div>
    </div>
    <div class="row mt-4"> 
    <div class="col-lg-4 text-center border-right border-secondery">
        <div class="tab-content row h-100 d-flex justify-content-center align-items-center" id="myTabContent">
            <div class="tab-pane fade show active col-lg-12" id="home" role="tabpanel" aria-labelledby="home-tab">
                <img class="img-fluid" src="/storage/poster_images/{{$post->poster_image}}" />
            </div>
        </div>
    </div>
    @guest 
            <div class="col-lg-8">
                 <a href="/posts" class="btn btn-info">Back</a>
                    <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Organizer</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1"><a href="{{ route('organiserprofile.guestview', ['id'=>$post->user_id]) }}">{!!$post->Organizer!!}</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Description</b></label>
                    </div>
                    <div class="col-md-8">
                        <p class="ex1">{!!$post->Description!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Event Date</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->EventDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Event Location</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->EventLocation!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Collaborator</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Collaborator!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Categories</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Categories!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Recruitment Date</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->startRec!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Last Recruitment Date</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->RecruitmentDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Total Committee Needed</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->TotalCommittee!!}</p>
                    </div>
                </div>
                   
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Contact Person</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Contact!!}</p>
                    </div>
                </div> 
                    
                <hr>
                <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>                    
            @if(now() > $post->RecruitmentDate)                    
                <p>Not available</p>
            @else
                <a href="/register" type="button" class="btn btn-info">Apply</a>
              
                @endif
        @else
        @if(Auth::user()->type == 'organiser')           
                <div class="col-lg-8">
                 <a href="/posts" class="btn btn-info">Back</a>
                 <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Organizer</b></label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1"><a href="/organiserprofile">{!!$post->Organizer!!}</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Description</b> </label>
                        </div>
                        <div class="col-md-8">
                            <p class="ex1">{!!$post->Description!!}</p>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Event Date</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->EventDate!!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Event Location</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->EventLocation!!}</p>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Collaborator</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->Collaborator!!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Categories</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->Categories!!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Recruitment Date</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->startRec!!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Last Recruitment Date</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->RecruitmentDate!!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Total Committee Needed</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->TotalCommittee!!}</p>
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col-md-4">
                            <label><b>Contact Person</b> </label>
                        </div>
                        <div class="col-md-4">
                            <p class="ex1">{!!$post->Contact!!}</p>
                        </div>
                    </div>    
                        
                <hr>
                <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>
                    {{-- @if(!Auth::guest()) --}}
                            @if(Auth::user()->id == $post->user_id)
                                <div class="form-group">
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                                </div>
                                {{-- <form action="{{'PostsController@destroy', $post->id}}" method="POST" class="form-group">
                                    <button class="btn btn-danger">Delete</button>
                                </form> --}}
                                
                                <br>
                                {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'form-group'])}}

                                	{{Form::hidden('_method', 'DELETE')}}
                                	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {{Form::close()}}
                            @endif
                    {{-- @endif --}}
                    

        @endif

        @if(Auth::user()->type == 'student')  
            <div class="col-lg-8">
                 <a href="/posts" class="btn btn-info">Back</a>
                    <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Organizer</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1"><a href="{{ route('organiserprofile.guestview', ['id'=>$post->user_id]) }}">{!!$post->Organizer!!}</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Description</b></label>
                    </div>
                    <div class="col-md-8">
                        <p class="ex1">{!!$post->Description!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Event Date</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->EventDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Event Location</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->EventLocation!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Collaborator</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Collaborator!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Categories</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Categories!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Recruitment Date</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->startRec!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Last Recruitment Date</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->RecruitmentDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Total Committee Needed</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->TotalCommittee!!}</p>
                    </div>
                </div>
                   
                <div class="row">
                    <div class="col-md-4">
                        <label><b>Contact Person</b></label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Contact!!}</p>
                    </div>
                </div>    
                    
                <hr>
                <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>                    
            @if(now() > $post->RecruitmentDate)                    
                <p>Not available</p>
            @else 

                <a href="" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Apply</a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Apply for this Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Confirm to apply for this event?
                        <p></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{ route('apply', ['id'=>$post->id]) }}" type="button" class="btn btn-info">Confirm</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
        @endif
        @endguest
        
        </div>
    </div>

</div>      

</div> 
<br>     

@endsection
