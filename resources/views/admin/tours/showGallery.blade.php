@extends('admin/app')

@section('content')

    <div class="gx-main-content ps ps--active-y">
        <!--gx-wrapper-->
        <div class="gx-wrapper">

            <div class="animated slideInUpTiny animation-duration-3">

                <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                    <h2 class="title mb-3 mb-sm-0">Manage Gallery</h2>
                    <a href="{{ route('tour_gallery.create') }}" class="gx-btn gx-btn-light-green"><span>Add
                            Image</span></a>
                </div>
                <div class="row">
                    @foreach ($images as $image)

                        <div class="col-md-2 col-sm-2">
                            <div class="gx-card product-card">
                                <!-- card-header -->
                                <div class="gx-card-header card-image card-strip">
                                    <div class="grid-thumb-equal">
                                        <a href="javascript:void(0)" class="grid-thumb-cover">
                                            <img src="/storage/{{$image->image}}" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <!-- /card header -->
                                <br>
                                <!-- Card Footer -->
                                <div class="gx-card-footer">
                                    <form id="delete-form-{{ $image->id }}"
                                        action="{{ route('tour_gallery.destroy', $image['id']) }}" method="POST"
                                        style="display: none">
                                        @csrf
                                        {{ @method_field('DELETE') }}
                                    </form>
                                    <p><a class="gx-btn btn-danger" href="" onclick="if(confirm('Are you sure ?')){
                                                    event.preventDefault();document.getElementById('delete-form-{{ $image->id }}').submit();
                                                    }else{
                                                        event.preventDefault();}"><i class="far fa-trash-alt"></i>&nbsp;
                                        Delete</a></p>
                                </div>
                                <!-- /card footer -->
                            </div>
                        </div>
                    @endforeach

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

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 661px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 298px;"></div>
        </div>
    </div>

@endsection
