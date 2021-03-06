@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">          
        <h1>EDIT RECRUITMENT APPLICATION</h1>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}
    		<div class="form-group">
    			{{Form::label('Organizer', 'Organizer')}}
    			{{Form::text('Organizer', $post->Organizer, ['class' => 'form-control','placeholder' =>'Organizer'])}}
    		</div><hr>
    		<div class="form-group">
    			{{Form::label('EventName', 'EventName')}}
    			{{Form::text('EventName', $post->EventName, ['class' => 'form-control','placeholder' =>'EventName'])}}
    		</div><hr>
            <div class="form-group">
                {{Form::label('EventDate', 'Event Date')}}
                {{Form::date('EventDate', $post->EventDate, ['class' => 'form-control'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('Description', 'Description')}}
                {{Form::textarea('Description', $post->Description, ['class' => 'form-control','placeholder' =>'Description', 'rows' => 5, 'cols' => 40])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('EventLocation', 'EventLocation')}}
                {{Form::text('EventLocation', $post->EventLocation, ['class' => 'form-control','placeholder' =>'EventLocation'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('Collaborator', 'Collaborator')}}
                {{Form::textarea('Collaborator', $post->Collaborator, ['class' => 'form-control','placeholder' =>'Collaborator', 'rows' => 5, 'cols' => 40])}}
            </div><hr>
            {{Form::label('Categories', 'Categories')}}
                <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Education" 
                            {{in_array("Education", $Categories) ? "checked": ""}}>Education
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Animals & Nature"
                            {{in_array("Animals & Nature", $Categories) ? "checked": ""}}>Animals & Nature
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Culture & Arts"
                            {{in_array("Culture & Arts", $Categories) ? "checked": ""}}>Culture & Arts
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Community Service"
                            {{in_array("Community Service", $Categories) ? "checked": ""}}>Community Service
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Festival"
                            {{in_array("Festival", $Categories) ? "checked": ""}}>Festival
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Health"
                            {{in_array("Health", $Categories) ? "checked": ""}}>Health
                        </label>
                    </div>
            </div><hr>
            <div class="form-group">
                {{Form::label('RecruitmentDate', 'Last Recruitment Date')}}
                {{Form::date('RecruitmentDate', $post->RecruitmentDate, ['class' => 'form-control'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('TotalCommittee', 'Total Committees Needed')}}
                {{Form::selectRange('number', 0, 1000)}}
            </div><hr>
            
            <div class="form-group">
                {{Form::label('Contact', 'Contact')}}
                {{Form::text('Contact', $post->Contact, ['class' => 'form-control','placeholder' =>'Contact'])}}
            </div><hr>
            <div class="form-group">
                {{Form::file('poster_image')}}
            </div> <hr>
            {{Form::hidden('_method', 'PUT')}}
    		{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
		{!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
