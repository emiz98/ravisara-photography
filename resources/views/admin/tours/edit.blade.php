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
                        <form action="{{ route('tour_category.update', $category->id) }}" method="POST">
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
