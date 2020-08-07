
<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')


@section('content')
<div id="app">        
    <main class="py-4">
        <div class="container"><br>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Commitee Application</div>
                            <div class="card-body">
                              
                                @if(count($apply) > 0)
                                  
                                <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                                    <tr>
                                      <th>No.</th>
                                      <th>Event Name</th>
                                      <th>Student ID</th>
                                      <th>Student Name</th>
                                      <th>Student Email</th>
                                      <th>Action</th>
                                    </tr>
                                  @foreach($apply as $key => $apply)
                                  
                                  <tr>
                                      <td>{{$key + 1}}</td>
                                      <td>{{$apply->EventName}}</td>
                                      <td>{{$apply->matric}}</td>
                                      <td>{{$apply->name}}</td>
                                      <td>{{$apply->email}}</td>
                                      <td>
                                          
                                          <a href="{{-- {{ route('manageapply.update', ['id'=>$apply->user_id]) }} --}}" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">View Profile</a>
                                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Student Profile</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>   
                                                    <p><b>Name: </b>{{$apply ->name }}</p>
                                                    <p><b>Email: </b>{{$apply ->email }}</p>
                                                    <p><b>Matric No.: </b>{{$apply->matric }}</p>
                                                    <p><b>Kulliyyah: </b>{{ $apply->kulliyyah}}</p>
                                                    <p><b>Level: </b>{{ $apply ->level}}</p>
                                                    <p><b>Phone No.: </b>{{ $apply ->phone}}</p>
                                                    <p><b>Skills: </b>{{ $apply->skills}}</p>       
                                                  </div>
                                                        </div>
                                                      </div>
                                            
                                          <a href="" class="btn btn-info">Accept</a>
                                          <a href="" class="btn btn-danger">Reject</a>
                                      </td>
                                  </tr>
                                  
                                  @endforeach 
                              </table> 
                              @else
                              <table class="table table-striped">
                                  <tr>
                                      <th>Event Name</th>
                                      <th>Student ID</th>
                                      <th>Student Name</th>
                                      <th>Student Email</th>
                                      <th>Action</th>
                                  </tr>
                                  <tr>
                                    <td>NO APPLICANTS</td>
                                  </tr>
                              </table>
                              @endif
                            
                            </div>
                    </div>
                </div>                
            </div>
		    </div>
    </main>
</div>




                   
@endsection
