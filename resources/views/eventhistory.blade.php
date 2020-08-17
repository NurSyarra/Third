<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<style type="text/css">
    #about_title{
         font-family: Cambria; 
         font-size: 40px; 
         font-style: normal; 
         font-variant: normal; 
         font-weight: 300; 
         line-height: 27.9px; 
         padding: 10px;
    }
    @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    
    .event-list {
        list-style: none;
        font-family: 'Lato', sans-serif;
        margin: 0px;
        padding: 0px;
        width: 550px;
    }
    .event-list > li {
        background-color: rgb(255, 255, 255);
        box-shadow: 0px 0px 5px rgb(51, 51, 51);
        box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
        padding: 0px;
        margin: 0px 0px 20px;
    }
    .event-list > li > time {
        display: inline-block;
        width: 100%;
        color: #000000;
        background-color: #c6deff;
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
    }
    .event-list > li:nth-child(even) > time {
        background-color: #c6deff;
    }
    .event-list > li > time > span {
        display: none;
    }
    .event-list > li > time > .day {
        display: block;
        font-size: 25pt;
        font-weight: 300;
        line-height: 1;
    }
    .event-list > li > time > .end {
        display: block;
        font-size: 25pt;
        font-weight: 300;
        line-height: 1;
    }
    
    .event-list > li > img {
        width: 100%;
    }
    .event-list > li > .info {
        padding-top: 5px;
        text-align: center;
    }
    .event-list > li > .info > .title {
        font-size: 17pt;
        font-weight: 700;
        margin: 0px;
    }
    .event-list > li > .info > .desc {
        font-size: 13pt;
        font-weight: 300;
        margin: 0px;
    }

    .event-list > li > .info > ul > li > a {
        display: block;
        width: 100%;
        color: rgb(30, 30, 30);
        text-decoration: none;
    }

    #about_title{
         font-family: Cambria; 
         font-size: 40px; 
         font-style: normal; 
         font-variant: normal; 
         font-weight: 300; 
         line-height: 27.9px; 
         padding: 40px;
    }

    @media (min-width: 768px) {
        .event-list > li {
            position: relative;
            display: block;
            width: 100%;
            height: 120px;
            padding: 0px;
        }
        .event-list > li > time,
        .event-list > li > img  {
            display: inline-block;
        }
        .event-list > li > time,
        .event-list > li > img {
            width: 120px;
            float: left;
        }
        .event-list > li > .info {
            background-color: rgb(245, 245, 245);
            overflow: hidden;
        }
        .event-list > li > time,
        .event-list > li > img {
            width: 120px;
            height: 120px;
            padding: 0px;
            margin: 0px;
        }
        .event-list > li > .info {
            position: relative;
            height: 120px;
            text-align: left;
            padding-right: 40px;
        }   
        .event-list > li > .info > .title, 
        .event-list > li > .info > .desc {
            padding: 0px 10px;
        }
        .event-list > li > .info > ul {
            position: absolute;
            left: 0px;
            bottom: 0px;
        }
        
    }
</style>

@extends('layouts.app')

@section('content')


<div class="container">
    <br><br>
     <center><h1 id="about_title">Event History</h1></center>
    <div class="row my-2">
      
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-6 ]">
            <div class="column">
            <h3 class="row justify-content-center">Past Events</h3>
            <hr>
                 
                @if(count($posts) > 0 )
                @foreach($posts as $post)
                  @if(now() > $post->RecruitmentDate)                  
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
                @endif
                @endforeach
               
                @else
                    <p>No past events</p>
                @endif     
            </div>
        </div>

        <div class="[ col-xs-12 col-sm-offset-2 col-sm-6 ]">
        <div class="column">
            <h3 class="row justify-content-center">Upcoming Events</h3>
            <hr>
                 
                @if(count($posts) > 0)
                @foreach($posts as $post)
                @if(now() < $post->RecruitmentDate) 
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
                @endif
                @endforeach
                
                @else
                    <p>No upcoming events</p>
                @endif
            </div>
        </div>
            
        </div> 
    </div>

@endsection
