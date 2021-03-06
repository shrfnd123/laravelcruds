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
        <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
        <form method="POST" action="{{route('createemployee')}}">
                      @csrf
                  
   
                          <label for="">FirstName</label>
                          <div class="form-group">
                            <div class="input-group-prepend">
                               </div>
                                 <input type="text" class="form-control" name="FirstName" placeholder="Firstname" required>
                                    </div>
                                      <!-- /input-group -->
                                         </div>
                                            <!-- /.col-lg-6 -->
                      <div class="col-lg-4">
                         <label for="">Middlename</label>
                        <div class="form-g roup">
                          <div class="input-group-prepend">
                              </div>
                                <input type="text" name="MiddleName" class="form-control" placeholder="MiddleName" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                                         <!-- /.col-lg-6 -->
                                          
                    <div class="col-lg-4">
                      <label for="exampleInputEmail1">Lastname</label>
                        <div class="form-group">
                          <div class="input-group-prepend">
                              </div>
                                <input type="text" name="LastName" class="form-control" placeholder="LastName" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                                         <!-- /.col-lg-6 -->
                                        <div class="col-lg-4">
                     <label for="exampleInputEmail1">Gender</label>
                        <div class="form-group">
                           <div class="input-group-prepend"></div>
                              <select class="form-control select2" name="Gender" style="width: 100%;" required>
                                 <option selected="selected">Select Gender</option>
                                    
                                       <option value="female">female</option>
                                          <option value="male">male</option>
                                             </select> 
                                                </div>
                                                  <!-- /input-group -->
                                                    </div>
    
                                                  <!-- /.col-lg-6 -->
                                                 
                          <div class="col-lg-4">
                   <label for="exampleInputPassword1" >Address</label>
                      <input type="text" name="Address" class="form-control"  placeholder="Address" required>
    
                          </div>
                           <div class="col-lg-4">
                   <label for="exampleInputPassword1" >Contact Number</label>
                      <input type="text" name="ContactNumber" class="form-control"  placeholder="ContactNumber" required>
    
                          </div>
    
                   
                                         <!-- /.col-lg-6 -->
                                         <div class="col-lg-4">
                      <label for="exampleInputEmail1">Birthdate</label>
                        <div class="form-group">
                          <div class="input-group-prepend">
                              </div>
                               <input type="Date" name="Birthdate" class="form-control" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
   
                  <div class="col-lg-4">
                      <label for="exampleInputEmail1">Email</label>
                        <div class="form-group">
                          <div class="input-group-prepend">
                              </div>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                           
                             
                 
                    
                  <div class="col-lg-4">
                      <label for="exampleInputEmail1">Username</label>
                        <div class="form-group">
                          <div class="input-group-prepend">
                              </div>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                                      <div class="col-lg-4">
                      <label for="exampleInputEmail1">Password</label>
                        <div class="form-group">
                          <div class="input-group-prepend">
                              </div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                                      <div class="col-lg-4">
                     <label for="exampleInputEmail1">User Type</label>
                        <div class="form-group">
                           <div class="input-group-prepend"></div>
                              <select class="form-control select2" name="usertype" style="width: 100%;" required>
                                 <option selected="selected"></option>
                                    
                                       <option value="2">Employee</option>
                                          <option value="3">Student</option>
                                             </select> 
                                                </div>
                                                  <!-- /input-group -->
                                                    </div>
    
                                                  <!-- /.col-lg-6 -->
                                      
                           
                             
                    </div>
                    <!-- /.card-body -->	
                    <div class="card-footer">
                      <button type="submit"  class="btn btn-success" >Save</button>
                      <button type="submit" id='cancel' class="btn btn-default">Cancel</button>
                    </div>
                  </form>
                  </div>
                  </div>
        </div>
        @endsection
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
