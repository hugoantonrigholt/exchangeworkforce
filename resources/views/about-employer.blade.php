@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - Opdrachtgevers" />
<meta property=”og:description”
  content="Uw onderneming groeit en bloeit: meer opdrachten, prima marges, langdurige samenwerkingen met uw afnemers. Maar met de groei van omzet en resultaat groeit ook de zorg over de haalbaarheid ervan: waar haalt u de mensen vandaan die dit allemaal gaan verwezenlijken?" />
<meta property=”og:url” content=https://www.exchange-workforce.eu/opdrachtgevers />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - Opdrachtgevers</title>

<!-- WELCOME
    ================================================== -->
<section class="py-8 py-md-11 border-bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Headin -->
        <h1 class="display-2">
          Opdrachtgevers
        </h1>

        <!-- Text -->
        <p class="lead text-muted mb-7 mb-md-9">
          Uw onderneming groeit en bloeit: meer opdrachten, prima marges, langdurige samenwerkingen met uw afnemers.
          Maar met de groei van omzet en resultaat groeit ook de zorg over de haalbaarheid ervan: waar haalt u de mensen
          vandaan die dit allemaal gaan verwezenlijken?
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- LOCATION
    ================================================== -->
<section class="pt-8 pt-md-0 border-bottom bg-white">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div
          class="position-relative h-100 vw-50 float-right d-none d-md-block overlay overlay-black overlay-60 bg-cover"
          style="background-image: url({{ url('img/exchange/over-exchange-banner.jpg') }});">
          <div class="shape shape-right shape-fluid-y svg-shim text-white">
            <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 386V0H100V1544H50V1158L0 386Z" fill="currentColor" />
            </svg>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">

        <!-- Heading -->
        <h2>
          EXCHANGE WORKFORCE
        </h2>

        <!-- Text -->
        {{-- <p class="font-size-lg text-gray-700 mb-6">
          wil graag de samenwerking met u aan gaan en uw betrouwbare partner zijn in het beschikbaar stellen van
          (tijdelijk) personeel.
        </p>
        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6">
          Eigen, lokale recruiters zoeken (en vinden!) in o.a. Polen, Roemenië, Bulgarije en natuurlijk Nederland zelf
          met zorg personeel voor de sectoren logistiek, metaal & techniek, productie, schoonmaak, tuinbouw en de
          voedingsmiddelenindustrie.
        </p> --}}

        <p class="font-size-lg text-gray-700 mb-6">zelf met de juiste aandacht en kwaliteit personeel voor de sectoren
          Logistiek, Metaal en Techniek, Productie, Schoonmaak, Tuinbouw en Voedingsmiddelenindustrie.
        </p>

        <!-- Stats -->
        {{-- <div class="d-flex">
          <div class="pr-5">
            <h3 class="text-light mb-0">
              <span data-toggle="countup" data-from="0" data-to="{{ $vacancies->count() }}" data-aos
        data-aos-id="countup:in">0</span>
        </h3>
        <p class="text-gray-700 mb-0">
          Vacatures
        </p>
      </div>
      <div class="border-left border-gray-300"></div>
      <div class="px-5">
        <h3 class="text-light mb-0">
          <span data-toggle="countup" data-from="0" data-to="{{ $top_vacancies->count() }}" data-aos
            data-aos-id="countup:in">0</span>
        </h3>
        <p class="text-gray-700 mb-0">
          Uitgelichte vacatures
        </p>
      </div>
      <div class="border-left border-gray-300"></div>
      <div class="pl-5">
        <h3 class="text-light mb-0">
          <span data-toggle="countup" data-from="0" data-to="52" data-aos
            data-aos-id="countup:in">{{ $vacancy_replies->count() }}</span>
        </h3>
        <p class="text-gray-700 mb-0">
          Sollicitaties
        </p>
      </div>
    </div> --}}

  </div>
  </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- COMPANIES
    ================================================== -->
<section class="py-8 py-md-11">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7 text-center">

        <!-- Heading -->
        <h2>
          Zodra u en wij zakelijk met elkaar verbonden zijn
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-3">
          en u weer verder gaat met uw kernactiviteiten, blijven we dicht bij de opdracht door contact te houden met u
          en de medewerkers om, indien noodzakelijk, het team snel uit te kunnen breiden of u anderszins te
          ondersteunen.
        </p>
        <!-- Text -->
        <p class="font-size-lg text-muted mb-3">
          We willen graag een langdurige verbintenis aangaan met u als opdrachtgever. Goede huisvesting, een veilige en
          gezonde werkplek, passende functies en dito beloningen zijn voor ons kernwaarden.
        </p>
        <!-- Text -->
        <p class="font-size-lg text-muted mb-7 mb-md-9">
          <strong>EXCHANGE</strong> WORKFORCE voldoet aan alle gestelde eisen die de huidige wet- en regelgeving aan
          uitzendbedrijven
          stelt.
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
@endsection
