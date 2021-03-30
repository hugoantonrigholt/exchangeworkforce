<html lang="en">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Libs CSS -->
  <link href="{{ url('fonts/Feather/feather.css') }}" rel="stylesheet">
  <link href="{{ url('libs/flickity.min.css') }}" rel="stylesheet">
  <link href="{{ url('libs/flickity-fade/flickity-fade.css') }}" rel="stylesheet">
  <link href="{{ url('libs/aos/dist/aos.css') }}" rel="stylesheet">
  <link href="{{ url('libs/jarallax/dist/jarallax.css') }}" rel="stylesheet">
  <link href="{{ url('libs/highlightjs/styles/vs2015.css') }}" rel="stylesheet">
  <link href="{{ url('libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="57x57" href="{{ url('img/exchange/favicon/apple-icon-57x57.png') }}">
  <link rel=" apple-touch-icon" sizes="60x60" href="{{ url('img/exchange/favicon/apple-icon-60x60.png') }}">
  <link rel=" apple-touch-icon" sizes="72x72" href="{{ url('img/exchange/favicon/apple-icon-72x72.png') }}">
  <link rel=" apple-touch-icon" sizes="76x76" href="{{ url('img/exchange/favicon/apple-icon-76x76.png') }}">
  <link rel=" apple-touch-icon" sizes="114x114" href="{{ url('img/exchange/favicon/apple-icon-114x114.png') }}>" <link
    rel=" apple-touch-icon" sizes="120x120" href="{{ url('img/exchange/favicon/apple-icon-120x120.png') }}">
  <link rel=" apple-touch-icon" sizes="144x144" href="{{ url('img/exchange/favicon/apple-icon-144x144.png') }}">
  <link rel=" apple-touch-icon" sizes="152x152" href="{{ url('img/exchange/favicon/apple-icon-152x152.png') }}">
  <link rel=" apple-touch-icon" sizes="180x180" href="{{ url('img/exchange/favicon/apple-icon-180x180.png') }}">
  <link rel=" icon" type="image/png" sizes="192x192" href="{{ url('img/exchange/favicon/android-icon-192x192.png') }}">
  <link rel=" icon" type="image/png" sizes="32x32" href="{{ url('img/exchange/favicon/favicon-32x32.png') }}">
  <link rel=" icon" type="image/png" sizes="96x96" href="{{ url('img/exchange/favicon/favicon-96x96.png') }}">
  <link rel=" icon" type="image/png" sizes="16x16" href="{{ url('img/exchange/favicon/favicon-16x16.png') }}">
  <link rel=" manifest" href="{{ url('img/exchange/favicon/manifest.json') }}">
  <meta name=" msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ url('img/exchange/favicon/ms-icon-144x144.png') }}">
  <meta name=" theme-color" content="#ffffff">


  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">


  <!-- Map -->
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

  <!-- Theme CSS -->
  <link href="{{ url('css/theme.min.css') }}" rel="stylesheet">
  <link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200">

  <!-- NAVBAR
        ================================================== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">

      <!-- Brand -->
      <a class="navbar-brand" href="/">
        <img src="{{ url('img/brand.svg') }}" class="navbar-brand-img" alt="...">
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fe fe-x"></i>
        </button>

        <!-- Navigation -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-none d-md-block {{ (request()->is('opdrachtgevers')) || (request()->is('uitzendkrachten')) || (request()->is('onze-werkwijze')) || (request()->is('ons-team')) ? 'active' : '' }}"
              id="navbar_over-ons" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
              Over ons
            </a>
            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbar_over-ons">
              <div class="row gx-0">
                <div class="col-12">

                  <!-- Heading -->
                  <h6 class="dropdown-header">
                    Over ons
                  </h6>

                  <!-- List -->
                  <a class="dropdown-item {{ (request()->is('opdrachtgevers')) ? 'active' : '' }}"
                    href="/opdrachtgevers">
                    Opdrachtgevers
                  </a>
                  <a class="dropdown-item {{ (request()->is('uitzendkrachten')) ? 'active' : '' }}"
                    href="/uitzendkrachten">
                    Uitzendkrachten
                  </a>
                  <a class="dropdown-item {{ (request()->is('onze-werkwijze')) ? 'active' : '' }}"
                    href="/onze-werkwijze">
                    Onze werkwijze
                  </a>
                  {{-- <a class="dropdown-item {{ (request()->is('ons-team')) ? 'active' : '' }}" href="/ons-team">
                  Ons team
                  </a> --}}

                </div>
              </div>
            </div> <!-- / .row -->
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-none d-md-block {{ (request()->is('uitzenden')) || (request()->is('begeleiding')) || (request()->is('inhouse')) || (request()->is('branches')) ? 'active' : '' }}"
              id="navbar_diensten" data-toggle="dropdown" href="diensten" aria-haspopup="true" aria-expanded="false">
              Diensten
            </a>
            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbar_diensten-ons">
              <div class="row gx-0">
                <div class="col-12">

                  <!-- Heading -->
                  <h6 class="dropdown-header">
                    Diensten
                  </h6>

                  <!-- List -->
                  <a class="dropdown-item {{ (request()->is('uitzenden')) ? 'active' : '' }}" href="uitzenden">
                    Uitzenden
                  </a>
                  <a class="dropdown-item {{ (request()->is('begeleiding')) ? 'active' : '' }}" href="begeleiding">
                    Begeleiding
                  </a>
                  <a class="dropdown-item {{ (request()->is('inhouse')) ? 'active' : '' }}" href="inhouse">
                    Inhouse
                  </a>
                  <a class="dropdown-item {{ (request()->is('branches')) ? 'active' : '' }}" href="branches">
                    Branches
                  </a>

                </div>
              </div>
            </div> <!-- / .row -->
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-none d-md-block{{ (request()->is('vacatures')) || (request()->is('uitgelichte-vacatures')) || (request()->is('interne-vacatures')) ? 'active' : '' }}"
              id="navbar_vacatures" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
              Vacatures
            </a>
            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbar_vacatures">
              <div class="row gx-0">
                <div class="col-12">

                  <!-- Heading -->
                  <h6 class="dropdown-header">
                    Vacatures
                  </h6>

                  <!-- List -->
                  <a class="dropdown-item {{ (request()->is('vacatures')) ? 'active' : '' }}" href="/vacatures">
                    Vacatures
                  </a>
                  <a class="dropdown-item {{ (request()->is('interne-vacatures')) ? 'active' : '' }}"
                    href="/interne-vacatures">
                    Interne vacatures
                  </a>

                </div>
              </div>
            </div> <!-- / .row -->
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link {{ (request()->is('inschrijven')) ? 'active' : '' }}" href="/inschrijven">
              Inschrijven
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link {{ (request()->is('offerte-aanvragen')) ? 'active' : '' }}" href="/offerte-aanvragen">
              Offerte aanvragen
            </a>
          </li>
        </ul>

        <!-- Button -->
        <a class="navbar-btn btn btn-dark lift ml-auto" href="/contact">
          Contact
        </a>

      </div>

    </div>
  </nav>

  <!-- Sidenav -->
  <div
    class="d-none d-md-block col-3 px-lg-0 border-bottom border-bottom-lg-0 border-right-lg border-gray-300 sidenav sidenav-index sidenav-left bg-white"
    style=" width: 250px; margin-left: -250px; transition: .7s; z-index: 99">
    <div class="collapse d-block" id="sidenav">
      <div class="py-3 py-lg-4 px-lg-3 mt-13">
        <div class="col-12 mb-8">

          <!-- Heading -->
          <h6 class="font-weight-bold text-uppercase text-gray-700 mt-8">
            Over ons
          </h6>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
            <li class="mb-3">
              <a href="opdrachtgevers" class="text-reset">
                Opdrachtgevers
              </a>
            </li>
            <li class="mb-3">
              <a href="uitzendkrachten" class="text-reset">
                Uitzendkrachten
              </a>
            </li>
            <li class="mb-3">
              <a href="onze-werkwijze" class="text-reset">
                Onze werkwijze
              </a>
            </li>
            {{-- <li class="mb-3">
                    <a href="ons-team" class="text-reset">
                       Ons team
                    </a>
                 </li> --}}
          </ul>

        </div>

        <div class="col-12 mb-8">

          <!-- Heading -->
          <h6 class="font-weight-bold text-uppercase text-gray-700">
            Diensten
          </h6>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
            <li class="mb-3">
              <a href="uitzenden" class="text-reset">
                Uitzenden
              </a>
            </li>
            <li class="mb-3">
              <a href="begeleiding" class="text-reset">
                Begeleiding
              </a>
            </li>
            <li class="mb-3">
              <a href="inhouse" class="text-reset">
                Inhouse
              </a>
            </li>
            <li>
              <a href="branches" class="text-reset">
                Branches
              </a>
            </li>
          </ul>

        </div>

        <div class="col-12 mb-8">

          <!-- Heading -->
          <h6 class="font-weight-bold text-uppercase text-gray-700">
            Vacatures
          </h6>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-0">
            <li class="mb-3">
              <a href="vacatures" class="text-reset">
                Vacatures
              </a>
            </li>
            <li class="mb-3">
              <a href="interne-vacatures" class="text-reset">
                Interne vacatures
              </a>
            </li>
          </ul>




        </div>

        <div class="col-12 mb-8">

          <!-- Heading -->
          <h6 class="font-weight-bold text-uppercase text-gray-700">
            Contact
          </h6>

          <!-- List -->
          <ul class="list-unstyled text-muted mb-0">
            <li class="mb-3">
              <a href="/contact" class="text-reset">
                Contact
              </a>
            </li>
            <li class="mb-3">
              <a href="/inschrijven" class="text-reset">
                Inschrijven
              </a>
            </li>
            <li class="mb-3">
              <a href="/offerte-aanvragen" class="text-reset">
                Offerte aanvragen
              </a>
            </li>
          </ul>




        </div>

        {{-- <div class="col-12">

              <!-- Heading -->
              <h6 class="font-weight-bold text-uppercase text-gray-700">
                 Legal
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-0">
                 <li class="mb-3">
                    <a href="#!" class="text-reset">
                       Documentation
                    </a>
                 </li>
                 <li class="mb-3">
                    <a href="#!" class="text-reset">
                       Changelog
                    </a>
                 </li>
                 <li>
                    <a href="#!" class="text-reset">
                       Pagebuilder
                    </a>
                 </li>
              </ul>

           </div> --}}
      </div>
    </div>
  </div>
  <!-- Toggler -->
  <div id="sidenav-index-toggle" class="ml-7 mt-2 mt-5 position-absolute d-none d-md-block"
    style="z-index: 999; padding: 15px; border-radius: 5px; background: #EEF1F6">
    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="52" viewBox="0 0 61 52">
      <g id="Group_67" data-name="Group 67" transform="translate(-125 -21)">
        <rect id="Rectangle_217" style="transition: .7s" data-name="Rectangle 217" width="61" height="8" rx="4"
          transform="translate(125 21)" fill="#A3BBC2" />
        <rect id="Rectangle_218" style="transition: .7s" data-name="Rectangle 218" width="61" height="8" rx="4"
          transform="translate(125 43)" fill="#A3BBC2" />
        <rect id="Rectangle_219" style="transition: .7s" data-name="Rectangle 219" width="61" height="8" rx="4"
          transform="translate(125 65)" fill="#A3BBC2" />
      </g>
    </svg>
  </div>

  @yield('content')
