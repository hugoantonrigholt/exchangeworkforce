@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - Offerte aanvragen" />
<meta property=”og:description” content="Heeft u behoefte aan advies, een aanbieding voor een bepaalde functie, periode of project?
Wilt u meer weten over onze tarieven of andere aspecten van een samenwerking?" />
<meta property=”og:url” content=https://www.exchange-workforce.eu/offerte-aanvragen />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - Offerte aanvragen</title>

@if(session()->has('success'))
<div aria-live="polite" aria-atomic="true" style="position: relative;  border-radius: 5px;" class="mt-4 mr-3">
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
      De offerte aanvraag is succesvol verstuurd!
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
{{-- <section class="py-8 py-md-12 overlay overlay-black overlay-60 bg-cover"
  style="background-image: url({{ url('img/exchange/offerte-banner.jpg') }});">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8 text-center">

      <h1 class="display-2 font-weight-bold text-white">
        Offerte aanvragen
      </h1>

    </div>
  </div>
</div>
</section> --}}

<!-- FORM
    ================================================== -->
<section class="pt-8 pt-md-11 pb-8 pb-md-14">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Heading -->
        <h2 class="font-weight-bold">
          Heeft u behoefte aan advies?
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-3">
          Een aanbieding voor een bepaalde functie, periode of project?
          Wilt u meer weten over onze tarieven of andere aspecten van een samenwerking?
        </p>
        <p class="font-size-lg text-muted mb-7 mb-md-9">
          We komen graag in contact met u en zijn met veel plezier van dienst.
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-10">

        <!-- Form -->
        <form action="/offerte-aanvragen/post" method="POST">
          @csrf
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">
                <label for="name">
                  Naam
                </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Naam" required />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group mb-5">
                <label for="company">
                  Bedrijfsnaam
                </label>
                <input type="text" class="form-control" id="company" name="company" placeholder="Bedrijfsnaam"
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
