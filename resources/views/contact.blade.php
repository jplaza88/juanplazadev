<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Around | Contacts v.3</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #737491;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #766df4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                var preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 2000);
            };
        })();

    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
</head>
<!-- Body-->
<body>
<!-- Page loading spinner-->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
    </div>
</div>
<main class="page-wrapper">
    <!-- Sign In Modal-->
    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="view show" id="modal-signin-view">
                    <div class="modal-header border-0 bg-dark px-4">
                        <h4 class="modal-title text-light">Sign in</h4>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close "></button>
                    </div>
                    <div class="modal-body px-4">
                        <p class="fs-ms text-muted">Sign in to your account using email and password provided during registration.</p>
                        <form class="needs-validation" novalidate>
                            <div class="mb-3">
                                <div class="input-group"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <input class="form-control rounded" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group"><i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                    <div class="password-toggle w-100">
                                        <input class="form-control" type="password" placeholder="Password" required>
                                        <label class="password-toggle-btn" aria-label="Show/hide password">
                                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="keep-signed">
                                    <label class="form-check-label fs-sm" for="keep-signed">Keep me signed in</label>
                                </div><a class="nav-link-style fs-ms" href="password-recovery.html">Forgot password?</a>
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar (Floating light)-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="header navbar navbar-expand-lg navbar-dark navbar-floating navbar-sticky" data-scroll-header data-fixed-element>
        <div class="container px-0 px-xl-3">
            <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="/"><img class="navbar-floating-logo d-none d-lg-block" src="img/logo/logo-light.png" alt="Around" width="153"><img class="navbar-stuck-logo" src="img/logo/logo-dark.png" alt="Around" width="153"><img class="d-lg-none" src="img/logo/logo-icon.png" alt="Around" width="58"></a>
            <div class="d-flex align-items-center order-lg-3 ms-lg-auto"><a class="nav-link-style fs-sm text-nowrap" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user fs-xl me-2 align-middle"></i>Sign in</a></div>
            <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
                <div class="offcanvas-header navbar-shadow">
                    <h5 class="mt-1 mb-0">Menu</h5>
                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <!-- Background shape-->
    <section class="position-relative bg-gradient" style="height: 590px;">
        <div class="shape shape-bottom shape-curve-side bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 250">
                <g>
                    <path fill="currentColor" d="M3000,0v250H0v-51c572.7,34.3,1125.3,34.3,1657.8,0C2190.3,164.8,2637.7,98.4,3000,0z"></path>
                </g>
            </svg>
        </div>
    </section>
    <!-- Contact details + Form-->
    <section class="container position-relative zindex-5 pt-7" style="margin-top: -590px;">
        <div class="row pt-md-4 pt-lg-5 mt-3">
            <div class="col-lg-4 col-md-5 offset-lg-1">
                <h1 class="text-light mb-3 pb-4 pt-sm-3">Contact</h1>
                <div class="d-flex align-items-start mb-4"><i class="ai-map-pin h3 mb-0 text-light"></i>
                    <div class="ps-3">
                        <p class="text-light mb-2">Miami,<br>FL 33125, USA</p><a class="fancy-link text-light fs-sm" href="#map" data-scroll>See on the map</a>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4"><i class="ai-mail h3 mt-n1 mb-0 text-light"></i>
                    <div class="ps-3"><a class="d-inline-block text-light text-decoration-none mb-2" href="mailto:jplaza@juanplaza.dev">jplaza@juanplaza.dev</a></div>
                </div>
                <div class="d-flex align-items-start mb-4"><i class="ai-phone h3 mt-n1 mb-0 text-light"></i>
                    <div class="ps-3"><a class="d-inline-block text-light text-decoration-none mb-2" href="tel:+15262200459">+1 526 220 0459</a></div>
                </div>
            </div>
            <div class="col-xl-6 col-md-7">
                <div class="card border-0 shadow-lg">
                    <div class="card-body py-5 px-3 px-sm-4">
                        <h2 class="h3 text-center">Drop us a line</h2>
                        <p class="fs-sm text-muted text-center">We will get back to you as quickly as possible</p>
                        <form class="needs-validation pt-2 px-md-3" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3 pb-1">
                                    <label class="form-label" for="cont-fn">Full name<sup class="text-danger ms-1">*</sup></label>
                                    <input class="form-control" type="text" id="cont-fn" placeholder="John Doe" required>
                                    <div class="invalid-feedback">Please enter your full name!</div>
                                </div>
                                <div class="col-md-6 mb-3 pb-1">
                                    <label class="form-label" for="cont-email">Email address<sup class="text-danger ms-1">*</sup></label>
                                    <input class="form-control" type="email" id="cont-email" placeholder="j.doe@example.com" required>
                                    <div class="invalid-feedback">Please enter a valid email address!</div>
                                </div>
                            </div>
                            <div class="mb-3 pb-1">
                                <label class="form-label" for="cont-subject">Subject<sup class="text-danger ms-1">*</sup></label>
                                <input class="form-control" type="text" id="cont-subject" placeholder="Title of your message" required>
                                <div class="invalid-feedback">Please enter a subject!</div>
                            </div>
                            <div class="mb-3 pb-1">
                                <label class="form-label" for="cont-message">Message<sup class="text-danger ms-1">*</sup></label>
                                <textarea class="form-control" id="cont-message" rows="5" placeholder="Write your message here" required></textarea>
                                <div class="invalid-feedback">Please write a message!</div>
                            </div>
                            <div class="text-center pt-2">
                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map + Directions-->
    <section class="container py-5 py-md-6 py-lg-7">
        <div class="row py-sm-3">
            <div class="col-md-7">
                <div class="gallery" id="map"><a class="gallery-item map-popup bg-position-center bg-no-repeat py-7 text-center border rounded-3" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua" data-iframe="true" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;396 Lillian Blvd, Holbrook, NY 11741&lt;/h6&gt;" style="background-image: url(img/pages/contacts/map03.png);"><span class="gallery-caption"><i class="ai-maximize-2 fs-xl mt-n1 me-2"></i>Expand the map</span>
                        <div class="d-inline-block py-4 py-sm-7"><img src="img/pages/contacts/marker.png" alt="Map marker" width="48"></div></a></div>
            </div>
            <div class="col-md-4 offset-md-1 pt-4">
                <h2 class="h4 pb-3">Details</h2>
                <h3 class="h5">Remote work</h3>
                <ul class="list-unstyled fs-sm">
                    <li>Although located in Florida, we provide services throughout the entire world.</li>
                </ul>
            </div>
        </div>
    </section>
</main>
@include('footers.main')
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vendor/simplebar/dist/simplebar.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
<!-- Main theme script-->
<script src="js/theme.min.js"></script>
</body>
</html>
