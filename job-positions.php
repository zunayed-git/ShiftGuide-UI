<?php
$pageTitle = "Positions: Shift Guide";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $pageTitle ?>">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <title><?= $pageTitle ?></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="./css/dashboard.css" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="#!">
                        <span class="align-middle">
                            <img id="sgapp-logo-img" src="./img/logo.png" alt="Shift Guide Logo" />
                        </span>
                    </a>

                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Menu
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./dashboard-1.php">
                                <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./dashboard-2.php">
                                <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Organizations</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./dashboard-3.php">
                                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Staffs</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./schedules.php">
                                <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Schedules</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./availability.php">
                                <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Availability</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="refresh-ccw"></i> <span class="align-middle">Swap Requests</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./leave-requests.php">
                                <i class="align-middle" data-feather="user-x"></i> <span class="align-middle">Leave Requests</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Overtime Slot</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Job Level</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="./job-positions.php">
                                <i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">Job Positions</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Holiday</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">CAO</span>
                            </a>
                        </li>
                        

                        <li class="sidebar-header">
                            User
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.php">
                                <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main">
                <nav class="navbar navbar-expand navbar-light navbar-bg">
                    <a class="sidebar-toggle js-sidebar-toggle">
                        <i class="hamburger align-self-center"></i>
                    </a>
                    
                    <div id="sgapp-page-header">
                        <header>
                            <h1 class="poppins-medium">
                                Job Positions
                            </h1>
                        </header>
                        <div>
                            <p>
                                Let's check updates
                            </p>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item">
                                <a class="nav-icon" href="#">
                                    <div class="position-relative">
                                        <i class="align-middle" data-feather="moon"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                    <div class="position-relative">
                                        <i class="align-middle" data-feather="bell"></i>
                                        <span class="indicator">4</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                    <div class="dropdown-menu-header">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-danger" data-feather="alert-circle"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Update completed</div>
                                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                    <div class="text-muted small mt-1">30m ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-warning" data-feather="bell"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Lorem ipsum</div>
                                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                    <div class="text-muted small mt-1">2h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-primary" data-feather="home"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Login from 192.186.1.8</div>
                                                    <div class="text-muted small mt-1">5h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-success" data-feather="user-plus"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">New connection</div>
                                                    <div class="text-muted small mt-1">Christina accepted your request.</div>
                                                    <div class="text-muted small mt-1">14h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-footer">
                                        <a href="#" class="text-muted">Show all notifications</a>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <input id="main-search" type="search" class="form-control mt-1 mx-1" placeholder="Search">
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                    <i class="align-middle" data-feather="settings"></i>
                                </a>

                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block mx-2" href="#" data-bs-toggle="dropdown">
                                    <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle me-1" alt="Sadia Mim" />
                                    <span class="text-dark">Sadia Mim</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="./index.php">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main id="sgapp-main" class="content">
                    <div class="container-fluid p-0">

                        <!--<h1 class="h3 mb-3"></h1>-->

                        <div>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-10 mt-2 mb-2">
                                            
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="align-middle" data-feather="search"></i>
                                                </span>
                                                <input type="search" class="form-control" placeholder="Search">
                                            </div>
                                            
                                        </div>
                                        
                                        <button class="btn btn-info col-sm-12 col-md-2 mt-2 mb-2">
                                            <i class="align-middle" data-feather="plus"></i> Add
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!--
                                    <div class="card-header">
                                        <h5 class="card-title mb-0"></h5>
                                    </div> -->
                                    <div class="card-body">

                                        <?php
                                        
                                        for ($i = 1; $i <= 5; $i++)
                                        {
                                            ?>
                                            <div class="row mt-3 mb-3 p-2 border border-light bg-light rounded">
                                                <div class="col-1">
                                                    <span class="sgapp-job-label"></span>
                                                </div>
                                                <div class="col-10">
                                                    Manager
                                                </div>
                                                <div class="col-1 sgapp-right">
                                                    <button class="btn btn-light">
                                                        <i class="align-middle text-danger" data-feather="x"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-start">
                                <p class="mb-0">
                                    <a class="text-muted" href="#!" target="_blank"><strong>Shift Guide</strong></a> - <a class="text-muted" href="#!" target="_blank"><strong>App</strong></a>								&copy;
                                </p>
                            </div>
                            <div class="col-6 text-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#!" target="_blank">Terms & Condition</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#!" target="_blank">Privacy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#!" target="_blank">Help</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="#!" target="_blank">English</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="js/app.js"></script>

    </body>

</html>