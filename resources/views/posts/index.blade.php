@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection
