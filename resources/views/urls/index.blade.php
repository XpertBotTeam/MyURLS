@extends('urls.layout')

@section('content')

<div class="containter-fluid text-sm-center p-2 bg-warning">
    <h1 class="display-2">MyURLs Dashboard</h1>
</div>

<div class="container" style="margin-top:10px;">
    @if($message = Session::get('msg'))
    <div class="alert alert-success" role="alert">
          {{ $message }}
      </div>
    @endif
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Url</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
            <td>
                <a class="btn btn-success"
                   href="{{ route('urls.create') }}">
                   Add Url
            </a>
            </td>
          </tr>
        </thead>
        <tbody>
          @foreach ($u as $r)
          <tr>
            <th scope="row">{{ $r->id }}</th>
            <td>{{ $r->name }}</td>
            <td>{{ $r->url }}</td>
            <td>{{ $r->description }}</td>
            <td colspan="2">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div><a href="{{ route('urls.edit', $r->id) }}" class="mr-2 btn btn-primary">Edit</a></div>
                    <div><a href="{{ route('urls.show', $r->id) }}" class="mr-2 btn btn-warning">Show</a></div>
                    <form action="{{route('urls.destroy', $r->id)}}" method="post">
                        @csrf
                        @method("DELETE")
                    <button type="submit" class="mr-2 btn btn-danger">Delete</button>
                </form>
                  </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- In LARAVEL when we need to display or use a
      The packages as pagination we need to
      write the !! !! before and after
      -->
      {!! $u->links() !!}
</div>

@endsection
