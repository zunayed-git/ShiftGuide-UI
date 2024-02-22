<?php
$pageTitle = "Shift Guide App";
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
        <link rel="stylesheet" href="./css/calendar-style.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'>
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

                        <li class="sidebar-item active">
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
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Schedules</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Availability</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
                                <i class="align-middle" data-feather="refresh-ccw"></i> <span class="align-middle">Swap Requests</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
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
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#!">
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
                                Calendar
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
                            <div id="sgapp-calendar-toolbar-large" class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-2 col-xl-4">
                                            
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    February, 2024
                                                </button>
                                                <ul class="dropdown-menu mt-5">
                                                    <li><a class="dropdown-item" href="#">January, 2024</a></li>
                                                    <li><a class="dropdown-item" href="#">February, 2024</a></li>
                                                    <li><a class="dropdown-item" href="#">March, 2024</a></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-xl-4 text-center">
                                            
                                            <button class="btn btn-light">Day</button>
                                            <button class="btn btn-light">Week</button>
                                            <button class="btn btn-info">Month</button>
                                            <button class="btn btn-light">Year</button>
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-5 col-xl-4 text-end">
                                            
                                            <button class="btn btn-light">
                                                <i class="align-middle" data-feather="chevron-left"></i>
                                            </button>
                                            
                                            <button class="btn btn-light">
                                                Today
                                            </button>
                                            
                                            <button class="btn btn-light">
                                                <i class="align-middle" data-feather="chevron-right"></i>
                                            </button>
                                            
                                            <button id="add-event-button" class="btn btn-info mx-2">
                                                <i class="align-middle" data-feather="plus"></i>
                                                Add
                                            </button>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div id="sgapp-calendar-toolbar-small" class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 text-center">
                                            
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    February, 2024
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">January, 2024</a></li>
                                                    <li><a class="dropdown-item" href="#">February, 2024</a></li>
                                                    <li><a class="dropdown-item" href="#">March, 2024</a></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-4 text-center">
                                            
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Month
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Day</a></li>
                                                    <li><a class="dropdown-item" href="#">Week</a></li>
                                                    <li><a class="dropdown-item" href="#">Month</a></li>
                                                    <li><a class="dropdown-item" href="#">Year</a></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-4 text-center">
                                            
                                            <button class="btn btn-light">
                                                Today
                                            </button>

                                            <button class="btn btn-info mx-2">
                                                <i class="align-middle" data-feather="plus"></i>
                                                Add
                                            </button>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="align-middle" data-feather="search"></i>
                                                    </span>
                                                    <input type="search" class="form-control" placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <ul class="list-unstyled text-center">
                                                    <li>
                                                        <button class="btn">
                                                            Sat
                                                        </button>
                                                    </li>
                                                    
                                                    <li>
                                                        <button class="btn">
                                                            Sun
                                                        </button>
                                                    </li>
                                                    
                                                    <li>
                                                        <button class="btn">
                                                            Mon
                                                        </button>
                                                    </li>
                                                    
                                                    <li>
                                                        <button class="btn btn-info">
                                                            Tue
                                                        </button>
                                                    </li>
                                                    
                                                    <li>
                                                        <button class="btn">
                                                            Wed
                                                        </button>
                                                    </li>
                                                    
                                                    <li>
                                                        <button class="btn">
                                                            Thr
                                                        </button>
                                                    </li>
                                                    
                                                    <li>
                                                        <button class="btn">
                                                            Fri
                                                        </button>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            
                                            <div class="col-8">
                                                
                                                <header>
                                                    <h2 class="sgapp-event-details-header">Friday, 8th</h2>
                                                </header>
                                                
                                                <div class="sgapp-event-details mb-3">
                                                    <h3 class="px-2">
                                                        Push up
                                                    </h3>
                                                    
                                                    <p>
                                                        <i class="align-middle" data-feather="clock"></i> 12:00 - 14:00
                                                    </p>
                                                </div>
                                                
                                                <div class="sgapp-event-details mb-3">
                                                    <h3 class="px-2">
                                                        Push up
                                                    </h3>
                                                    
                                                    <p>
                                                        <i class="align-middle" data-feather="clock"></i> 12:00 - 14:00
                                                    </p>
                                                </div>
                                                
                                                <div class="sgapp-event-details mb-3">
                                                    <h3 class="px-2">
                                                        Push up
                                                    </h3>
                                                    
                                                    <p>
                                                        <i class="align-middle" data-feather="clock"></i> 12:00 - 14:00
                                                    </p>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                
                                                <button class="btn btn-info">
                                                    Event
                                                </button>
                                                
                                                <button class="btn">
                                                    Push up
                                                </button>
                                                
                                                <button class="btn">
                                                    News
                                                </button>
                                                
                                                <button class="btn">
                                                    Email
                                                </button>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="title-input" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="title-input" placeholder="New opening">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description-input" class="form-label">Description</label>
                                                        <input type="text" class="form-control" id="description-input" placeholder="Write description">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="time-input" class="form-label">Set Time</label>
                                                        <input type="datetime-local" class="form-control" id="time-input">
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-info sgapp-full-width">Save Event</button>
                                                </form>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-8">
                                <div class="card">
<!--                                    <div class="card-header">
                                        <h5 class="card-title mb-0"></h5>
                                    </div>-->
                                    <div class="card-body">
                                    
                                        <div id='calendar'></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0"></h5>
                                    </div>
                                    <div class="card-body">

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->

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
        
        <!-- Add modal -->
        <div class="modal fade edit-form" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="modal-title">Add Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="myForm">
                        <div class="modal-body">
                            <div class="alert alert-danger " role="alert" id="danger-alert" style="display: none;">
                                End date should be greater than start date.
                              </div>
                            <div class="form-group">
                                <label for="event-title">Event name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="event-title" placeholder="Enter event name" required>
                            </div>
                            <div class="form-group">
                                <label for="start-date">Start date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="start-date" placeholder="start-date" required>
                            </div>
                            <div class="form-group">
                                <label for="end-date">End date - <small class="text-muted">Optional</small></label>
                                <input type="date" class="form-control" id="end-date" placeholder="end-date">
                            </div>
                            <div class="form-group">
                                <label for="event-color">Color</label>
                                <input type="color" class="form-control" id="event-color" value="#3788d8">
                              </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delete-modal-title">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center" id="delete-modal-body">
                        Are you sure you want to delete the event?
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary rounded-sm" data-dismiss="modal" id="cancel-button">Cancel</button>
                        <button type="button" class="btn btn-danger rounded-lg" id="delete-button">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js'></script>
        
        <!-- Script JS -->
        <script src="./js/calendar-script.js"></script>

        <script src="js/app.js"></script>
        
        <script type="text/javascript">
            // This is for demo purposes only
            setTimeout(() => {
                
                const addEventButton = document.querySelector("#add-event-button");
                const addEventButtonOld = document.querySelector(".fc-button");

                addEventButton.addEventListener("click", event => {
                    addEventButtonOld.click();
                });
            
            }, 1000);
        </script>

    </body>

</html>