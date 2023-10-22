@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid vh-100">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>

                    </div>
                    @include('admin.layouts.includes.alert-message')
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.jacsons.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mb-1">Full Name</label>
                                <textarea placeholder="Enter Full Name" id="editor" name="fullname" class="mt-3 mb-3">{{old('fullname')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" value="{{old('phone')}}" class="form-control" name="phone" id="phone" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" value="{{old('image')}}" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection