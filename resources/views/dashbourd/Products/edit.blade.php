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
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <table class="table table-light table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Category_ID</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
      @foreach ($products as $p)
      <tr>
        <td>{{ $p -> id }}</td>
        <td>{{ $p -> name }}</td>
        <td>{{ $p -> description }}</td>
        <td>{{ $p -> image }}</td>
        <th>{{ $p -> price }}</th>
        <td>{{ $p -> discount_price }}</td>
        <td>{{ $p -> category_id }}</td>
        <form method="get" action="{{ route('edit.product',$p->id)}}">
            <td><button class="btn btn-primary">Edit</button></td>
        </form>

        <form method="get" action="{{ route('destroy.product',$p->id)}}">
            <td><button class="btn btn-danger">Delete</button></td>
        </form>

      </tr>

      @endforeach

        </tbody>
      </table>
</div>
@endsection
