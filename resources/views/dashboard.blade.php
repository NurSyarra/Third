<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')

@section('content')


@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if(Auth::user()->type == 'organiser')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h3>Your Dashboard</h3>
                        <a href="/posts/create" class="btn btn-primary">Create Recruitment Application</a>
                        <a href="/manageapply" class="btn btn-primary">Manage Committee</a>
                        <hr>
                        @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->EventName}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                                <td>
                                    {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])}}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {{Form::close()}}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no post</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
@include('layouts.carousel')

<div id="app">        
    <main class="py-4">
        <div class="container">
<br>
<div class="category">
<center><h4>Event Categories</h4></center>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="education">
                <img class="fas fa-4x img-sizing" src="image/book.png" > </img>
                </a>
              <h5 class="card-title">Education</h5>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="animals">                                                
                <img src="image/nature.png" class="fas fa-4x img-sizing"></img></a>
              <h5 class="card-title">Animals & Nature</h5>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="culture">                                                
               <img src="image/arts.png" class="fas fa-code fa-4x img-sizing"></img></a>
              <h5 class="card-title">Culture & Arts</h5>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="community">                                                
                <img src="image/old folks.png" class="fas fa-code fa-4x img-sizing"></img></a>
              <h5 class="card-title">Community Service</h5></div>
            </div>
          </div>
        </div><br>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="festival">                                
                <img src="image/festival.png" class="fas fa-code fa-4x img-sizing"></img>
                </a>
              <h5 class="card-title">Festival</h5>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="health">                                                
                <img src="image/health.png" class="fas fa-code fa-4x img-sizing"></img></a>
              <h5 class="card-title">Health</h5>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <br>
<hr>

<div class="bs-example">
    <h5>Upcoming Events</h5>
    <div class="list-group">
      @if(count($org_posts) > 0)
      @foreach($org_posts as $org_posts)

        <div href="#" class="list-group-item list-group-item-action ">
          <div class="d-flex w-100 justify-content-between">
            <h5>{{ $org_posts->EventName }}</h5>
            <a href="{{ route('remind.show', ['id'=>$org_posts->id]) }}" class="btn btn-info">Remind Me</a>
          </div>
            <p class="upcomingEvent"> Description: {{ $org_posts->Description }} </p>
            <p class="upcomingEvent"> Event Date: {{ $org_posts->EventDate}} </p> 
        </div>
        @endforeach
        @else
          <p>No upcoming event</p>

    @endif

    </div>
</div>

  </div>
    </main>
      </div>

            @endif

@endsection
