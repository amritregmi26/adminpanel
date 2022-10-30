<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - Admin Panel</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/all.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</head>

<body>
    <!--//////////////////////////////////////
            SIDEBAR SECTION
   /////////////////////////////////////// -->
    <aside class="left-pane">
        <div class="sidebar-fix">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="./dashboard.php"
                    class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <div class="img-container me-3">
                        <img src="assets/img/school.png" alt="school's logo">
                    </div>
                    <h1 class="d-none d-sm-inline fw-bold">
                        MBMAN
                    </h1>
                </a>
                <hr>
                <ul class="nav nav-pills" id="menu">
                    <li class="nav-item">
                        <a href="./dashboard.php" class="nav-link align-middle px-0">
                            <i class="fs-4 fas fa-dashboard"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-home"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Home
                            </span>
                        </a>
                        <ul class="collapse nav flex-column ms-3" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="./top-sec.php" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Top Section
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./news.php" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        News and Updates
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./intro-sec.php" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Intro Section
                                    </span>
                                </a>
                            </li>
                             
                            <li class="w-100">
                                <a href="./message.php" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Message Section
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./testimonial.php" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Testimonials
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./footer.php" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Footer Section
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./about.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-info-circle"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                About
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./course.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-book"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Course
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./notes.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-pen-to-square"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Notes
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./syllabus.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-file-text"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Syllabus
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <main class="right-pane">
        <nav class="navbar sticky-top shadow bg-light">
            <div class="container">
                <div class="section-name">
                    <h2>home / footer</h2>
                </div>
                <div class="user-details">
                    <div class="username">MBMAN - Admin</div>
                    <div class="user-settings">
                        <i class="fas fa-gear"></i>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-content">
            <div class="row">
                <div style="border-right: 0.0625rem solid black;" class="col-lg-6 pe-5">
                    <form action="" method="post" class="d-flex flex-column gap-5">
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">phone no:</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="number" name="" id="" class="form-control px-3 py-1" value="94892839">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="mon to fri 10am to 3pm">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Email:</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="email" name="" id="" class="form-control px-3 py-1"
                                        value="username@email.com">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="online support">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Location</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="Urlabari, Morang">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="Urlabari - 4">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column gap-3">
                            <h4 class="w-100 text-capitalize mb-2">Social Media:</h4>
                            <div class="d-flex align-items-center gap-3 ms-5">
                                <div class="col-lg-5">
                                    <h5 class="text-capitalize">facebook link:</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="www.facebook.com">
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 ms-5">
                                <div class="col-lg-5">
                                    <h5 class="text-capitalize">twitter link:</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="www.twitter.com">
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 ms-5">
                                <div class="col-lg-5">
                                    <h5 class="text-capitalize">instagram link:</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="www.instagram.com">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div style="padding-right: 0;" class="my-5 update-btn">
                        <button class="btn btn-success text-capitalize">update</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post" class="d-flex flex-column gap-5">
                        <h3 class="w-100 text-capitalize">
                            useful link
                        </h3>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link one</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../course">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link two</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="about">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../about">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link three</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../course">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link four</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../course">
                                </div>
                            </div>
                        </div>

                        <h3 class="w-100 text-capitalize">
                            news link
                        </h3>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link one</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../course">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link two</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="about">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../about">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link three</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../course">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <h4 class="w-100 text-capitalize mb-2">Link four</h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1" value="course">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" id="" class="form-control px-3 py-1"
                                        value="../course">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div style="padding-right: 0;" class="my-5 update-btn">
                        <button class="btn btn-success text-capitalize">update</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>