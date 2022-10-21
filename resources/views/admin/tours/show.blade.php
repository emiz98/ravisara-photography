@extends('admin/app')

@section('content')

    <div class="gx-main-content ps ps--active-y">
        <!--gx-wrapper-->
        <div class="gx-wrapper">



            <div class="animated slideInUpTiny animation-duration-3">

                <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                    <h2 class="title mb-3 mb-sm-0">Category List</h2>
                    <a href="{{ route('tour_category.create') }}" class="gx-btn gx-btn-light-green"><span>Add
                            Tour Category</span></a>
                </div>

                <div class="col-xl-8 col-sm-8">
                    <div class="gx-card">
                        <div class="gx-card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Active</th>
                                            <th scope="col">Gallery</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $item)
                                            <tr>
                                                <td>{{$item['title']}}</td>
                                                <td>
                                                    @if ($item['status']==1)
                                                        <p style="font-weight: bold;color: rgb(0, 200, 0);">ON</p>
                                                    @else
                                                        <p style="font-weight: bold;color: rgb(200, 0, 0);">OFF</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <p><a class="btn btn-info" href="{{ route('tour_gallery.show', $item['id']) }}">Gallery</a></p>
                                                </td>
                                                <td>
                                                    <p><a class="btn btn-success" href="{{ route('tour_category.edit', $item['id']) }}">Update</a></p>
                                                </td>
                                                <td>
                                                    <form id="delete-form-{{ $item->id }}"
                                                        action="{{ route('tour_category.destroy', $item['id']) }}" method="POST"
                                                        style="display: none">
                                                        @csrf
                                                        {{ @method_field('DELETE') }}
                                                    </form>
                                                    <p><a class="btn btn-danger" href="" onclick="if(confirm('Are you sure ?')){
                                                                    event.preventDefault();document.getElementById('delete-form-{{ $item->id }}').submit();
                                                                    }else{
                                                                        event.preventDefault();}"><i class="far fa-trash-alt"></i>&nbsp;
                                                        Delete</a></p>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
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

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 661px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 275px;"></div>
        </div>
    </div>

@endsection
