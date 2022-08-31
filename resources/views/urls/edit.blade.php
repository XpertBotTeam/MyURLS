@extends('urls.layout')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Edit URL</h1>
                <p class="lead">MyURLs - Dashboard</p>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:10px;">
        <form action="{{ route('urls.update', $url->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{$url->name}}" type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input value="{{$url->url}}" type="text" name="url" id="url" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" id="description" class="form-control">{{$url->description}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-success my-1" style="margin-top:15px">
            </div>

            <a href="{{route('urls.index')}}" class="btn btn-warning my-1">Back</a>
        </form>
    </div>
@endsection
