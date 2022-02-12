<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Contacts</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="faq_style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/add_about" class="nav-link">Settings</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/add_blog" class="nav-link">Add Blog</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/check_order" class="nav-link">Check Orders</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/check_contact" class="nav-link">Check Contacts</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">

        <p><a class="nav-link" href="/log_out">Logout</a></p>
        <div class="navbar-search-block">

        </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ropistic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/check_contact" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Check Contacts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/add_blog" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>add blog</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/check_order" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>check orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/settings" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin_calculator" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>calculator</p>
                    </a>
                  </li>
              <!-- <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
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
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main content -->
   



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header text-center">
                <h3 class="card-title">Orders list</h3>
                <style>
                  .text-center {
                    margin: 0 auto;
                  }
                </style>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    
                    <tr>
                      <th style="width: 10px">Order ID</th>
                      <th>Name</th>
                      <th>freight</th>
                      <th>estimate</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <form action="/check_order" method="POST">
                      @csrf
                    
                    <tr>
                      <td> {{ $order['id'] }}</td>
                      <td>{{ $order['name'] }}</td>
                      <td>{{ $order['freight'] }}</td>
                      <td>{{ $order['estimate'] }}$</td>
                      <td>{{ $order['status'] }}</td>
                    
                        <td>  <button type="submit" class="btn btn-info"><a href="/viewmore?id={{ $order['id'] }}">View more</a></button> </td>
                        

                         
                        
                    </tr> 
                    @endforeach
                    </form>
                  </tbody>
                </table>
                {{ $orders->links('vendor.pagination.bootstrap-4') }}
          </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
<br><br>




  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
</body>
</html>
