

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Add new About</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
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
        <a href="/Dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link">Settings</a>
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
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
                <a href="/setting" class="nav-link">
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <!-- /.card -->

            <!-- general form elements -->

            <!-- /.card -->

            <!-- /.card -->
            <!-- Horizontal Form -->
            <h3 class="card-title">Current About</h3>
            <style>
                .text-center {
                    margin: 0 auto;
                }

            </style>
        </div>
        <table class="table table-bordered">
            <thead>

                <tr>

                    <td>Company name</td>
                    <td>About</td>
                    <td>Mission</td>
                    <td>Vision</td>
                    

                </tr>
            <tbody>
              
                <tr>
                    <td>
                        <p style="width: 250px; height:80px;">
                           {{ $abouts["title"] }}
                        </p>
                    </td>
                    <td>
                        <p style="width: 250px; height:80px;">
                            {{ $abouts["about"] }}
                        </p>
                    </td>
                    <td>
                        <p style="width: 250px; height:80px;">
                            {{ $abouts["mission"] }}
                        </p>
                    </td>
                    <td>
                        <p style="width: 250px; height:80px;">
                            {{ $abouts["vision"] }}
                        </p>
                    </td>
                    
                </tr>
            
            </tbody>

            </thead>
        </table>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">About Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                @csrf
                @if ($message =Session::get('success_msg'))
                <div id="success">
                  <p >{{ $message }}</p>

                </div>
                <STYle>
                  #success{
                    margin: 0 auto;
                    display: flex;
                    justify-content: center;
                    padding: 20PX;
                    background: rgb(201, 201, 201);
                    color: green;
                    text-transform: uppercase;
                    font-size: 20px;
                  }
                </STYle>
                    
                @endif
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Company Picture</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="image" id="inputEmail3">
                      <span>@error('image'){{ $message }}
              
                        @enderror</span>
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title" value="{{ $abouts['title'] }}" id="inputEmail3" placeholder="type company name">
                      <span>@error('title'){{ $message }}
              
                        @enderror</span>
                    </div>
                   
                  </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">About us</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="about" value="{{ $abouts['about'] }}"  id="" cols="30" rows="10" id="inputPassword3" placeholder="type about company">{{ $abouts['about'] }}</textarea>
                        <span>@error('about'){{ $message }}
                
                            @enderror</span>
                        </div>
                    </div>
                  </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Our Mission</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="mission" value="{{ $abouts['mission'] }}"  id="" cols="30" rows="10" id="inputPassword3" placeholder="type mission">{{ $abouts['mission'] }}</textarea>
                        <span>@error('mission'){{ $message }}
                
                            @enderror</span>
                        </div>
                    </div>
                  </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Our Vision</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="vision" value="{{ $abouts['vision'] }}"  id="" cols="30" rows="10" id="inputPassword3" placeholder="type vision">{{ $abouts['vision'] }}</textarea>
                        <span>@error('vision'){{ $message }}
                
                            @enderror</span>
                        </div>
                    </div>
                 
                    <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add About</button>
                  </div>
                  
                  <!-- /.card-footer -->
                </div>
                
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</html>
