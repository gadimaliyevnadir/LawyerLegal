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
                    <form action="{{route('admin.address.update',$address->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" value="{{old('title',$address->title)}}" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Subtitle</label>
                                <input type="text" value="{{old('subtitle',$address->subtitle)}}" class="form-control" name="subtitle" id="exampleInputPassword1" placeholder="Enter Subtitle">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Icon Class Name</label>
                                <input type="text" value="{{old('icon',$address->icon)}}" class="form-control" name="icon" id="exampleInputPassword1" placeholder="Enter Icon Class Name">
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