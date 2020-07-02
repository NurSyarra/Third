<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="{{ asset('css/historyevent.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')


<div class="container">
    <br><br>
     <h1 class="row justify-content-center">Event History</h1>
     <br><br>
    <div class="row my-2">  
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-6 ]">
            <div class="column">
            <h3 class="row justify-content-center">Past Events</h3>
            <br><br>      
                @if(count($posts) > 0 )
                @foreach($posts as $post)
                <ul class="event-list">
                    <li>
                        <time>
                            Ended <span class="end">{{$post->RecruitmentDate}}</span>
                        </time>

                        <img src="/storage/poster_images/{{$post->poster_image}}" />
                        <div class="info">
                            <h2><a class="title"  href="/posts/{{$post->id}}"> {{$post->EventName}}</a></h2>
                            <p class="desc">{{$post->Description}}</p>
                        </div>
                        
                    </li>
                </ul>
                @endforeach
                {{$posts->links()}}
                @else
                    <p>No past events</p>
                @endif     
            </div>
        </div>
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-6 ]">
        <div class="column">
            <h3 class="row justify-content-center">Upcoming Events</h3>
            <br><br>      
                @if(count($posts) > 0)
                @foreach($posts as $post)
                <ul class="event-list">
                    <li>
                        <time>
                            Start <span class="day">{{$post->startRec}}</span>
                        </time>

                        <time>
                            End <span class="end">{{$post->RecruitmentDate}}</span>
                        </time>

                        <img src="/storage/poster_images/{{$post->poster_image}}" />
                        <div class="info">
                            <h2><a class="title"  href="/posts/{{$post->id}}"> {{$post->EventName}}</a></h2>
                            <p class="desc">{{$post->Description}}</p>
                        </div>
                        
                    </li>
                </ul>
                @endforeach
                {{$posts->links()}}
                @else
                    <p>No upcoming events</p>
                @endif
            </div></div>
        </div>
    </div>
</div>




{{-- <div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">   
        <h1>Events</h1>
        @if(count($posts) > 0)
        	@foreach($posts as $post)
        		<div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <img style="width:100%" src="/storage/poster_images/{{$post->poster_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">      
        			         <h3><a href="/posts/{{$post->id}}">{{$post->EventName}}</a></h3>
        			         <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
        	@endforeach
        	{{$posts->links()}}
        @else
        	<p>No upcoming events</p>
        @endif
                </div>
        </div>
</div> --}}
@endsection
