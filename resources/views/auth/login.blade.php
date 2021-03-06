@extends('layouts.app')
@section('content')
<div class="signin-form mt-3">
    <div class="signin-form-inner">
        <!-- Sign in view-->
        <div class="view show" id="signin-view">
            <h1 class="h2 text-center">Sign in</h1>
            <p class="fs-ms text-muted mb-4 text-center">Sign in to your account using email and password provided during registration.</p>
            <form class="needs-validation" novalidate>
                <div class="input-group mb-3"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded" type="email" placeholder="Email" required>
                </div>
                <div class="input-group mb-3"><i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <div class="password-toggle w-100">
                        <input class="form-control" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="keep-signed-2">
                        <label class="form-check-label" for="keep-signed-2">Keep me signed in</label>
                    </div><a class="nav-link-style fs-ms" href="password-recovery.html">Forgot password?</a>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                <p class="fs-sm pt-3 mb-0 text-center">Don't have an account? <a href='#' class='fw-medium' data-view='#signup-view'>Sign up</a></p>
            </form>
        </div>
        <!-- Sign up view-->
        <div class="view" id="signup-view">
            <h1 class="h2 text-center">Sign up</h1>
            <p class="fs-ms text-muted mb-4 text-center">Registration takes less than a minute but gives you full control over your orders.</p>
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Full name" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Email" required>
                </div>
                <div class="input-group mb-3">
                    <div class="password-toggle w-100">
                        <input class="form-control" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="password-toggle w-100">
                        <input class="form-control" type="password" placeholder="Confirm password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                            <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit">Sign up</button>
                <p class="fs-sm pt-3 mb-0 text-center">Already have an account? <a href='#' class='fw-medium' data-view='#signin-view'>Sign in</a></p>
            </form>
        </div>
        <div class="border-top text-center mt-4 pt-4">
            <p class="fs-sm fw-medium text-heading">Or sign in with</p><a class="btn-social bs-facebook bs-outline bs-lg mx-1 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-outline bs-lg mx-1 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-outline bs-lg mx-1 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-google bs-outline bs-lg mx-1 mb-2" href="#"><i class="ai-google"></i></a>
        </div>
    </div>
</div>
@endsection
