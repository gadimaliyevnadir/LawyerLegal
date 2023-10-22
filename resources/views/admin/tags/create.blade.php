@extends('admin.layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid vh-100">
            <div class="row">

                <div class="col-md-6">

                    <div class="card card-primary">

                        @include('admin.layouts.includes.alert-message')
                        <form action="{{ route('admin.tags.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12">
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
                                                    <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="{{ $key }}" role="tabpanel"
                                                        aria-labelledby="custom-tabs-two-profile-tab">


                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Name</label>
                                                                <input type="text" value="{{ old('name'.$key) }}"
                                                                    class="form-control" name="name[{{$key}}]"
                                                                    id="exampleInputEmail1" placeholder="Enter Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mb-1">Slug</label>
                                                                <textarea placeholder="Enter Slug" id="#" name="slug[{{ $key }}]"
                                                                    class="mt-3 mb-3">{{ old('slug' . $key) }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- /.card -->
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
