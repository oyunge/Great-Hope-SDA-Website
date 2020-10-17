





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Syokimau</title>
    <link href="css/styles2.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Syokimau Central</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="addNews">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="addInfo">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            About Us
                        </a>
                        <a class="nav-link" href="addDepartment">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Departments
                        </a>
                        <a class="nav-link" href="addEvent">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Events
                        </a>
                        <a class="nav-link" href="addSermon">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Sermons
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Contact Us
                        </a>





                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Oyunge
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
    <div class="container">
        <form action="/sermon" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        
                        <input type="file" class="form-control" id="file" name="cover_image"  placeholder="">
                    </div>
                </div>
                </div>
                <p>Add an Audio</p>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            
                            <input type="file" class="form-control" id="audio" name="audio"  placeholder="">
                        </div>
                    </div>
                    </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="title">Sermon Title</label>
                        <input type="text" class="form-control" id="title" name="title"  placeholder="Sermon Title">
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="sermonFrom">Sermon From</label>
                        <input type="text" class="form-control" id="sermonFrom" name="sermonFrom" placeholder="sermonFrom">
                    </div>
                </div>
              
                <div class="col-12">
                    <div class="form-group">
                        <label for="categories">Categories</label>
                        <textarea class="form-control" name="categories" id="categories" cols="30" rows="10" placeholder="categories"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn crose-btn mt-15" value="" >Submit Now</button>
                </div>
            </div>
        </form>
</div>





        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>

</body>

</html>