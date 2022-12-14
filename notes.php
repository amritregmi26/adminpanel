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
                <a href="./dashboard.html"
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
                        <a href="./dashboard.html" class="nav-link align-middle px-0">
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
                                <a href="./top-sec.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Top Section
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./news.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        News and Updates
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./intro-sec.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Intro Section
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./home-course.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Course Section
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./message.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Message Section
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./testimonial.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Testimonials
                                    </span>
                                </a>
                            </li>
                            <li class="w-100">
                                <a href="./footer.html" class="nav-link px-0">
                                    <span class="d-none d-sm-inline">
                                        Footer Section
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./about.html" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-info-circle"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                About
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./course.html" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-book"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Course
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./notes.html" class="nav-link px-0 align-middle">
                            <i class="fs-4 fas fa-pen-to-square"></i>
                            <span class="ms-1 d-none d-sm-inline">
                                Notes
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="./syllabus.html" class="nav-link px-0 align-middle">
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
        <nav class="navbar sticky-top shadow">
            <div class="container">
                <div class="section-name">
                    <h2>notes</h2>
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

        </div>
    </main>
</body>

</html>