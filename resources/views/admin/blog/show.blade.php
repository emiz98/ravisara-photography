@extends('admin/app')

@section('content')

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                    <h2 class="title mb-3 mb-sm-0">Blog</h2>
                    <a href="{{ route('blog.create') }}" class="gx-btn gx-btn-light-green"><span>Add Blog</span></a>
                </div>

                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-md-4 col-sm-6">
                            <div class="gx-card product-card">
                                <!-- card-header -->
                                <div class="gx-card-header card-image card-strip">
                                    <div class="grid-thumb-equal">
                                        <a href="javascript:void(0)" class="grid-thumb-cover">
                                            <img src="/storage/{{$blog->image}}" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <!-- /card header -->
                                <!-- Card-content -->
                                <div class="gx-card-body">
                                    <div class="product-details">
                                        @if ($blog['status'] == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Not Active</span>
                                        @endif
                                        <h5 class="card-title">{{ $blog['title'] }}</h5>
                                        <?php
                                        $string = strip_tags($blog['body']);
                                        if (strlen($string) > 200) {
                                        // truncate string
                                        $stringCut = substr($string, 0, 200);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '...... ';
                                        }
                                        ?>
                                        <p>{{ $string; }}</p>
                                    </div>
                                </div>
                                <!-- /card-content -->

                                <!-- Card Footer -->
                                <div class="gx-card-footer">
                                    <a class="gx-btn btn-info" href="{{ route('blog_gallery.show', $blog['id']) }}">Gallery</a>
                                    <a class="gx-btn btn-success" href="{{ route('blog.edit', $blog['id']) }}"><i
                                            class="far fa-edit"></i>&nbsp; Update</a>

                                    <form id="delete-form-{{ $blog->id }}"
                                        action="{{ route('blog.destroy', $blog['id']) }}" method="POST"
                                        style="display: none">
                                        @csrf
                                        {{ @method_field('DELETE') }}
                                    </form>
                                    <a class="gx-btn btn-danger" href="" onclick="if(confirm('Are you sure ?')){
                                                    event.preventDefault();document.getElementById('delete-form-{{ $blog->id }}').submit();
                                                    }else{
                                                        event.preventDefault();}"><i class="far fa-trash-alt"></i>&nbsp;
                                        Delete</a>
                                </div>
                                <!-- /card footer -->

                            </div>
                        </div>
                    @endforeach

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
