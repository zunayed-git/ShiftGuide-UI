<?php
$pageTitle = "Shift Guide App";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $pageTitle  ?>">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <title><?= $pageTitle  ?></title>

        <link href="css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="./css/signin.css" rel="stylesheet">
    </head>
    <body>
        <main class="d-flex w-100">
            <div class="container d-flex flex-column">
                <div class="row vh-100">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">

                            <div id="sgapp-signin-card" class="card">
                                <div class="card-body">
                                    <div class="m-sm-3">
                                        
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div id="sgapp-signin-card-banner" class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <!-- Banner will be shown here -->
                                                </div>
                                                
                                                <section class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <header class="row">
                                                        <h1 class="col-12 sgapp-center">
                                                            Sign In
                                                        </h1>
                                                        
                                                        <p class="col-12 sgapp-center">
                                                            Welcome back, You've been missed!
                                                        </p>
                                                    </header>
                                                    
                                                    <div class="row">
                                                        <button class="btn btn-outline-secondary col-sm-12 col-md-6">Sign with Google</button>
                                                        
                                                        <div class="col-1 p-2"></div>
                                                        
                                                        <button class="btn btn-outline-secondary col-sm-12 col-md-5">Sign with Apple</button>
                                                    </div>
                                                    
                                                    
                                                    <form class="mt-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Password</label>
                                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                                        </div>
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="form-check align-items-center">
                                                                        <input id="remember-me-checkbox" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
                                                                        <label class="form-check-label text-small" for="remember-me-checkbox">Remember me</label>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12 col-md-6">
                                                                    <a href="#!" class="btn btn-link float-end">Forgot password?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-grid gap-2 mt-3">
                                                            <a href="./dashboard-1.php" class="btn btn-lg btn-info">Sign in</a>
                                                        </div>
                                                        <div class="text-center mt-3">
                                                            Don't have account yet? <a href="#!">Sign Up</a>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <footer>
                                <nav class="mb-3">
                                    <ul class="nav justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">English</a>
                                        </li>
                                    </ul>
                                </nav>
                                
                                <div class="text-center text-small mb-3">
                                    <small class="text-muted">© 2024 All Rights Reserved</small>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="js/app.js"></script>

    </body>
</html>