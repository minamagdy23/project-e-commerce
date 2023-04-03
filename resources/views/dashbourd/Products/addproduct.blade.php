@extends('dashbourd.layout.layout')
@section('body')
<div class="container">

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Product</h1>
            </div><!-- /.col -->
            {{-- <div><button>Add prodcut</button></div> --}}
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <form action="{{ route('insert.product') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name :</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Name Category">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description :</label>
            <input type="text" class="form-control" name="desc" placeholder="Enter Name Category">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" placeholder="Enter Name Category">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price :</label>
            <input type="number" class="form-control" name="price" placeholder="Enter Name Category">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Discount :</label>
            <input type="number" class="form-control" name="discount" placeholder="Enter Name Category">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category :</label>
            <select name="category_id" class="form-control">
                <option></option>
                @foreach ($Categ as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">save</button>
      </form>
</div>

@endsection
