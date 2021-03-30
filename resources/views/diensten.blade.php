@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - Diensten" />
<meta property=”og:description” content="" />
<meta property=”og:url” content=https://www.exchange-workforce.eu/diensten />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - Diensten</title>

<!-- MAIN
================================================== -->
<main class="pb-8 pb-md-11 mt-md-6">
  <div class="container-md">
    <div class="row">
      <div class="col-12 col-md-3">

        <!-- Card -->
        <div class="card card-bleed border-bottom border-bottom-md-0 shadow-light-lg d-none d-md-block"
          style="width: 250px; position: fixed;">

          <!-- Collapse -->
          <div class="card-body">

            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase mb-3">
              Overzicht
            </h6>

            <!-- List -->
            <ul class="card-list list text-gray-700 mb-6">
              <li class="list-item active">
                <a class="list-link text-reset" href="#uitzenden" data-toggle="smooth-scroll" data-offset="100">
                  Uitzenden
                </a>
              </li>
              <li class="list-item">
                <a class="list-link text-reset" href="#begeleiding" data-toggle="smooth-scroll" data-offset="100">
                  Begeleiding
                </a>
              </li>
              <li class="list-item">
                <a class="list-link text-reset" href="#inhouse" data-toggle="smooth-scroll" data-offset="100">
                  Inhouse
                </a>
              </li>
            </ul>

          </div>

        </div>

      </div>
      <div class="col-12 col-md-9 mt-7 mt-md-0">

        <!-- Card -->
        <div class="card card-bleed shadow-light-lg mb-6" id="uitzenden">
          <div class="card-header">

            <!-- Heading -->
            <h4 class="mb-0">
              Uitzenden
            </h4>

          </div>
          <div class="card-body">

            <p class="text-gray-700 mb-4">
              Er komt door de huidige wet- en regelgeving in Nederland het nodige kijken bij het inlenen van personeel.
            </p>
            <p class="text-gray-700 mb-4">
              Ter bescherming van uitzendkrachten maar ook van u als inlener zelf is de laatste jaren veel ten goede
              veranderd. Bij EXCHANGE WORKFORCE weten we dit en zorgen we er voor dat alle -wettelijke- formaliteiten
              goed geregeld zijn zodat uw uitzendpersoneel een oplossing is en geen latent probleem.
            </p>
            <p class="text-gray-700 mb-4">
              EXCHANGE WORKFORCE werkt daarvoor onder andere met Plan4Flex en Easyflex registratiesystemen.
            </p>

          </div>
        </div>

        <!-- Card -->
        <div class="card card-bleed shadow-light-lg mb-6" id="begeleiding">
          <div class="card-header">

            <!-- Heading -->
            <h4 class="mb-0">
              Begeleiding
            </h4>

          </div>
          <div class="card-body">

            <p class="text-gray-700 mb-4">
              Bij EXCHANGE WORKFORCE willen we het beste voor u en de medewerkers dus begeleiden we ons personeel vanaf
              het begin professioneel: solliciteren in de eigen taal, georganiseerd vervoer naar de huisvesting, hulp
              bij de registratie wanneer men eenmaal in Nederland is aangekomen en documenten die aan alle wettelijke
              vereisten voldoen.
            </p>
            <p class="text-gray-700 mb-4">
              Samen met u als inlener zorgen we voor plezierig en veilig werk dat bijdraagt aan uw
              bedrijfsdoelstellingen en omgeven door zekerheden.
            </p>
            <p class="text-gray-700 mb-4">
              EXCHANGE WORKFORCE werkt daarvoor onder andere met Plan4Flex en Easyflex registratiesystemen.
            </p>

            <img class="img-fluid" style="border-radius: 5px;" src="img/exchange/begeleiding.jpg" alt="">

          </div>
        </div>

        <!-- Card -->
        <div class="card card-bleed shadow-light-lg mb-6" id="inhouse">
          <div class="card-header">

            <!-- Heading -->
            <h4 class="mb-0">
              INHOUSE
            </h4>

          </div>
          <div class="card-body">

            <p class="text-gray-700 mb-4">
              Wanneer we contractueel verbonden zijn en onze samenwerking intensief wordt gaan we indien gewenst graag
              een inhouse overeenkomst met u aan: voortdurend dichtbij om u maximaal te ontzorgen, korte lijnen met de
              medewerkers en direct leidinggevenden te houden en: voeling met de processen te garanderen om indien
              noodzakelijk snel te kunnen inspelen op uw toe- of afnemende behoefte aan medewerkers.
            </p>
            <p class="text-gray-700 mb-4">
              Hoe we dat doen? Door zelf (!) ook de handen uit de mouwen te steken bijvoorbeeld, of desgewenst samen met
              de inlener KPI’s in te richten en te monitoren.
            </p>
            <p class="text-gray-700 mb-4">
              Benieuwd naar de voordelen van een inhouse overeenkomst? We komen graag aan tafel.
            </p>

          </div>
        </div>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</main>

<script>
  $(window).scroll(function () {
            var $this = $(this),
            $head = $('body > main > div > div > div.col-12.col-md-3 > div');
            // console.log($this.scrollTop())


        if ($this.scrollTop() > 1016) {
          $head.addClass('position-relative');
          $head.css('margin-top', '1016px')
        } else {
          $head.removeClass('position-relative');
          $head.css('margin-top', '0')
        }
      });
</script>

</body>
@endsection
