@extends('layout.index') @section('content')
<meta property=”og:title” content="Exchange Workforce" />
<meta property=”og:description”
   content="Uw onderneming groeit en bloeit: meer opdrachten, prima marges, langdurige samenwerkingen met uw afnemers. Maar met de groei van omzet en resultaat groeit ook de zorg over de haalbaarheid ervan: waar haalt u de mensen vandaan die dit allemaal gaan verwezenlijken?" />
<meta property=”og:url” content=https://www.exchange-workforce.eu />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce</title>

<!-- Sidenav -->
<div
   class="col-3 px-lg-0 border-bottom border-bottom-lg-0 border-right-lg border-gray-300 sidenav sidenav-index sidenav-left bg-white"
   style=" width: 250px; margin-left: -250px; transition: .7s; z-index: 99">
   <div class="collapse d-block" id="sidenav">
      <div class="py-3 py-lg-4 px-lg-3 mt-10">
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
<div id="sidenav-index-toggle" class="ml-7 ml-md-9 mt-5 position-absolute"
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

<div style="background-image: url({{ url('img/exchange/index-cover-no-anim.png') }}); background-size: cover;position:
   absolute; z-index: -1000; position: absolute;"
   class="w-100 h-100 max-vh-100 bg-cover index-block-container d-none d-md-block">
</div>


<section class="text-white m-0 mx-md-10 mt-md-12 d-none d-md-block">
   <div class="row justify-content-between align-middle">
      <div class="col-sm-12 col-md-6 p-10 p-md-0 bg-sm-dark pt-13 text-sm-light content-block">
         <blockquote class="blockquote mb-8 mb-md-0">
            <h1 class="display-0 font-weight-bold">
               Ik zoek <br> werk
            </h1>
            <p class="lead mb-5 mb-md-7 font-italic">
               You make the difference
            </p>
         </blockquote>
         <a class="btn btn-white text-bold lift ml-auto" href="vacatures">
            Vacatures bekijken
         </a>
      </div>
      <div class="col-sm-12 col-md-6 p-10 p-md-0 bg-sm-light text-sm-dark text-right content-block">
         <blockquote class="blockquote mb-8 mb-md-0">
            <h1 class="display-0 font-weight-bold">
               Ik zoek <br> personeel
            </h1>
            <p class="lead mb-5 mb-md-7 font-italic">
               Together we make EXCHANGE
            </p>
         </blockquote>
         <a class="btn btn-white text-bold lift ml-auto" href="opdrachtgevers">
            Voor opdrachtgevers
         </a>
      </div>
   </div>
</section>


<section class="text-white d-block d-md-none">
   <div class="row justify-content-between align-middle">
      <div class="col-12 bg-dark mobile-block pt-10">
         <div class="col-sm-12 col-md-6 text-light text-left p-7">
            <blockquote class="blockquote mb-8 mb-md-0">
               <h1 class="display-0 font-weight-bold">
                  Ik zoek <br> werk
               </h1>
               <p class="lead mb-5 mb-md-7 font-italic">
                  You make the difference
               </p>
            </blockquote>
            <a class="btn btn-light text-bold lift ml-auto" href="vacatures">
               Vacatures bekijken
            </a>
         </div>
      </div>
      <div class="col-12 bg-light mobile-block">
         <div class="col-sm-12 col-md-6 text-dark text-right p-7">
            <blockquote class="blockquote mb-8 mb-md-0">
               <h1 class="display-0 font-weight-bold">
                  Ik zoek <br> personeel
               </h1>
               <p class="lead mb-5 mb-md-7 font-italic">
                  Together we make EXCHANGE
               </p>
            </blockquote>
            <a class="btn btn-dark text-bold lift ml-auto" href="opdrachtgevers">
               Voor opdrachtgevers
            </a>
         </div>
      </div>
   </div>
</section>

<style>
   .mobile-block {
      height: 70vh;
   }
</style>

</body>

</html>
{{-- Javascript --}}
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
@endsection
