@extends('layouts.app')

@section('title')
Ticket
    
@endsection

@section('content')
    <main>
      <section class="section-ticket" id="ticket">
        <div class="container">
          <div class="row">
            <div class="col text-left section-ticket-heading">
              <h4>Concert Tickets</h4>
          </div>
        </div>
      </section>
      <section class="section-ticket-content" id="ticketContent">
        <div class="container">
          <div class="section-ticket-concert row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-ticket text-center d-flex flex-column"
                style="background-image: url('frontend/images/ticket-1.jpg')"
              >
                <div class="ticket-date">5 Maret 2023</div>
                <div class="ticket-name">Social Chic</div>
                <div class="ticket-location">BANDUNG, WEST JAVA</div>
                <div class="ticket-country">INDONESIA. 40141</div>
                <div class="ticket-button mt-auto">
                  <a href="details.html" class="btn btn-concert-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-ticket text-center d-flex flex-column"
                style="background-image: url('frontend/images/ticket-2.jpg')"
              >
                <div class="ticket-date">6 Maret 2023</div>
                <div class="ticket-name">Social Chic</div>
                <div class="ticket-location">BANDUNG, WEST JAVA</div>
                <div class="ticket-country">INDONESIA. 40141</div>
                <div class="ticket-button mt-auto">
                  <a href="details.html" class="btn btn-concert-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-ticket text-center d-flex flex-column"
                style="background-image: url('frontend/images/ticket-3.jpg')"
              >
                <div class="ticket-date">7 Maret 2023</div>
                <div class="ticket-name">Social Chic</div>
                <div class="ticket-location">BANDUNG, WEST JAVA</div>
                <div class="ticket-country">INDONESIA. 40141</div>
                <div class="ticket-button mt-auto">
                  <a href="details.html" class="btn btn-concert-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div
                class="card-ticket text-center d-flex flex-column"
                style="background-image: url('frontend/images/ticket-4.jpg')"
              >
                <div class="ticket-date">9 Maret 2023</div>
                <div class="ticket-name">Social Chic</div>
                <div class="ticket-location">BANDUNG, WEST JAVA</div>
                <div class="ticket-country">INDONESIA. 40141</div>
                <div class="ticket-button mt-auto">
                  <a href="details.html" class="btn btn-concert-details px-4">
                    View Details
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection