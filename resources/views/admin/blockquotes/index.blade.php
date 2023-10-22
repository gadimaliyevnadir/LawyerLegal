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
                            <a href="{{route('admin.blockquotes.create')}}" class="btn btn-primary">+Create</a>
                        </h3>
                        {{$blockquotes->links('admin.partials.pagination')}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blockquotes as $blockquote)
                                <tr>
                                    <td>{{$blockquote->id}}</td>
                                    <td>{!!$blockquote->desc!!}</td>
                                    <td>
                                        <a href="{{route('admin.blockquotes.edit',$blockquote->id)}}" class="btn btn-primary">Edit</a>
                                       <form method="post" class="delete-from" action="{{route('admin.blockquotes.destroy',$blockquote->id)}}">
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
