@extends('layouts.app')

@section('content')
        
        <h1>CREATE POST</h1>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' =>'POST']) !!}
    		<div class="form-group">
    			{{Form::label('Organizer', 'Organizer')}}
    			{{Form::text('Organizer', $post->Organizer, ['class' => 'form-control','placeholder' =>'Organizer'])}}
    		</div>
    		<div class="form-group">
    			{{Form::label('EventName', 'EventName')}}
    			{{Form::text('EventName', $post->EventName, ['class' => 'form-control','placeholder' =>'EventName'])}}
    		</div>
            <div class="form-group">
                {{Form::label('Description', 'Description')}}
                {{Form::textarea('Description', $post->Description, ['class' => 'form-control','placeholder' =>'Description', 'rows' => 5, 'cols' => 40])}}
            </div>
            <div class="form-group">
                {{Form::label('EventLocation', 'EventLocation')}}
                {{Form::text('EventLocation', $post->EventLocation, ['class' => 'form-control','placeholder' =>'EventLocation'])}}
            </div>
            <div class="form-group">
                {{Form::label('Collaborator', 'Collaborator')}}
                {{Form::textarea('Collaborator', $post->Collaborator, ['class' => 'form-control','placeholder' =>'Collaborator', 'rows' => 5, 'cols' => 40])}}
            </div>
            <div class="form-group">
                {{Form::label('Contact', 'Contact')}}
                {{Form::text('Contact', $post->Contact, ['class' => 'form-control','placeholder' =>'Contact'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
    		{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
		{!! Form::close() !!}
@endsection
