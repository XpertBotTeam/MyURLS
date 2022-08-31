@extends('urls.layout')

@section('content')

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Add URL</h1>
          <p class="lead">MyURLs Dashboard</p>
        </div>
      </div>
</div>

<div class="container">
<form method="Post"
      action="{{ route('urls.store') }}"
      enctype="multipart/form-data">

      @csrf
      <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()-> id }}" hidden>

    <div class="mb-3">
      <label for="name" class="form-label">URL Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
      <label for="url" class="form-label">URL</label>
      <input type="url" class="form-control" id="price" name="url">
    </div>


        <div class="mb-3">
        <label for="qty" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>


    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>

@endsection
