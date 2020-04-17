@include('layouts.navbar')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Your Event</h3>
                        <a href="/posts/create" class="btn btn-primary">Create Recruitment Application</a>
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
                                <td>{{$post->title}}</td>
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
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                        You are logged in! as <strong>{{ strtoupper(Auth::user()->type) }}</strong>
                        Admin Page: <a href="{{ url('/') }}/adminOnlyPage">{{ url('/') }}/adminOnlyPage</a>
                        Super Admin Page: <a href="{{ url('/') }}/superAdminOnlyPage">{{ url('/') }}/super_adminOnlyPage</a>
                        Member Page: <a href="{{ url('/') }}/memberOnlyPage">{{ url('/') }}/memberOnlyPage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
