
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> @yield('title') </title>
  <!--favicon-->
  <link rel="icon" href="{{ url('admin_theme/assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{ url('admin_theme/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ url('admin_theme/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>

  <!--Data Tables -->
  <link href="{{ url('admin_theme/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ url('admin_theme/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
  


  <!-- animate CSS-->
  <link href="{{ url('admin_theme/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ url('admin_theme/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ url('admin_theme/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ url('admin_theme/assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="/">
       <img src="{{ url('admin_theme/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text"> STLogs</h5>
     </a>
   </div>
   
   <ul class="sidebar-menu do-nicescrol">
      
      <li>
        <a href="/st_admin/Dashboard" class="waves-effect">
          <i class="icon-home"></i><span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
        <i class="icon-handbag"></i><span>Master</span> 
       <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="/st_admin/Categories"><i class="fa fa-long-arrow-right"></i> Categories</a></li>
            <li><a href="/st_admin/State"><i class="fa fa-long-arrow-right"></i> State</a></li>
            <li><a href="/st_admin/District"><i class="fa fa-long-arrow-right"></i> District</a></li>
            <li><a href="/st_admin/Product-Type"><i class="fa fa-long-arrow-right"></i> Product Type</a></li>
            <li><a href="/st_admin/Product-Type"><i class="fa fa-long-arrow-right"></i> Offer</a></li>
        </ul>
      </li>


      <li>
        <a href="javaScript:void();" class="waves-effect">
        <i class="icon-handbag"></i><span>Products</span> 
       <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="/st_admin/Products"><i class="fa fa-long-arrow-right"></i> Products</a></li>
            <li><a href="/st_admin/Products-images"><i class="fa fa-long-arrow-right"></i> Product Images</a></li>
            <li><a href="/st_admin/Products-desc"><i class="fa fa-long-arrow-right"></i> Product Description</a></li>
            <li><a href="/st_admin/Products-prosncons"><i class="fa fa-long-arrow-right"></i> Pros and Cons</a></li>
            <li><a href="/st_admin/Products-cures"><i class="fa fa-long-arrow-right"></i> Cures</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
        <i class="icon-handbag"></i><span>Sales</span> 
       <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="/st_admin/Enquiries"><i class="fa fa-long-arrow-right"></i> Enquiries</a></li>
            <li><a href="/st_admin/Orders"><i class="fa fa-long-arrow-right"></i> Orders</a></li>
        </ul>
      </li>
    
    
   
    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-lock-open"></i><span>Setting</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="/st_admin/Configurations"><i class="fa fa-long-arrow-right"></i> Configuration</a></li>
            <li><a href="/st_admin/Change-password"><i class="fa fa-long-arrow-right"></i> Change Password</a></li>
            <li><a href="/st_admin/Logout"><i class="fa fa-long-arrow-right"></i> Logout</a></li>
        </ul>
       </li>
     
    
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-ibiza">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 10 Notifications
          <span class="badge badge-primary">10</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-people fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          
         
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Admin</h6>
            <p class="user-subtitle">admin@stlogs.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
      @yield('options')
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div style="height:600px"> <!--Please remove the height before using this page-->
             <!-- Content Goes Here  --> 

            @yield('content')

             <!-- Contents Ends Here -->
             
          </div>
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Swevi Technologies Pvt. Ltd.
        </div>
      </div>
    </footer>
  <!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('admin_theme/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/js/popper.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/js/bootstrap.min.js') }}"></script>
  
  <!-- simplebar js -->
  <script src="{{ url('admin_theme/assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- waves effect js -->
  <script src="{{ url('admin_theme/assets/js/waves.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ url('admin_theme/assets/js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ url('admin_theme/assets/js/app-script.js') }}"></script>

  

  <script src="{{ url('admin_theme/assets/plugins/alerts-boxes/js/sweetalert.min.js') }}"></script>

  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('admin_theme/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>


  <script src="{{ url('js/custom/accounts.js') }}" type="text/javascript"></script>

  <script>
      // Set Global URL To Get Into Ajax Response or Ajax Request
      var APP_URL = {!! json_encode(url('/')) !!}
      
      $(document).ready(function() {    


        //Default data table
        setTimeout(function(){
          var table = $('#datatable').DataTable( {
              lengthChange: false,
              buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ],
              'columnDefs': [ {
                  'targets': [1], /* column index */
                  'orderable': false, /* true or false */
               }]
            } );

            table.buttons().container()
              .appendTo( '#datatable_wrapper .col-md-6:eq(0)' );
        },1000);


        // To Select All Check Boxes
        $("#all").click(function(){
          $(".pId").prop('checked', $(this).prop('checked'));
          
            $("#delButton").removeClass('disabled');
            if(!$(this).prop('checked')){
                    $('#delButton').addClass('disabled');
                }  
        });

        $(".t_id").change(function(){
          if(!$(this).prop('checked')){
            $("#All").prop("checked",false);
          }
        });

        $(".t_id").click(function(){
          $('#delButton').removeClass('disabled');
        });
             
      

      });

  </script>


  
</body>
</html>
