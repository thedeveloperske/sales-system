<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Library System</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.jpg"/>
</head>

<style>
    .sidebar-wrapper .sidebar-header .user-pic {
        width: 160px;
        padding: 2px;
        margin-right: 15px;
        overflow: hidden;
    }

    h2 {
        color: white;
    }
</style>

<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard.php">Library System</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
        </button>

        <h5>Welcome</h5>

        <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
            <span>Toggle Sidebar</span>
        </a>
        <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
            <span>Pin Sidebar</span>


            <a href="#" data-theme="default-theme" class="theme default-theme selected"></a>
            <a href="#" data-theme="chiller-theme" class="theme chiller-theme"></a>
            <a href="#" data-theme="legacy-theme" class="theme legacy-theme"></a>
            <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
            <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
            <a href="#" data-theme="light-theme" class="theme light-theme"></a>

            <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
            <a href="#" data-bg="bg2" class="theme theme-bg"></a>
            <a href="#" data-bg="bg3" class="theme theme-bg"></a>
            <a href="#" data-bg="bg4" class="theme theme-bg"></a>
        </a>

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                       aria-describedby="basic-addon2"/>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>


        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Logout</a>
                    <a class="dropdown-item" href="changepassword.php">Change Password</a>
                    <a class="dropdown-item" href="register.php">Add User</a>
                </div>
            </li>
        </ul>
    </nav>


    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-brand  -->

            <!-- sidebar-header  -->
            <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="img/img_avatar.jpg" alt="User picture">
                </div>
                <div class="user-info">


                    <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                </div>
            </div>

            <!-- sidebar-menu  -->
            <div class=" sidebar-item sidebar-menu">
                <ul>


                    <!-- Navbar-->

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-user fa-fw"></i></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Activity Log</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.php">Logout</a>
                            <a class="dropdown-item" href="changepassword.php">Change Password</a>
                            <a class="dropdown-item" href="register.php">Add User</a>
                        </div>
                    </li>


                   <li class="sidebar-dropdown">
                        <a href="dashboard.php">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="menu-text">Dashboard</span>
                            <!--<span class="badge badge-pill badge-warning">New</span>-->
                        </a>

                    </li>

                    <li class="sidebar-dropdown">
                        <a href="student.php">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="menu-text">Student</span>
                            <!--<span class="badge badge-pill badge-warning">New</span>-->
                        </a>
                       
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="book.php">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="menu-text">Book</span>
                            <!-- <span class="badge badge-pill badge-danger">3</span>-->
                        </a>
                       
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="issue-book.php">
                            <i class="far fa-gem"></i>
                            <span class="menu-text">Issue</span>
                        </a>
                       
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="book-return.php">
                            <i class="fa fa-chart-line"></i>
                            <span class="menu-text">Return</span>
                        </a>
                       
                    </li>

                    <li>
                        <a href="about.php">
                            <i class="fa fa-folder"></i>
                            <span class="menu-text">About Library System</span>
                        </a>
                    </li>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-footer  -->
       
    </nav>


    <!-- page-content" -->

    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <script src="js/main.js"></script>
</body>

</html>