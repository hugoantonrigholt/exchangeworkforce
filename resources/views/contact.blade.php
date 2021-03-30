@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - Contact" />
<meta property=”og:description”
  content="Wat kunnen we voor elkaar betekenen? Zijn we je nieuwe uitzendbureau? De verbindende schakel tussen uitzendkrachten en u als inlener? We komen graag in gesprek!" />
<meta property=”og:url” content=https://www.exchange-workforce.eu/contact />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - Contact</title>

@if(session()->has('success'))
<div aria-live="polite" aria-atomic="true"
  style="position: absolute; min-height: 200px;  border-radius: 5px; z-index:999999999" class="mt-4 mr-3">
  <div class="toast px-5 py-3"
    style="position: absolute; top: 0; right: 0; border-radius: 5px; box-shadow: none; border: none;" data-delay="5000">
    <div class="toast-header">
      <div class="icon-circle bg-dark text-white mr-2 ml-0" style="width: 2rem; height: 2rem;">
        <i class="fe fe-award" style="font-size: 1rem;"></i>
      </div>
      <strong class="mr-auto">Het is gelukt!</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body text-muted">
      Het bericht is succesvol verstuurd!
    </div>
  </div>
</div>
<script>
  $( document ).ready(function() {
        $('.toast').toast('show');
    });
</script>
@endif
<!-- WELCOME
    ================================================== -->
<section class="py-8 py-md-12 overlay overlay-black overlay-60 bg-cover"
  style="background-image: url(img/exchange/high-five-natural.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Heading -->
        <h1 class="display-2 font-weight-bold text-white">
          Wat kunnen we voor elkaar betekenen?
        </h1>

        <!-- Text -->
        <p class="lead text-white-75">
          ons aanbod is transparant, onze werkwijze glashelder en onze voorwaarden aantrekkelijk.
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- INFO
    ================================================== -->
<section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 text-center border-right border-gray-300">

        <!-- Heading -->
        <h6 class="text-uppercase text-gray-700 mb-1">
          Vind ons
        </h6>

        <!-- Link -->
        <div class="mb-5 mb-md-0">
          <a href="https://goo.gl/maps/vqY5L2sdRboccx2UA" target="_blank" class="h4 text-primary"
            style="transition: .3s">
            Pottenbakkerstraat 44 Etten-Leur 4871 EP
          </a>
        </div>

      </div>


      <div class="col-12 col-md-4 text-center border-right border-gray-300 d-none">

        <!-- Heading -->
        <h6 class="text-uppercase text-gray-700 mb-1">
          Bel ons
        </h6>

        <!-- Link -->
        <div class="mb-5 mb-md-0">
          <a href="#!" class="h4 text-primary">
            (555) 123-4567
          </a>
        </div>

      </div>

      <div class="col-12 col-md-4 text-center border-right border-gray-300"></div>

      <div class="col-12 col-md-4 text-center">

        <!-- Heading -->
        <h6 class="text-uppercase text-gray-700 mb-1">
          Connect met ons
        </h6>

        <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
          <li class="list-inline-item list-social-item mr-3">
            <a href="https://www.instagram.com/exchangeworkforce/" target="_blank" class="text-decoration-none">
              <img src="{{ url('img/icons/social/instagram.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="https://www.facebook.com/exchangeworkforce" target="_blank" class="text-decoration-none">
              <img src="{{ url('img/icons/social/facebook.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item">
            <a href="https://www.linkedin.com/company/exchangeworkforce/" target="_blank" class="text-decoration-none">
              <img src="{{ url('img/icons/social/linkedin.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
        </ul>

      </div>
    </div> <!-- / .row -->
  </div>
</section>

<!-- FORM
    ================================================== -->
<section class="pt-8 pt-md-11 pb-8 pb-md-14">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Heading -->
        <h2 class="font-weight-bold">
          Zijn we je nieuwe uitzendbureau?
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-3">
          De verbindende schakel tussen uitzendkrachten en u als inlener? We komen graag in gesprek om samen snel vast
          te stellen waar we van dienst kunnen zijn. Ons aanbod is glashelder, onze werkwijze aantrekkelijk en onze
          voorwaarden overtuigend.
        </p>
        <p class="font-size-lg text-muted mb-7 mb-md-9">
          Aangenaam, EXCHANGE WORKFORCE.
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-10">

        <!-- Form -->
        <form action="/contact/post" method="POST">
          @csrf
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">
                <label for="first_name">
                  Voornaam
                </label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Voornaam"
                  required />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">
                <label for="last_name">
                  Achternaam
                </label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Achternaam"
                  required />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">
                <label for="email">
                  Email
                </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="hello@domain.com"
                  required />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">
                <label for="phone">
                  Telefoonnummer
                </label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="06 12345678" required />
              </div>
            </div>
          </div>
          <!-- / .row -->
          <div class="row">
            <div class="col-12">
              <div class="form-group mb-5">
                <label for="message">
                  Hoe kunnen we helpen?
                </label>
                <textarea id="message" name="message" rows="5" class="form-control"
                  placeholder="Laat het ons weten!"></textarea>
              </div>
            </div>
          </div>
          <!-- / .row -->
          <div class="row align-items-center">
            <div class="col-12 col-md">
              <!-- Submit -->
              <button type="submit" class="btn btn-dark mb-6 mb-md-0 lift">Verstuur nu <i
                  class="fe fe-arrow-right ml-3"></i></button>
            </div>
            <div class="col-12 col-md-auto">
              <p class="font-size-sm text-muted mb-0">
                Het bericht wordt veilig verstuurd en opgeslagen.
              </p>
            </div>
          </div>
          <!-- / .row -->
        </form>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
@endsection
