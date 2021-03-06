@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">      
        <h1>CREATE RECRUITMENT APPLICATION</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}
    		<div class="form-group">
                {{Form::label('Organizer', 'Organizer')}}
                {{Form::text('Organizer', '', ['class' => 'form-control','placeholder' =>'Organizer'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('EventName', 'Event Name')}}
                {{Form::text('EventName', '', ['class' => 'form-control','placeholder' =>'Event Name'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('EventDate', 'Event Date')}}
                {{Form::date('EventDate', '', ['class' => 'form-control'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('Description', 'Description')}}
                {{Form::textarea('Description', '', ['class' => 'form-control','placeholder' =>'Description', 'rows' => 5, 'cols' => 40])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('EventLocation', 'Event Location')}}
                {{Form::text('EventLocation', '', ['class' => 'form-control','placeholder' =>'Event Location'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('Collaborator', 'Collaborator')}}
                {{Form::textarea('Collaborator', '', ['class' => 'form-control','placeholder' =>'Collaborator', 'rows' => 5, 'cols' => 40])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('Categories', 'Categories')}}
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Education">Education
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Animals & Nature">Animals & Nature
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Culture & Arts">Culture & Arts
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Community Service">Community Service
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Festival">Festival
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="Categories[]" value="Health">Health
                        </label>
                    </div>
            </div><hr>
            <div class="form-group">
                {{Form::label('RecruitmentDate', 'Last Recruitment Date')}}
                {{Form::date('RecruitmentDate', '', ['class' => 'form-control'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('TotalCommittee', 'Total Committees Needed')}}
                {{Form::selectRange('TotalCommittee', 0, 1000, ['class' => 'field'])}}
            </div><hr>
            
            <div class="form-group">
                {{Form::label('Contact', 'Contact')}}
                {{Form::text('Contact', '', ['class' => 'form-control','placeholder' =>'Contact'])}}
            </div><hr>
            <div class="form-group">
                {{Form::file('poster_image')}}
            </div><hr>
    		{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
		{!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
