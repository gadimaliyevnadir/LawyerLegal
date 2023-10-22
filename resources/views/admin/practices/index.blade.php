@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid vh-100">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{route('admin.practices.create')}}" class="btn btn-primary">+Create</a>
                        </h3>

                        {{$practices->links('admin.partials.pagination')}}

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($practices as $practice)
                                <tr>
                                    <td>{{$practice->id}}</td>
                                    <td style="width: 20%;">
                                        <img style="height: 200px;object-fit:contain" src="{{asset('storage/'.$practice->icon)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{!!$practice->title!!}</td>
                                    <td>{!!$practice->desc!!}</td>
                                    <td>
                                        <a href="{{route('admin.practices.edit',$practice->id)}}" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from" action="{{route('admin.practices.destroy',$practice->id)}}">
                                            @csrf
                                            @method('delete')
                                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
