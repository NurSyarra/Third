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
<link rel="stylesheet" type="text/css" href="css/app.css">

@extends('layouts.app')

@section('content')
<div id="app">        
    <main class="py-4">
        <div class="container"><br>
          
            <div class="row justify-content-center">
                <div class="col-md-30">
                    <div class="card">
                        <div class="card-header" id="about_title">Manage Application(s)</div>
                            <div class="card-body">
                                

                                <table class="table table-striped table-bordered table-hover dataTable js-exportable">
                                    <tr>
                                      <th>No.</th>
                                      <th>Student ID</th>
                                      <th>Student Name</th>
                                      <th>Student Email</th>
                                      <th>Applied at</th>
                                      <th>Action</th>
                                      <th>Status</th>
                                    </tr>
                                  
                                  @foreach($apply as $key => $apply)
                                  <tr>
                                      <td>{{$key + 1}}</td>
                                      <td>{{$apply->matric}}</td>
                                      <td>{{$apply->name}}</td>
                                      <td>{{$apply->email}}</td>
                                      <td>{{$apply->created_at}}</td>
                                      <td>
                                        <span style="display: inline;">
                                          
                                          <a href="" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="far fa-eye"></i></a>
                                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Student Profile</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>   
                                                  <center> <img src="/storage/images/{{$apply->image}}" class="w3-border" style="padding:4px;width:30%"/></center>
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
                                            
                                              {!!Form::open(['action' => ['ManageApplyController@accept', $apply->id], 'method' => 'POST', 'class' => 'pull-right inline'])!!}
                                                {!!Form::submit('ACCEPT', ['class' => 'btn btn-info'])!!}
                                              {!!Form::close()!!}
                                          
                                              {{Form::open(['action' => ['ManageApplyController@reject', $apply->id], 'method' => 'POST', 'class' => 'pull-right inline'])}}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('REJECT', ['class' => 'btn btn-danger'])}}
                                              {{Form::close()}}
                                          </span>
                                      
                                      </td>

                                      <td>
                                        
                                          @if( $apply->status == 2)
                                          Accepted
                                          @elseif($apply->status == 1)
                                          Rejected
                                          @else
                                          Pending
                                          @endif</td>
                                  </tr>
                                  @endforeach 
                                 
                              </table>
                              <a href="/manageapply" class=" btn btn-info pull-right">BACK</a>
                            </div>
                    </div>
                </div>                
            </div>
           
		    </div>
    </main>
</div>




                   
@endsection
