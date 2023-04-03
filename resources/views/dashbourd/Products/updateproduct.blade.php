@extends('dashbourd.layout.layout')
@section('body')
<div class="container">

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Product</h1>
            </div><!-- /.col -->
            {{-- <div><button>Add prodcut</button></div> --}}
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <form action="{{ route('update.product',$p->id) }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name :</label>
          <input type="text" class="form-control" name="name" value="{{ $p ->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description :</label>
            <input type="text" class="form-control" name="desc" value="{{  $p ->description}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" value="{{ $p ->image }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price :</label>
            <input type="number" class="form-control" name="price" value="{{ $p ->price }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Discount :</label>
            <input type="number" class="form-control" name="discount" value="{{ $p ->discount_price }}">
          </div>

        <button type="submit" class="btn btn-primary">save</button>
      </form>
</div>

@endsection
