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
                            <a href="{{route('admin.brends.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$brends->links('admin.partials.pagination')}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brends as $brend)
                                <tr>
                                    <td>{{$brend->id}}</td>
                                    <td>
                                        <img style="height: 200px;object-fit:contain" src="{{asset('storage/'.$brend->image)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>
                                        <a href="{{route('admin.brends.edit',$brend->id)}}" class="btn btn-primary">Edit</a>
                                      <form method="post" class="delete-from" action="{{route('admin.brends.destroy',$brend->id)}}">
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
