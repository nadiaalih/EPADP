@extends('Frontend.shared.LinksShared')

<body>
    @include('layouts.partials.navbar')

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">MAPS</h6>
                <h1 class="mb-5">خرائط أطلس</h1>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-7 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <aside id="sidebar" class="sidebar">

                        <ul class="sidebar-nav " id="sidebar-nav">

                            <li class="nav-item">
                                <a class="nav-link " href="index.html">
                                    <i class="bi bi-grid"></i>
                                    <span>خرائط أطلس</span>
                                </a>
                            </li><!-- End Dashboard Nav -->

                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-menu-button-wide"></i><span>إقليم صرف مصر العليا</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="components-alerts.html">
                                            <i class="bi bi-circle"></i><span>الإدارة العامه لصرف أسيوط</span>
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <!-- End Profile Page Nav -->







                            <li class="nav-item">
                                <a class="nav-link collapsed" href="pages-login.html">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    <span>Logout</span>
                                </a>
                            </li><!-- End Login Page Nav -->


                        </ul>

                    </aside><!-- End Sidebar-->
                </div>

            </div>
        </div>

    </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    @include('Frontend.shared.footer')

    <!-- Footer End -->
</body>

</html>