</body>
<!-- CTA
    ================================================== -->
<section class="pt-6 pt-md-8">
  <div class="container pb-6 pb-md-8 border-bottom">
    <div class="row align-items-center">
      <div class="col-12 col-md">

        <!-- Heading -->
        <h3 class="font-weight-bold mb-1">
          Wat kunnen we voor elkaar betekenen?
        </h3>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-5 mb-md-0">
          Ons aanbod is transparant, onze werkwijze glashelder en onze voorwaarden aantrekkelijk.
        </p>

      </div>
      <div class="col-12 col-md-auto">

        <!-- Button -->
        <a href="/contact" class="btn btn-dark lift">
          Vind ons
        </a>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
<!-- FOOTER
    ================================================== -->
<footer class="pt-8 pt-md-11 pb-6 bg-white">
  <div class="container mb-10">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-3">

        <!-- Brand -->
        <img src="{{ url('img/brand-slogan.svg') }}" alt="..." class="footer-brand img-fluid mb-2">

        <!-- Social -->
        <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
          <li class="list-inline-item list-social-item mr-3">
            <a href="#!" class="text-decoration-none">
              <img src="{{ url('img/icons/social/instagram.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="#!" class="text-decoration-none">
              <img src="{{ url('img/icons/social/facebook.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="#!" class="text-decoration-none">
              <img src="{{ url('img/icons/social/twitter.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item">
            <a href="#!" class="text-decoration-none">
              <img src="{{ url('img/icons/social/pinterest.svg') }}" class="list-social-icon" alt="...">
            </a>
          </li>
        </ul>
      </div>

      <div class="col-6 col-md-4 col-lg-2">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Over ons
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
          <li class="mb-3">
            <a href="/opdrachtgevers" class="text-reset">
              Opdrachtgevers
            </a>
          </li>
          <li class="mb-3">
            <a href="/uitzendkrachten" class="text-reset">
              Uitzendkrachten
            </a>
          </li>
          <li class="mb-3">
            <a href="/onze-werkwijze" class="text-reset">
              Onze werkwijze
            </a>
          </li>
          {{-- <li class="mb-3">
            <a href="/ons-team" class="text-reset">
              Ons team
            </a>
          </li> --}}
        </ul>

      </div>
      <div class="col-6 col-md-4 col-lg-2">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Diensten
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
          <li class="mb-3">
            <a href="/uitzenden" class="text-reset">
              Uitzenden
            </a>
          </li>
          <li class="mb-3">
            <a href="/begeleiding" class="text-reset">
              Begeleiding
            </a>
          </li>
          <li class="mb-3">
            <a href="/inhouse" class="text-reset">
              Inhouse
            </a>
          </li>
          <li>
            <a href="/branches" class="text-reset">
              Branches
            </a>
          </li>
        </ul>

      </div>
      <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Vacatures
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-0">
          <li class="mb-3">
            <a href="/vacatures" class="text-reset">
              Vacatures
            </a>
          </li>
          <li class="mb-3">
            <a href="/interne-vacatures" class="text-reset">
              Interne vacatures
            </a>
          </li>
        </ul>

      </div>
      <div class="col-6 col-md-4 col-lg-2">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Legal
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-0">
          <li class="mb-3">
            <a href="/disclaimer" class="text-reset">
              Disclaimer
            </a>
          </li>
          <li class="mb-3">
            <a href="/cookieverklaring" class="text-reset">
              Cookieverklaring
            </a>
          </li>
          <li class="mb-3">
            <a href="/privacyverklaring" class="text-reset">
              Privacyverklaring
            </a>
          </li>
        </ul>

      </div>

    </div> <!-- / .row -->
  </div> <!-- / .container -->

  <div class="row">
    <div class="container">
      <section class="mw-50 m-auto">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-3 text-center aos-init aos-animate" data-aos="fade-up">
              <img src="{{ url('img/exchange/footer/footer-abu.png') }}" alt="ABU" class="img-fluid"
                style="width: 35px">
            </div>
            <div class="col-6 col-md-3 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"
              style="width: 35px">
              <img src="{{ url('img/exchange/footer/footer-sna.jpg') }}" alt="SNA" class="img-fluid mt-n2">
            </div>
            <div class="col-6 col-md-3 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="150"
              style="width: 35px">
              <img src="{{ url('img/exchange/footer/footer-snf.png') }}" alt="SNF" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
              <img src="{{ url('img/exchange/footer/footer-erkend-leerbedrijf.jpg') }}" alt="Erkend Leerbedrijf"
                class="img-fluid mt-n2" style="width: 50px">
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>
    </div>
  </div>
