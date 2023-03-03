@extends('layouts.app')

@section('title')
    Detail Ticket
@endsection

@section('content')
     <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col p-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" aria-current="page">
                    Social Chic
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>Social Chic</h1>
                <p>Bandung, West Java</p>
                <div class="gallery">
                  <div class="xzoom-container">
                    <img
                      class="xzoom"
                      id="xzoom-default"
                      src="frontend/images/details-1.jpg"
                      xoriginal="frontend/images/details-1.jpg"
                    />
                  </div>
                  <div class="features row pt-3">
                    <div class="col-md-4">
                      <img
                        src="frontend/images/ic_event.png"
                        alt=""
                        class="features-image"
                      />
                      <div class="description">
                        <h3>Featured Ticket</h3>
                        <p>Open</p>
                      </div>
                    </div>
                    <div class="col-md-4 border-left">
                      <img
                        src="frontend/images/ic_bahasa.png"
                        alt=""
                        class="features-image"
                      />
                      <div class="description">
                        <h3>Language</h3>
                        <p>Bahasa Indonesia</p>
                      </div>
                    </div>
                    <div class="col-md-4 border-left">
                      <img
                        src="frontend/images/ic_foods.png"
                        alt=""
                        class="features-image"
                      />
                      <div class="description">
                        <h3>Foods</h3>
                        <p>Local Foods</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Purchase Information</h2>
                <hr />
                <h2>Concert Informations</h2>
                <table class="trip-informations">
                  <tr>
                    <th width="50%">Date of Concert</th>
                    <td width="50%" class="text-right">5 Maret, 2023</td>
                  </tr>
                  <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-right">10hr - 11 hrs</td>
                  </tr>
                  <tr>
                    <th width="50%">Type</th>
                    <td width="50%" class="text-right">Concert</td>
                  </tr>
                  <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">Open For Public</td>
                  </tr>
                </table>
              </div>
              <div class="join-container">
                <a href="join.html" class="btn btn-block btn-join-now mt-3 py-2"
                  >Join Now</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection