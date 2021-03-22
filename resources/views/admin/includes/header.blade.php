<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JMM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('bootstrap/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}"></meta>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('bootstrap/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">JMM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('bootstrap/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
      
          <a href="#" class="d-block">Admininstrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="widgets.html" class="nav-link active">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
              Manage Employee
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addemployee') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('listofemployee') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List of Employee</p>
                </a>
              </li>
         
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
              Manage Student
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addstudent') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('listofstudent') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List of Student</p>
                </a>
              </li>
         
            </ul>
          </li>
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <div class="modal modal-success fade" id="modal-success">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Account for <i style="color: #49c5b6" id="id-name"></i></h4>
             </div>

                    <div class="modal-body">
                  
              <!-- /.card-header -->
              <!-- form start -->
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-4">
              <form  >
                      @csrf
                  
                      <input type="hidden" name="users_id" id="users_id" >
                          <label for="">FirstName</label>
                          <div class="form-group">
                            <div class="input-group-prepend">
                               </div>
                                 <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="Firstname" required>
                                    </div>
                                      <!-- /input-group -->
                                         </div>
                                            <!-- /.col-lg-6 -->
                      <div class="col-lg-4">
                         <label for="">Middlename</label>
                        <div class="form-g roup">
                          <div class="input-group-prepend">
                              </div>
                                <input type="text" name="MiddleName" class="form-control" id="MiddleName" placeholder="MiddleName" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                                         <!-- /.col-lg-6 -->
                                          
                    <div class="col-lg-4">
                      <label for="exampleInputEmail1">Lastname</label>
                        <div class="form-group">
                          <div class="input-group-prepend">
                              </div>
                                <input type="text" name="LastName" class="form-control" id="LastName" placeholder="LastName" required>
                                  </div>
                                    <!-- /input-group -->
                                      </div>
                          <div class="col-lg-4">
                   <label for="exampleInputPassword1" >Address</label>
                      <input type="text" name="Address" class="form-control" id="Address" placeholder="Address" required>
    
                          </div>
                           <div class="col-lg-4">
                   <label for="exampleInputPassword1" >Contact Number</label>
                      <input type="text" name="ContactNumber" class="form-control" id="ContactNumber" placeholder="ContactNumber" required>
    
                          </div> 
                    <!-- /.card-body -->	
                    <div class="card-footer">
                      <button type="submit"  class="btn btn-success update_employee">Save</button>
                      <button type="submit" id='cancel' class="btn btn-default">Cancel</button>
                    </div>
                  </form>
                  </div>
                  </div>
        </div></div></div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</div>
    

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('bootstrap/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bootstrap/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('bootstrap/plugins/fastclick/fastclick.js')}}"></script>

<script src="{{asset('bootstrap/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('bootstrap/dist/js/demo.js')}}"></script>

<script type="text/javascript">
function edit_user(el){
  var users_id = $(el).attr('users_id');
  var FirstName = $(el).attr('FirstName');
  var MiddleName = $(el).attr('MiddleName');
  var LastName = $(el).attr('LastName');
  var Address = $(el).attr('Address');
  var ContactNumber = $(el).attr('ContactNumber');
  $("#users_id").val(users_id);
  $("#FirstName").val(FirstName);
  $("#MiddleName").val(MiddleName);
  $("#LastName").val(LastName);
  $("#Address").val(Address);
  $("#ContactNumber").val(ContactNumber);
  $("#id-name").html(FirstName);
  $("#modal-success").modal('show');
  //  console.log(users_id);
}</script>
<script type="text/javascript">
$(".update_employee").click(function(e){
  
  let users_id = $("#users_id").val();
  let FirstName = $("#FirstName").val();
  let MiddleName = $("#MiddleName").val();
  let LastName = $("#LastName").val();
  let Address = $("#Address").val();
  let ContactNumber = $("#ContactNumber").val();
  let _token   = $('meta[name="csrf-token"]').attr('content');
  
  var url = "";
  $.ajax({
        
        url: "{{route('updateemployee')}}",
        type:"POST",
        data:{
          users_id:users_id,
          FirstName:FirstName,
          MiddleName:MiddleName,
          LastName:LastName,
          Address:Address,
          ContactNumber:ContactNumber,
          _token: _token
        },
        success:function(data){
          console.log(data);
         data.sample
        },
        error:function(data){
          console.log(data); 
        }
       }); 
       
})
</script>
</body>
</html>