</footer>

</html>

<!-- JAVASCRIPT
    ================================================== -->
<!-- Libs JS -->
<script type="text/javascript" src="{{ url('libs/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/flickity-fade/flickity-fade.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/aos/dist/aos.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/jarallax/dist/jarallax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/jarallax/dist/jarallax-video.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/jarallax/dist/jarallax-element.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/typed.js/lib/typed.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/countup.js/dist/countUp.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/highlightjs/highlight.pack.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>


<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script type="text/javascript" src="{{ url('js/theme.min.js') }}"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready( function () {
  var table = $('.table').DataTable({
    // "pagingType": "simple",
    "language": {
        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
        searchPlaceholder: 'Zoek...',
        "paginate": {
          "previous": "<",
          "next": ">"
        },
        zeroRecords: "<p class='text-muted mb-6 mb-md-0'>Niet gevonden wat je zocht? <br> Probeer het nog eens, met minder filters. <br> Of kom over een paar dagen nog eens terug.</p>"

    },
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true
  });




 $('input:checkbox').on('change', function () {
  // Branche filter
   var industries = $('input:checkbox[name="industry"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(0).search(industries, true, false, false).draw(false);

  //  Functie filter
  var employment_functions = $('input:checkbox[name="employment_function"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(1).search(employment_functions, true, false, false).draw(false);

  //  Dienstverband filter
  var employments = $('input:checkbox[name="employment"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(2).search(employments, true, false, false).draw(false);

  //  Opleidingsniveau filter
  var educations = $('input:checkbox[name="education"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(3).search(educations, true, false, false).draw(false);

 });

} );
</script>

<script>
  $( document ).ready(function() {
      let expanded = 0;
      $( "#sidenav-index-toggle" ).click(function() {
         if (expanded == 0) {
               $(".sidenav-index").css("margin-left", "0");
               $('#sidenav-index-toggle rect').attr("fill", "#415464");
               expanded = 1;
            } else {
               $(".sidenav-index").css("margin-left", "-250px");
               $('#sidenav-index-toggle rect').attr("fill", "#A3BBC2");
               expanded = 0;
            }
      });
   });
</script>
