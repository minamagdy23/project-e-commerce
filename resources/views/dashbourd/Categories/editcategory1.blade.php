@extends('dashbourd.layout.layout')
@section('body')
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit-Categories</h1>
            </div><!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <form action="{{ route('update.Category',$c->id) }}" method="POST">

        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $c->name }}">
        </div>
        <div class="mb-3">
            <label for="formFileLg" class="form-label">Image</label>
            <input class="form-control form-control-lg" name="image" id="formFileLg" type="file" value="{{ $c->image }}">
          </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
</div>

@endsection
