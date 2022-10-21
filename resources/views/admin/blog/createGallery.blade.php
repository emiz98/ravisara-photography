@extends('admin/app')

@section('content')

    <div class="gx-container">

        <!-- Main Container -->
        <div class="gx-main-container">
            <!-- Main Content -->
            <div class="gx-main-content ps ps--active-y">
                <!--gx-wrapper-->
                <div class="gx-wrapper">
                    <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                        <h2 class="title mb-3 mb-sm-0">Add Image</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gx-card">
                                <div class="gx-card-body">
                                    <form action="{{route('blog_gallery.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-2 col-sm-3 control-label">Select Category</label>
                                            <div class="col-md-10 col-sm-9">
                                                <select class="custom-select" name="category_id">
                                                    @foreach ($category as $item)
                                                    <option value="{{$item['id']}}">{{$item['title']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-sm-3 control-label">File Field</label>
                                            <div class="col-md-10 col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
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

            </div>
            <!-- /main content -->

        </div>
        <!-- /main container -->

    </div>
@endsection
