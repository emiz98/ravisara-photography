@extends('admin/app')

@section('content')
    <!-- Main Container -->
    <div class="gx-main-container">
        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="dashboard animated slideInUpTiny animation-duration-3">
                    <div style="padding-bottom: 2%; padding-top:2%">
                        <h2 class="title mb-3 mb-sm-0">Main Dashboard</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-12 order-xl-3">
                            <div class="gx-card">
                                <div class="gx-card-header-color text-center bg-primary">
                                    <div class="gx-card-header-top">
                                        <a href="javascript:void(0)" class="gx-menu-icon mr-auto">
                                            <span class="menu-icon"></span>
                                        </a>
                                        <div class="dropdown">
                                            <a class="dropdown-more dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink10" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                                <i class="zmdi zmdi-more-vert zmdi-hc-fw zmdi-hc-lg text-white"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('blog.index')}}">Manage Blogs</a>
                                                <a class="dropdown-item" href="{{route('blog.create')}}">Add Blog</a>
                                                <a class="dropdown-item" href="{{route('blog_gallery.index')}}">Blog Gallery</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-primary lighten-4 size-100 mx-auto mb-3 user-avatar">
                                        <h1 class="m-0 text-primary text-darken-4 font-weight-bold">{{$blogs}}</h1>
                                    </div>
                                    <div class="gx-card-hd-content text-white">
                                        <h2 class="text-white">Blogs</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-12 order-xl-3">
                            <div class="gx-card">
                                <div class="gx-card-header-color text-center bg-purple">
                                    <div class="gx-card-header-top">
                                        <a href="javascript:void(0)" class="gx-menu-icon mr-auto">
                                            <span class="menu-icon"></span>
                                        </a>
                                        <div class="dropdown">
                                            <a class="dropdown-more dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink10" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                                <i class="zmdi zmdi-more-vert zmdi-hc-fw zmdi-hc-lg text-white"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('category.index')}}">Gallery Category</a>
                                                <a class="dropdown-item" href="{{route('category.create')}}">Add Gallery Image</a>
                                                <a class="dropdown-item" href="{{route('images.index')}}">Manage Gallery</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-primary lighten-4 size-100 mx-auto mb-3 user-avatar">
                                        <h1 class="m-0 text-purple text-darken-4 font-weight-bold">{{$mainGalleryImages}}</h1>
                                    </div>
                                    <div class="gx-card-hd-content text-white">
                                        <h2 class="text-white">Gallery Images</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-12 order-xl-3">
                            <div class="gx-card">
                                <div class="gx-card-header-color text-center bg-green">
                                    <div class="gx-card-header-top">
                                        <a href="javascript:void(0)" class="gx-menu-icon mr-auto">
                                            <span class="menu-icon"></span>
                                        </a>
                                        <div class="dropdown">
                                            <a class="dropdown-more dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink10" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                                <i class="zmdi zmdi-more-vert zmdi-hc-fw zmdi-hc-lg text-white"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('tour_category.index')}}">Tour Category</a>
                                                <a class="dropdown-item" href="{{route('tour_category.create')}}">Add Tour Category</a>
                                                <a class="dropdown-item" href="{{route('tour_gallery.index')}}">Manage Tour Gallery</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-primary lighten-4 size-100 mx-auto mb-3 user-avatar">
                                        <h1 class="m-0 text-green text-darken-4 font-weight-bold">{{$tours}}</h1>
                                    </div>
                                    <div class="gx-card-hd-content text-white">
                                        <h2 class="text-white">Tours</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-12 order-xl-3">
                            <div class="gx-card">
                                <div class="gx-card-header-color text-center bg-teal">
                                    <div class="gx-card-header-top">
                                        <a href="javascript:void(0)" class="gx-menu-icon mr-auto">
                                            <span class="menu-icon"></span>
                                        </a>
                                        <div class="dropdown">
                                            <a class="dropdown-more dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink10" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                                <i class="zmdi zmdi-more-vert zmdi-hc-fw zmdi-hc-lg text-white"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('print_category.index')}}">Print Category</a>
                                                <a class="dropdown-item" href="{{route('print_category.create')}}">Add Print Category</a>
                                                <a class="dropdown-item" href="{{route('print_gallery.index')}}">Manage Print Gallery</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-primary lighten-4 size-100 mx-auto mb-3 user-avatar">
                                        <h1 class="m-0 text-teal text-darken-4 font-weight-bold">{{$prints}}</h1>
                                    </div>
                                    <div class="gx-card-hd-content text-white">
                                        <h2 class="text-white">Prints</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-bottom: 2%">
                        <h2 class="title mb-3 mb-sm-0">Main Gallery</h2>
                    </div>
                    <div class="row">
                        @foreach ($galleryCategories as $galleryCategory)
                        <div class="col-xl-2 col-md-3 col-12 order-xl-2">
                            <div class="gx-card">
                                <div class="gx-card-header-color text-center bg-purple">
                                    <div class="gx-card-header-top">
                                        <a href="javascript:void(0)" class="gx-menu-icon mr-auto">
                                            <span class="menu-icon"></span>
                                        </a>
                                    </div>
                                    <div class="bg-primary lighten-4 size-100 mx-auto mb-3 user-avatar">
                                        <?php
                                            $count = App\Models\admin\mainGallery::get()->where('category_id',$galleryCategory['id'])->count()
                                        ?>
                                        <h1 class="m-0 text-purple text-darken-4 font-weight-bold">{{$count}}</h1>
                                    </div>
                                    <div class="gx-card-hd-content text-white">
                                        <h2 class="text-white">{{$galleryCategory['title']}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div style="padding-bottom: 2%">
                        <h2 class="title mb-3 mb-sm-0" style="color: rgb(228, 0, 0)">Site Maintenance</h2>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div>
                            <a href="/site-maintenance">
                                <button class="btn btn-danger text-white" data-toggle="modal" data-target="#exampleModalCenter2" type="button">
                                    <span>Turn ON</span>
                                </button></a>
                            <a href="/site-maintenance-done">
                                <button class="btn btn-success text-white" data-toggle="modal" data-target="#exampleModalCenter2" type="button">
                                    <span>Turn OFF</span>
                                </button></a>
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
@endsection
