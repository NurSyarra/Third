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
                <hr>
            <div class="row">
                <div class="col-md-4 font-weight-bold">
                    <label><b> Organizer</b></label>
                </div>
                <div class="col-md-4">
                    <p class="ex1"><a href="/organiserprofile/{{Auth::user()->id}}">{!!$post->Organizer!!}</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Description</label>
                </div>
                <div class="col-md-8">
                    <p class="ex1">{!!$post->Description!!}</p>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-4">
                    <label>Event Date</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->EventDate!!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Event Location</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->EventLocation!!}</p>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-4">
                    <label>Collaborator</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->Collaborator!!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Categories</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->Categories!!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Recruitment Date</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->startRec!!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Last Recruitment Date</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->RecruitmentDate!!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Total Committee Needed</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->TotalCommittee!!}</p>
                </div>
            </div>
               
            <div class="row">
                <div class="col-md-4">
                    <label>Contact Person</label>
                </div>
                <div class="col-md-4">
                    <p class="ex1">{!!$post->Contact!!}</p>
                </div>
            </div>    
                
            <hr>
            <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
            <hr>                    
            <a href="/register" class="btn btn-info">Apply</a>      
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
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                                <br><br>
                                {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])}}
                                	{{Form::hidden('_method', 'DELETE')}}
                                	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {{Form::close()}}
                            @endif
                    {{-- @endif --}}
                    

        @endif
        @if(Auth::user()->type == 'student')
            <div class="col-lg-8">
                    <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label>Organizer</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1"><a href="/organiserprofile">{!!$post->Organizer!!}</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Description</label>
                    </div>
                    <div class="col-md-8">
                        <p class="ex1">{!!$post->Description!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label>Event Date</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->EventDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Event Location</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->EventLocation!!}</p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-4">
                        <label>Collaborator</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Collaborator!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Categories</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Categories!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Recruitment Date</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->startRec!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Last Recruitment Date</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->RecruitmentDate!!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Total Committee Needed</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->TotalCommittee!!}</p>
                    </div>
                </div>
                   
                <div class="row">
                    <div class="col-md-4">
                        <label>Contact Person</label>
                    </div>
                    <div class="col-md-4">
                        <p class="ex1">{!!$post->Contact!!}</p>
                    </div>
                </div>    
                    
                <hr>
                <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>                    
                <a href="" class="btn btn-info">Apply</a>
            @endif
    @endguest
        </div>
    </div>
</div>      
@endsection
