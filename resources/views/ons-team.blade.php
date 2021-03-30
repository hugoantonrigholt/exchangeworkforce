@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - Ons Team" />
<meta property=”og:description” content="Ontmoet het Exchange Workforce team!" />
<meta property=”og:url” content=https://www.exchange-workforce.eu/ons-team />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - Ons team</title>


<!-- WELCOME
    ================================================== -->
<section class="py-8 py-md-12 overlay overlay-black overlay-60 bg-cover"
  style="background-image: url({{ url('img/exchange/team-banner.jpg') }});">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Heading -->
        <h1 class="display-2 font-weight-bold text-white">
          Ons team
        </h1>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- CONTENT
    ================================================== -->
<main class="pb-8 pb-md-11 mt-md-n6">
  <div class="container-md">
    <div class="row">
      <div class="row">
        <div class="col-12">

          <!-- Divider -->
          <hr class="my-6 my-md-8 border-gray-300">

        </div>
      </div> <!-- / .row -->
      <!-- Card -->
      <div class="card card-bleed shadow-light-lg">
        <div class="card-body">

          <!-- List group -->
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar avatar-xl">
                    <img class="avatar-img rounded-circle" src="assets/img/avatars/avatar-1.jpg" alt="...">
                  </div>

                </div>
                <div class="col-6 ml-n5">

                  <!-- Heading -->
                  <p class="mb-0">
                    Francoise Spijkers
                  </p>

                  <!-- Text -->
                  <p class="d-block small text-truncate text-gray-700">
                    Bedrijfsvoering
                  </p>

                </div>
              </div>
            </div>

            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar avatar-xl">
                    <img class="avatar-img rounded-circle" src="assets/img/avatars/avatar-1.jpg" alt="...">
                  </div>

                </div>
                <div class="col-6 ml-n5">

                  <!-- Heading -->
                  <p class="mb-0">
                    Richard Remie
                  </p>

                  <!-- Text -->
                  <p class="d-block small text-truncate text-gray-700">
                    Verkoop
                  </p>

                </div>
              </div>
            </div>

            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-auto">

                  <!-- Avatar -->
                  <div class="avatar avatar-xl">
                    <img class="avatar-img rounded-circle" src="assets/img/avatars/avatar-1.jpg" alt="...">
                  </div>

                </div>
                <div class="col-6 ml-n5">

                  <!-- Heading -->
                  <p class="mb-0">
                    Alexandra Barbu
                  </p>

                  <!-- Text -->
                  <p class="d-block small text-truncate text-gray-700">
                    Recruitment
                  </p>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div> <!-- / .row -->
  </div> <!-- / .container -->
</main>
@endsection
