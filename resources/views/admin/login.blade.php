<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords"
        content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <title>AP Dashboard ©</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('admin/images/favicon.ico') }}' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet"
        href="{{ asset('admin/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="{{ asset('admin/css/jumbo-bootstrap.css') }}" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="{{ asset('admin/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="{{ asset('admin/css/jumbo-core.min.css') }}" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="{{ asset('admin/css/theme-dark-indigo.css') }}" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

</head>

<body id="body" data-theme="dark-indigo">

    <!-- Loader Backdrop -->
    <div class="loader-backdrop">
        <!-- Loader -->
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
                </circle>
            </svg>
        </div>
        <!-- /loader-->
    </div>
    <!-- loader backdrop -->

    <!-- Page container -->
    <div class="gx-container">

        <!-- Main Container -->
        <div class="gx-main-container">
            <!-- Main Content -->
            <div class="gx-main-content">
                <!--gx-wrapper-->
                <div class="gx-wrapper">
                    <div
                        class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                        <div class="login-content">
                            <div class="login-header">
                                <a class="site-logo" href="javascript:void(0)" title="Jambo">
                                    <img src="images/logo-color.png" alt="jambo" title="jambo">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="{{ route('admin.login') }}" method="POST">
                                    @csrf
                                    <fieldset>
                                        <div class="form-group">
                                            <input name="email" id="email" class="form-control form-control-lg"
                                                placeholder="Email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" id="password" class="form-control form-control-lg"
                                                placeholder="Password" type="password">
                                        </div>
                                        <button type="submit" class="gx-btn gx-btn-rounded gx-btn-primary">Sign
                                            In</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/gx-wrapper-->

                <!-- Footer -->
                <footer class="gx-footer">
                    <div class="d-flex flex-row justify-content-between">
                        <p> Copyright EMIZ Foundation © 2021</p>
                    </div>
                </footer>
                <!-- /footer -->

            </div>
            <!-- /main content -->
        </div>
        <!-- /main container -->

    </div>
    <!-- /page container -->

    <!-- Menu Backdrop -->
    <div class="menu-backdrop fade"></div>
    <!-- /menu backdrop -->

    <!--Load JQuery-->
    <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!--Bootstrap JQuery-->
    <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--Perfect Scrollbar JQuery-->
    <script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <!--Big Slide JQuery-->
    <script src="{{ asset('admin/node_modules/bigslide/dist/bigSlide.min.js') }}"></script>
    <!--Custom JQuery-->
    <script src="{{ asset('admin/js/functions.js') }}"></script>

</body>

</html>
