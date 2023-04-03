@extends('dashbourd.layout.layout')
@section('body')
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Products</h1>
            </div>

            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <table class="table table-light table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">parent</th>
            <th scope="col">image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
      @foreach ($Cate as $c)
      <tr>
        <td>{{ $c -> id }}</td>
        <td>{{ $c -> name }}</td>
        <td>{{ $c -> Parent_id }}</td>
        <td>{{ $c -> image }}</td>
        <form method="GET" action="{{ route('Edit.Category',$c->id) }}">

            <td><button href="" class="btn btn-primary">Edit</button></td>

        </form>
        <form method="get" action="{{ route('destroy.category',$c->id)}}">

            <td><button class="btn btn-danger">Delete</button></td>
        </form>
      </tr>

      @endforeach

        </tbody>
      </table>
</div>
@endsection
