@extends('admin.includes.header')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>last Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact Number</th>
        <th>Action</th>
        </tr></thead>
        <thead>
        <tr>
        
        <td>{{$sql->FirstName}}</td>
        <td>{{$sql->MiddleName}}</td>
        <td>{{$sql->LastName}}</td>
        <td>{{$sql->Address}}</td>
        <td>{{$sql->Gender}}</td>
        <td>{{$sql->ContactNumber}}</td>
        <td><h4><a onclick="edit_user(this)" href="javascript:;" users_id="{{$sql->employee_id}}" FirstName="{{$sql->FirstName}}" MiddleName="{{$sql->MiddleName}}" 
        LastName="{{$sql->LastName}}" Address="{{$sql->Address}}" ContactNumber="{{$sql->ContactNumber}}"
        class="fa fa-edit" aria-hidden="true"></a>&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i></h4></td>
  
        </tr></thead>
        </table>
        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
     
    </section>
    <!-- /.content -->
    @endsection