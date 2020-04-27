@extends('layouts.app')

@section('content')
 <div id="app">        
        <main class="py-4">
            <div class="container">
                <br>

        <h3>CREATE POST</h3>
        <br>
        {!! Form::open(['action' => 'PostsController@store', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}
    		<div class="form-group">
                {{Form::label('Organizer', 'Organizer')}}
                {{Form::text('Organizer', '', ['class' => 'form-control','placeholder' =>'Organizer'])}}
            </div>
            <div class="form-group">
                {{Form::label('Event Name', 'EventName')}}
                {{Form::text('EventName', '', ['class' => 'form-control','placeholder' =>'EventName'])}}
            </div>
            <div class="form-group">
                {{Form::label('Description', 'Description')}}
                {{Form::textarea('Description', '', ['class' => 'form-control','placeholder' =>'Description', 'rows' => 5, 'cols' => 40])}}
            </div>
            <div class="form-group">
                {{Form::label('Event Location', 'EventLocation')}}
                {{Form::text('EventLocation', '', ['class' => 'form-control','placeholder' =>'EventLocation'])}}
            </div>
            <div class="form-group" >
                <label>Date & Time of the Event: </label><br>                
                <input type="datetime-local" name="Time">
            </div>

            <div class="form-group">
                {{Form::label('Collaborator', 'Collaborator')}}
                {{Form::textarea('Collaborator', '', ['class' => 'form-control','placeholder' =>'Collaborator', 'rows' => 5, 'cols' => 40])}}
            </div>        
            <div class="form-group">
                {{Form::label('Contact', 'Contact')}}
                {{Form::text('Contact', '', ['class' => 'form-control','placeholder' =>'Contact'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            <div class="form-group">
                <label>Event Categories: </label><br>
                <input type="checkbox" name="Categories[]" value="education"><label>Education</label>
                <input type="checkbox" name="Categories[]" value="animals"><label>Animals & Nature</label>
                <input type="checkbox" name="Categories[]" value="culture"><label>Culture & Arts</label>
                <input type="checkbox" name="Categories[]" value="community"><label>Community</label>
                <input type="checkbox" name="Categories[]" value="fest"><label>Festival</label>
                <input type="checkbox" name="Categories[]" value="health"><label>Health</label>
            </div>
            <br>
    		{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
		{!! Form::close() !!}

    </div>
</main>
</div>
@endsection
