@extends('admin/app')

@section('content')

<div class="gx-main-content ps ps--active-y">
    <!--gx-wrapper-->
    <div class="gx-wrapper">
        <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
            <h2 class="title mb-3 mb-sm-0">Update Category</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="gx-card">
                    <div class="gx-card-body">
                        <form action="{{ route('print_category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="txtFirst"
                                value="{{$category['title']}}" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug</label>
                                <input type="text" name="slug" class="form-control" id="txtSecond"
                                value="{{$category['slug']}}" placeholder="Enter Slug" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" class="form-control" cols="80" rows="10"
                                    placeholder="Enter Description" required>{{$category['description']}}</textarea>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-sm-3 control-label">Cover Image</label>
                                <div class="col-md-10 col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <div class="gx-card-header card-image card-strip">
                                            <div class="grid-thumb-equal">
                                                <a href="javascript:void(0)" class="grid-thumb-cover">
                                                    <img src="/storage/{{ $category->image }}" alt="...">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" name="price" class="form-control"
                                    placeholder="Enter Price" value="{{$category['price']}}" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1"
                                @if ($category['status']==1)
                                checked
                                @endif>
                                <label class="form-check-label" for="exampleCheck1">Active</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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

<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 661px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 131px;"></div></div></div>

@endsection
