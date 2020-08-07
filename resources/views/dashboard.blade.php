@extends('layouts.app')

</style>
<script type="text/javascript">
         // Get the modal
        var modal = document.getElementsByClassName('modal');

        // Get the button that opens the modal
        var btn = document.getElementsByClassName("btn btn-info");


        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal 
        btn[0].onclick = function() {
            modal[0].style.display = "block";
        }

        btn[1].onclick = function() {
            modal[1].style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span[0].onclick = function() {
            modal[0].style.display = "none";
        }

        span[1].onclick = function() {
            modal[1].style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>

@section('content')

<br>
 <div id="app">        
    <main class="py-4">
        <div class="container"><br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-20">
                        <div class="card">
                            <div class="card-header">Dashboard</div>
                                <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h3>Your Dashboard</h3>
                                <a type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Create Committee Application</a>
                            @if(count($posts)>0)
                            <a href="/manageapply" type="button" class="btn btn-info" >Manage Application</a>
                            @else
                            <a  type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter1">Manage Application</a>
                            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Committee Applicant</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                             <p>You have no applicant.</p>
                                        </div>
                                    </div>
                            </div>
                            @endif
                                
                                <hr>
                                        <!-- Modal -->
                                <div  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Create Committee Application</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <div class="modal-body">    
                                            {!! Form::open(['action' => 'PostsController@store', 'method' =>'POST', 'enctype'=>'multipart/form-data']) !!}

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
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
                                            {!! Form::close() !!}
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                           
                        @if(count($posts)>0)
                        <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                            <tr>
                                <th>Event Name</th>
                                <th>View</th>
                                <th>Action</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->EventName}}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}" class="btn btn-info">Event details</a>
                                    <a href="{{-- {{ route('manageapply.acceptlist', [$post->id])}} --}}" class="btn btn-info">Accepted Committees</a>

                                </td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
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
</div>
</main>
</div>

@endsection
