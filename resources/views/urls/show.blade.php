@extends('urls.layout')

@section('content')

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Show URL</h1>
          <p class="lead">MyURLs - Dashboard</p>
        </div>
      </div>
</div>

<div class="container">
    <table class="table">
      <tr>
          <td width="20%">
              <div class="form-group">
                  <label>URL ID</label>
              </div>
          </td>

          <td width="80%">
            <div class="form-group">
                <span>{{ $url->id}}</span>
            </div>
          </td>
      </tr>

      <tr>
        <td width="20%">
            <div class="form-group">
                <label>URL Name</label>
            </div>
        </td>

        <td width="80%">
          <div class="form-group">
              <span>{{ $url->name}}</span>
          </div>
        </td>
    </tr>

    <tr>
        <td width="20%">
            <div class="form-group">
                <label>URL</label>
            </div>
        </td>

        <td width="80%">
          <div class="form-group">
              <span>{{ $url->url}}</span>
          </div>
        </td>
    </tr>

    <tr>
        <td width="20%">
            <div class="form-group">
                <label>Description</label>
            </div>
        </td>

        <td width="80%">
          <div class="form-group">
              <span>{{ $url->description}}</span>
          </div>
        </td>
    </tr>

    

    <tr>
        <td colspan="2">
            <a href="{{ route('urls.index')}}"
               class="btn btn-primary">Back</a>
        </td>
    </tr>
    </table>

</div>

@endsection

