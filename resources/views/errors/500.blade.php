@extends('dashboard.errorBase')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="clearfix">
            <h1 class="float-left display-3 mr-4">500</h1>
            <h4 class="pt-3">Houston, we have a problem!</h4>
            <p class="text-muted">The page you are looking for is temporarily unavailable.</p>
          </div>
          <div class="text-center">
            <button class="btn btn-info"><a href="/">Go Home</a></button>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('javascript')

@endsection