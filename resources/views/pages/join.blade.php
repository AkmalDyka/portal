@extends('layouts.app')

@section('title')
Join 
@endsection

@section('content')
    <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
          <a class="navbar-brand" href="index.html">
            <img src="frontend/images/logo.png" alt="" />
          </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
          <li>
            <span class="text-muted"
              >World Class Concert</span
            >
          </li>
        </ul>
      </nav>
    </div>
    <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col p-0 pl-3 pl-lg-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" aria-current="page">
                    Social Chic
                  </li>
                  <li class="breadcrumb-item" aria-current="page">Details</li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Join
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <h2 class="mb-4">Ticket Details</h2>
            </div>
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Front Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="nameOne"
                  aria-describedby="nameHelp"
                  name="nameOne"
                  value=""
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="nameTwo"
                  aria-describedby="nameHelp"
                  name="nameTwo"
                  value=""
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="Bandung">Bandung</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  value="40512"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  value="+628 2020 11111"
                />
              </div>
            </div>
          </div>
          <div class="col-8 col-md-3">
              <a href="success.html" class="btn btn-block btn-join-now mt-3 py-2"
                  >Join Now</a
                >
            </div>
      </section>
    </main>
@endsection