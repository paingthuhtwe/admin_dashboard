<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Css Link -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>

<body>
    <?php
        // session_start();
    $login = $_SESSION['login'];
    ?>

    <?php if($login):?>


    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 bg-light pe-3">
                <h1 class="h4 py-3 text-center text-primary">
                    <i class="fas fa-ghost me-2"></i>
                    <span class="d-none d-lg-inline"> GHOST ADMIN </span>
                </h1>

                <!-- Start Controls Section -->
                <div class="list-group text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>CONTROLS</small>
                    </span>
                    <a href="" class="list-group-item list-group-item-action active">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">Dashboard</span>
                    </a>
                    <a href="components/users.html" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">Users</span>
                        <span class="d-none d-lg-inline badge bg-danger rounded-pill float-right ms-2">20</span>
                    </a>
                    <a href="" class="list-group-item list-group-item-action">
                        <i class="fas fa-chart-line"></i>
                        <span class="d-none d-lg-inline">Statistics</span>
                    </a>
                    <a href="" class="list-group-item list-group-item-action">
                        <i class="fas fa-flag"></i>
                        <span class="d-none d-lg-inline">Reports</span>
                    </a>
                </div>
                <!-- End Control Section -->
                <!-- Start Action Section -->
                <div class="list-group mt-4 text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>ACTIONS</small>
                    </span>
                    <a href="" class="list-group-item list-group-item-action">
                        <i class="fas fa-user"></i>
                        <span class="d-none d-lg-inline">New User</span>
                    </a>
                    <a href="components/update-data.html" class="list-group-item list-group-item-action">
                        <i class="fas fa-edit"></i>
                        <span class="d-none d-lg-inline">Update Data</span>
                    </a>
                    <a href="components/to-do-list.html" class="list-group-item list-group-item-action">
                        <i class="far fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Add Events</span>
                    </a>
                </div>
            </nav>
            <main class="col-10 bg-secondary">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="flex-fill"></div>

                    <div class="navbar nav">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="d-none">
                                    <a href="components/profile_card.html" class="dropdown-item text-dark action">
                                        <i class="fas fa-user me-3"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="logout.php" class="dropdown-item text-dark action">
                                        <div data-bs-toggle="modal" data-bs-target="#signInModal">
                                            <i class="fas fa-sign-in me-3"></i>


                                            <?php if($login):?>
                                            Logout
                                            <?php else: ?>
                                            Sign in
                                            <?php endif ?>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item text-dark">
                                        <div data-bs-toggle="modal" data-bs-target="#signUpModal">
                                            <i class="fas fa-user-plus me-2"></i>
                                            Sign Up
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog"></i>
                            </a>
                        </li>
                    </div>
                </nav>
                <div class="container-fluid mt-3 p-4">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="alert alert-info">
                                <i class="fas fa-download me-2"></i>
                                A new version of admin dashboard is released.
                                <a href="#">Download Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Action Section -->
                    <!-- Start Quick Section -->
                    <div class="row flex-column flex-lg-row">
                        <h2 class="h6 text-white-50">QUICK START</h2>

                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">1,250</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>
                                        Daily visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">8,210</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>
                                        Weekly visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">12,560</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>
                                        Monthly visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">102,250</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>
                                        Yearly visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Quick Section -->
                    <!-- Start Location Section -->
                    <div class="row mt-4 flex-column flex-lg-row">
                        <div class="col">
                            <h2 class="h6 text-white-50">LOCATION</h2>

                            <div class="card mb-3" style="height: 280px">
                                <div class="card-body">
                                    <small class="text-muted">Regional</small>
                                    <div class="progress mb-4 mt-2" style="height: 5px">
                                        <div class="progress-bar bg-success w-25"></div>
                                    </div>
                                    <small class="text-muted">Global</small>
                                    <div class="progress mb-4 mt-2" style="height: 5px">
                                        <div class="progress-bar bg-primary w-75"></div>
                                    </div>
                                    <small class="text-muted">Local</small>
                                    <div class="progress mb-4 mt-2" style="height: 5px">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
                                    <small class="text-muted">Internal</small>
                                    <div class="progress mb-4 mt-2" style="height: 5px">
                                        <div class="progress-bar bg-danger w-25"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Location Section -->
                        <!-- Start Data Section -->
                        <div class="col">
                            <h2 class="h6 text-white-50">DATA</h2>

                            <div class="card mb-3" style="height: 280px">
                                <div class="card-body">
                                    <div class="text-right">
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-sort-amount-up"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-filter"></i>
                                        </button>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <th>ID</th>
                                            <th>Age Group</th>
                                            <th>Data</th>
                                            <th>Progress</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>20-30</td>
                                            <td>19%</td>
                                            <td><i class="fas fa-chart-pie"></i></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>30-40</td>
                                            <td>40%</td>
                                            <td><i class="fas fa-chart-bar"></i></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>40-50</td>
                                            <td>20%</td>
                                            <td><i class="fas fa-chart-line"></i></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>50</td>
                                            <td>20%</td>
                                            <td><i class="fas fa-chart-pie"></i></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="text-center py-4 text-muted">
                &copy; Copyright 2022
            </footer>
        </div>
    </div>
    <!-- End Data Section -->
    <!-- Start Sign Up Modal -->
    <div class="modal fade" id="signUpModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="bg-white mx-auto rounded shadow-sm border mt-5 p-3" style="width: 400px">
                    <form action="">
                        <div class="form-group text-center">
                            <div class="h2 fw-bold text-dark">Sign Up</div>
                            <p class="text-muted">
                                Please fill in this form to create an account!
                            </p>
                        </div>

                        <hr />

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </span>
                                <input type="text" class="form-control" placeholder="Full Name" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </span>
                                <input type="email" class="form-control" placeholder="Email Address" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </span>
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </span>
                                <input type="password" class="form-control" placeholder="Confirm Password" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <div class="form-check">
                                <input type="checkbox" required="required" class="form-check-input" />
                                I accept the
                                <a href="#" class="text-success text-decoration-none">Terms of Use</a>
                                &
                                <a href="#" class="text-success text-decoration-none">Privacy Policy.</a>
                            </div>
                        </div>

                        <div class="form-group mt-3 mb-3 text-center">
                            <button type="submit" class="btn btn-success px-4">
                                <i class="fas fa-paper-plane me-2"></i>
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
                <p class="text-success text-center mt-2 mb-4">
                    Already have an account?
                    <a href="#" class="text-success text-decoration-underline" data-bs-toggle="modal"
                        data-bs-target="#signInModal">Sign In</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Sign Up Modal -->
    <!-- Start Sign In Modal -->
    <div class="modal fade" id="signInModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="bg-white mx-auto rounded shadow-sm border mt-5 p-4" style="width: 400px">
                    <form action="">
                        <div class="form-group text-center">
                            <div class="h2 fw-bold text-dark">Sign In</div>
                        </div>
                        <hr />
                        <div class="form-group mt-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </span>
                                <input type="email" class="form-control" placeholder="Email Address" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </span>
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>

                        <div class="form-group mt-3 text-center">
                            <div class="row">
                                <label class="form-check-label col">
                                    <input type="checkbox" required="required" class="form-check-input" />
                                    Remember me
                                </label>
                                <div class="col">
                                    <a href="" class="text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#forgotPassword">Forgot Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 mb-3 text-center">
                            <button type="submit" class="btn btn-success px-4">
                                <i class="fas fa-key me-2"></i>
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
                <p class="text-success text-center mt-4 mb-5">
                    Not a member?
                    <a href="#" class="text-success text-decoration-underline" data-bs-toggle="modal"
                        data-bs-target="#signUpModal">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Sign In Modal -->
    <!-- Start Forgot Password -->
    <div class="modal fade" id="forgotPassword">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="mx-auto my-5 p-5 bg-white rounded border border-secondary shadow-sm" style="width: 400px">
                    <form action="">
                        <div class="form-group mb-4">
                            <h2 class="text-center text-danger mb-4">Forgot Password!</h2>
                            <small class="text-left">
                                Enter your e-mail address and we'll send you a link to reset
                                your password.
                            </small>
                        </div>
                        <hr />
                        <div class="form-group my-4">
                            <input class="form-control" type="text" name="" id="" placeholder="E-mail address" />
                        </div>
                        <hr />
                        <div class="form-group text-center mt-4">
                            <button type="reset" class="btn btn-success px-4">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Forgot Password -->

    <?php else: ?>
    <!-- Start Sign In Modal -->

    <div class="container">
        <div class="bg-white mx-auto rounded shadow-sm border mt-5 p-4" style="width: 350px">
            <form action="login.php" method='post'>
                <div class="form-group text-center">
                    <div class="h4 fw-bold text-dark">Sign In</div>
                </div>
                <hr />
                <div class="form-group mt-4">
                    <div class="input-group">
                        <span class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </span>
                        <input type="email" class="form-control" placeholder="Email Address" name="email" />
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <span class="fa fa-lock"></span>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" name="password" />
                    </div>
                </div>

                <div class="form-group mt-3 text-center">
                    <div class="row">
                        <label class="form-check-label col">
                            <input type="checkbox" required="required" class="form-check-input" />
                            Remember me
                        </label>
                        <div class="col">
                            <a href="" class="text-decoration-none" data-bs-toggle="modal"
                                data-bs-target="#forgotPassword">Forgot Password?</a>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4 mb-3 text-center">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="fas fa-key me-2"></i>
                        Sign In
                    </button>
                </div>
            </form>
        </div>
        <p class="text-success text-center mt-4 mb-5">
            Not a member?
            <a href="#" class="text-success text-decoration-underline" data-bs-toggle="modal"
                data-bs-target="#signUpModal">Sign Up</a>
        </p>
    </div>
    <!-- End Sign In Modal -->
    <?php endif ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- javaScript Link -->
    <script src="js/app.js"></script>
</body>

</html>