@extends('admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid vh-100">
        <div class="row w-100">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        @include('admin.layouts.includes.alert-message')
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.company.update', $company->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="card card-primary card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                @foreach ($locales as $key => $locale)
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                            id="custom-tabs-two-home-tab" data-toggle="pill"
                                                            href="#{{ $key }}" role="tab"
                                                            aria-controls="custom-tabs-two-home"
                                                            aria-selected="true">{{ strtoupper($key) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                                @foreach ($locales as $key => $locale)
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}"
                                                        id="{{ $key }}" role="tabpanel"
                                                        aria-labelledby="custom-tabs-two-profile-tab">

                                                        <div class="card-body">

                                                            <div class="form-group">
                                                                <label class="mb-1">Title</label>
                                                                <textarea placeholder="Enter Title" id="editor" name="title[{{ $key }}]" class="mt-3 mb-3">{{ old('title' . $key, $company->getTranslation('title', $key)) }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Description</label>
                                                                <textarea placeholder="Enter Description" id="summernote-{{ $key }}" name="desc[{{ $key }}]"
                                                                    class="mt-3 mb-3">{{ old('desc' . $key, $company->getTranslation('desc', $key)) }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Years</label>
                                                                <input type="number"
                                                                    value="{{ old('years', $company->years) }}"
                                                                    class="form-control" name="years"
                                                                    id="exampleInputEmail1" placeholder="Enter Years">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div>
                                            <img class="img-fluid" style="height: 390px"
                                                src="{{ asset('storage/' . $company->image) }}">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" value="{{ old('image', $company->image) }}"
                                                    name="image" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
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