<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='{{asset('admin/defaults/logo.png')}}' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="{{asset('admin/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="{{asset('admin/css/jumbo-bootstrap.css')}}" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="{{asset('admin/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Owl carousel -->
    <link href="{{asset('admin/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- /owl carousel -->

    <!-- Jumbo-core stylesheet -->
    <link href="{{asset('admin/css/jumbo-core.min.css')}}" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="{{asset('admin/css/theme-dark-indigo.css')}}" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

    <!-- SumemrNote stylesheet -->
    <link href="node_modules/summernote/dist/summernote-bs4.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <!-- SumemrNote stylesheet -->

</head>

<body id="body" data-theme="dark-indigo">

{{-- <!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop --> --}}

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
    <div id="menu" class="side-nav gx-sidebar">
        <div class="navbar-expand-lg">
            <!-- Sidebar header  -->
            <div class="sidebar-header">
                <div class="user-profile">
                    <img class="user-avatar" alt="Domnic" src="{{asset('admin/images/userAvatar/domnic-harris.jpg')}}">

                    <div class="user-detail">
                        <h4 class="user-name">
                            <span class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userAccount"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   {{ Auth::user()->name }}
                                </a>
                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="userAccount">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-sign-in zmdi-hc-fw mr-2"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </span>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- /sidebar header -->

            <!-- Main navigation -->
            <div id="main-menu" class="main-menu navbar-collapse collapse">
                <ul class="nav-menu">
                    <li class="nav-header"><span class="nav-text">Main</span></li>
                    <li class="">
                        <a href="{{route('admin.home')}}"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw">
                            </i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li class="nav-header"><span class="nav-text">Functions</span></li>
                    <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-comment zmdi-hc-fw"></i>
                            <span class="nav-text">Blogs</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('blog.index')}}"><span class="nav-text">Manage Blogs</span></a></li>
                            <li><a href="{{route('blog_gallery.index')}}"><span class="nav-text">Manage Gallery</span></a></li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>
                            <span class="nav-text">Main Gallery</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('category.index')}}"><span class="nav-text">Manage Categories</span></a></li>
                            <li><a href="{{route('images.index')}}"><span class="nav-text">Manage Gallery</span></a></li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>
                            <span class="nav-text">Tours</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('tour_category.index')}}"><span class="nav-text">Manage Tours</span></a></li>
                            <li><a href="{{route('tour_gallery.index')}}"><span class="nav-text">Manage Tour Gallery</span></a></li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-collection-item-8 zmdi-hc-fw"></i>
                            <span class="nav-text">Prints</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('print_category.index')}}"><span class="nav-text">Manage Prints</span></a></li>
                            <li><a href="{{route('print_gallery.index')}}"><span class="nav-text">Manage Print Gallery</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <!-- /page sidebar -->
