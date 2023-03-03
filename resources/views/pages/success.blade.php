@extends('layouts.app')

@section('title')
Join 
@endsection

@section('content')
    <body>
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">My tickets</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              Sign In
            </button>
          </form>
        </div>
      </nav>
    </div>

    <main>
      <div class="section-success d-flex align-items-center">
        <div class="col text-center">
          <img src="frontend/images/" alt="" />
          <h1>Yay! Join Success</h1>
          <p>
            We've sent you email for ticket
            <br />
            dont forget to bring for entering gate
          </p>
          <a href="index.html" class="btn btn-home-page mt-3 px-5">
            Home Page
          </a>
        </div>
      </div>
    </main>

    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  </body>
@endsection