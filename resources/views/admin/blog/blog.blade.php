@extends('admin/app')

@section('content')

    <div class="gx-main-content">
        <!--gx-wrapper-->
        <div class="gx-wrapper">
            <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                <h2 class="title mb-3 mb-sm-0">Add Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gx-card">
                        <div class="gx-card-body">
                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Title</label>
                                    <input type="text" name="title" class="form-control" id="txtFirst"
                                        placeholder="Title Here" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="slug" name="slug" class="form-control" id="txtSecond"
                                        aria-describedby="emailHelp" placeholder="Enter Slug" required>
                                    <small id="emailHelp" class="form-text text-muted">
                                        Slug have to be shorter than 100 Characters
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cover Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                                </div>

                                <textarea class="form-control" id="summary-ckeditor" name="body" required></textarea>

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
