
<style type="text/css">
    #about_title{
         font-family: Cambria; 
         font-size: 20px; 
         font-style: normal; 
         font-variant: normal; 
         font-weight: 300; 
         line-height: 27.9px; 
    }
</style>

@php
    $values = explode(", ", $post->Categories);
@endphp
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2"> 
        <div class="card">
            <div class="card-header" id="about_title">EDIT COMMITTEE APPLICATION</div>
                <div class="card-body">         
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

            <div class="form-group">
                <label>Categories</label>
                <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option[]" value="Education" 
                            {{in_array("Education", $values) ? "checked": ""}}>Education
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option[]" value="Animals and Nature"
                            {{in_array("Animals and Nature", $values) ? "checked": ""}}>Animals and Nature
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option[]" value="Culture and Arts"
                            {{in_array("Culture and Arts", $values) ? "checked": ""}}>Culture and Arts
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option[]" value="Community Service"
                            {{in_array("Community Service", $values) ? "checked": ""}}>Community Service
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option[]" value="Festival"
                            {{in_array("Festival", $values) ? "checked": ""}}>Festival
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="option[]" value="Health"
                            {{in_array("Health", $values) ? "checked": ""}}>Health
                        </label>
                    </div>
            </div><hr>
            <div class="form-group">
                {{Form::label('startRec', 'Recruitment Date')}}
                {{Form::date('startRec', $post->startRec, ['class' => 'form-control'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('RecruitmentDate', 'Last Recruitment Date')}}
                {{Form::date('RecruitmentDate', $post->RecruitmentDate, ['class' => 'form-control'])}}
            </div><hr>
            <div class="form-group">
                {{Form::label('TotalCommittee', 'Total Committees Needed')}}
                {{Form::selectRange('TotalCommittee', 0, 1000, ['class' => 'field'])}}
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
</div></div>

        </div>
    </div>
</div>
@endsection
