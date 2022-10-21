@extends('admin/app')

@section('content')
    <div class="gx-main-content">
        <!--gx-wrapper-->
        <div class="gx-wrapper">
            <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                <h2 class="title mb-3 mb-sm-0">Update Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gx-card">
                        <div class="gx-card-body">
                            <form action="{{ route('blog.update', $blog->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Title</label>
                                    <input type="text" name="title" class="form-control" id="txtFirst"
                                        placeholder="Title Here" value="{{ $blog['title'] }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="slug" name="slug" class="form-control" id="txtSecond"
                                        aria-describedby="emailHelp" placeholder="Enter Slug" value="{{ $blog['slug'] }}"
                                        required>
                                    <small id="emailHelp" class="form-text text-muted">
                                        Slug have to be shorter than 100 Characters
                                    </small>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="gx-card product-card">
                                        <!-- card-header -->
                                        <label for="exampleInputEmail1" style="padding-bottom: 5%">Cover Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <div class="gx-card-header card-image card-strip">
                                            <div class="grid-thumb-equal">
                                                <a href="javascript:void(0)" class="grid-thumb-cover">
                                                    <img src="/storage/{{ $blog->image }}" alt="...">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-check" style="padding-left: 4.25rem">
                                    <input type="checkbox" @if ($blog['status'] == 1) checked @endif name="status" class="form-check-input"
                                        id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                                </div>

                                <br>
                                <textarea class="form-control" id="summary-ckeditor" name="body">{{ $blog['body'] }}</textarea>
                                <br>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
