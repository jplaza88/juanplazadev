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
<!-- Navbar (Floating dark)-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="header navbar navbar-expand-lg navbar-light navbar-floating navbar-sticky" data-scroll-header data-fixed-element>
    <div class="container px-0 px-xl-3">
        <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="/"><img class="d-none d-lg-block" src="img/logo/logo-dark.png" alt="Around" width="153"><img class="d-lg-none" src="img/logo/logo-icon.png" alt="Around" width="58"></a>
        <div class="d-flex align-items-center order-lg-3 ms-lg-auto"><a class="nav-link-style fs-sm text-nowrap" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user fs-xl me-2 align-middle"></i>Client Area</a></div>
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

