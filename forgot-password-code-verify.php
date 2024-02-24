<?php
$pageTitle = "Forgot Password: Shift Guide";
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
        <link href="./css/dashboard.css" rel="stylesheet">
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
                                                
                                                <section id="sgapp-sign-in-card-right-panel" class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div>
                                                        <header class="row">
                                                            <h1 class="col-12 sgapp-center sgapp-text-header">
                                                                2-Step Verification
                                                            </h1>

                                                            <p class="col-12 sgapp-center">
                                                                We sent a verification code to your email.<br/>
                                                                Enter the code from the email below.
                                                            </p>
                                                        </header>

                                                        <form>
                                                            <div class="row pt-2">
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-control-md text-center py-2 border border-info rounded bg-light" maxlength="1" autofocus="">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-control-md text-center py-2 border border-info rounded bg-light" maxlength="1">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-control-md text-center py-2 border border-info rounded bg-light" maxlength="1">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control form-control-md text-center py-2 border border-info rounded bg-light" maxlength="1">
                                                                </div>
                                                            </div>

                                                            <div class="d-grid gap-2 mt-3">
                                                                <a href="./forgot-password-confirm.php" class="btn btn-lg btn-info">Verify my account</a>
                                                            </div>
                                                            <div class="text-center mt-3">
                                                                Already have an account? <a href="./sign-up.php" class="text-info">Sign In</a>
                                                            </div>
                                                        </form>
                                                    </div>
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
                                            <a class="nav-link text-secondary" href="#">Terms & Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-secondary" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-secondary" href="#">Help</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-secondary" href="#">English</a>
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