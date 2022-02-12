<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Contacts</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/get_qoute" class="nav-link">Get new  Quote</a>
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
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
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
                <img src="./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Ropistic</span>
            </a>

            <!-- Sidebar -->
            
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

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form action="" method="POST">
                                        @csrf
                                        @if ($message = Session::get('success_msg'))
                                            <div id="success">
                                                <p>{{ $message }}</p>

                                            </div>
                                            <STYle>
                                                #success {
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
                                        <div class="card-header text-center">
                                            <h3 class="card-title">Current Calculator</h3>
                                            <style>
                                                .text-center {
                                                    margin: 0 auto;
                                                }

                                            </style>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>

                                                <tr>

                                                    <td>Road Freight</td>
                                                    <td>Air Freight</td>
                                                    <td>Ship Freight</td>
                                                    <td>Distance(Km)</td>
                                                    <td>Weight(Kg)</td>

                                                </tr>
                                            <tbody>
                                                
                                                <tr>
                                                    <td>
                                                        <p style="width: 150px; height:30px; border:2px solid black;">
                                                            {{$checkIDs['name'] }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="width: 150px; height:30px; border:2px solid black;">
                                                            {{$checkIDs['status'] }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="width: 150px; height:30px; border:2px solid black;">
                                                            {{$checkIDs['trackingID'] }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="width: 150px; height:30px; border:2px solid black;">
                                                            {{$checkIDs['email'] }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p style="width: 150px; height:30px; border:2px solid black;">
                                                            {{$checkIDs['estimate'] }}
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>

                                            </thead>
                                        </table>
                                    </form>
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


            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>



    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b></b> 
        </div>
        <strong> <a href="https://adminlte.io"></a>.</strong> 
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
