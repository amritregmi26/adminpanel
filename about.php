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
                    <h2>about us</h2>
                </div>
                <div class="user-details">
                    <div class="username">MBMAN - Admin</div>
                    <div class="user-settings">
                        <i class="fas fa-gear"></i>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-content about">
            <div class="mt-5 fw-bold">
                <h1 class="mb-2 text-capitalize">About Details</h1>
            </div>
            <div class="detail-wrapper">
                <div class="scl-name-container">
                    <div class="header text-capitalize">school name</div>
                    <div class="main-content text-capitalize">madan bhandari memorial academy nepal</div>
                </div>
                <div class="img-container">
                    <div class="header text-capitalize">image</div>
                    <div class="main-content">
                        <img src="./assets/img/school.png" alt="School's Image">
                    </div>
                </div>
                <div class="content-container">
                    <div class="header text-capitalize">content</div>
                    <div class="main-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus impedit maxime
                            vero, facere, itaque culpa error hic sequi expedita inventore nulla, aliquid atque numquam
                            quisquam optio excepturi fugit in magnam ipsam dolorem aperiam voluptatum ducimus pariatur.
                            Doloribus, laudantium non commodi voluptas ut sapiente labore saepe itaque, natus modi
                            ducimus?
                        </p>
                    </div>
                </div>
                <div class="action-btns top-div-btn">
                    <div class="header text-capitalize">action</div>
                    <div class="main-content d-flex align-items-start justify-content-center gap-4">
                        <button class="btn btn-secondary rounded-pill text-capitalize" data-bs-toggle="modal"
                        data-bs-target="#editModal">edit</button>
                        <button class="btn btn-danger rounded-pill text-capitalize" data-bs-toggle="modal"
                        data-bs-target="#deleteModal">delete</button>
                    </div>
                </div>
            </div>

            <div class="mt-5 fw-bold">
                <h1 class="mb-2 text-capitalize">Rules and regulation</h1>
            </div>
            <div class="detail-wrapper flex-fix">
                <div class="list-no-container">
                    <div class="header text-capitalize">list no</div>
                    <div class="main-content text-capitalize">
                        one
                    </div>
                    <div class="main-content text-capitalize">
                        two
                    </div>
                    <div class="main-content text-capitalize">
                        three
                    </div>
                </div>
                <div class="rule-desc">
                    <div class="header text-capitalize">rule's description</div>
                    <div class="main-content text-capitalize">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae ut mollitia aliquid.
                        Veritatis rerum fugiat blanditiis illum pariatur tempore quibusdam.
                    </div>
                    <div class="main-content text-capitalize">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non explicabo reprehenderit unde omnis
                        dolores. Omnis?
                    </div>
                    <div class="main-content text-capitalize">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laborum quas rerum tempora saepe
                        maiores nihil veniam ea?
                    </div>
                </div>
                <div class="action-btns">
                    <div class="header text-capitalize">action</div>
                    <div class="main-content d-flex align-items-start justify-content-center gap-4">
                        <button class="btn btn-secondary rounded-pill text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#editModal">edit</button>
                        <button class="btn btn-danger rounded-pill text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">delete</button>
                    </div>
                    <div class="main-content d-flex align-items-start justify-content-center gap-4">
                        <button class="btn btn-secondary rounded-pill text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#editModal">edit</button>
                        <button class="btn btn-danger rounded-pill text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">delete</button>
                    </div>
                    <div class="main-content d-flex align-items-start justify-content-center gap-4">
                        <button class="btn btn-secondary rounded-pill text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#editModal">edit</button>
                        <button class="btn btn-danger rounded-pill text-capitalize" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">delete</button>
                    </div>
                </div>
            </div>
            <div class="my-5 me-5 update-btn">
                <button class="btn btn-success text-capitalize">update</button>
            </div>

            <!-- edit and delete modal -->

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header fw-bold">
                            It will be deleted permanently. Are you sure?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        </div>
    </main>
</body>

</html>