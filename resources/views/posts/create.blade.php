{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2 justify-content-center">
        <div class="col-lg-8 order-lg-2">
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create Committee Applycation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">    
                    {!! Form::open(['action' => 'PostsController@store', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}

                		<div class="form-group">

                        <div class="form-group">

                            {{Form::label('Organizer', 'Organizer')}}
                            {{Form::text('Organizer', (Auth::user()->name), ['class' => 'form-control','placeholder' =>'Organizer'])}}
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
                            <label>Categories</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="option[]" value="Education"> Education
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="option[]" value="Animals and Nature"> Animals and Nature
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="option[]" value="Culture and Arts"> Culture and Arts
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="option[]" value="Community Service"> Community Service
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="option[]" value="Festival"> Festival
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="option[]" value="Health"> Health
                                    </label>
                                </div>
                        </div><hr>
                        <div class="form-group">
                            {{Form::label('startRec', 'Recruitment Date')}}
                            {{Form::date('startRec', '', ['class' => 'form-control'])}}
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
                        </div>
                      <div class="modal-footer">
                		{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
            		{!! Form::close() !!}
                        </div>
                    </div>
                  </div>
                </div>

        </div>
    </div>
</div>
</div>
</div></div>

@endsection
 --}}