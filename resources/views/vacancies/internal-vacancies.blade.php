@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - Interne vacatures" />
<meta property=”og:description” content=" Bekijk alle interne vacatures van Exchange Workforce " />
<meta property=”og:url” content=https://www.exchange-workforce.eu/interne-vacatures />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - Interne Vacatures</title>

@if ($vacancies->count())
<section class="pt-6 pt-md-8 pb-8 mb-md-8 mt-10">
   <div class="page-container">
      <div class="row">

         <div class="col-12 col-md-3">
            <div class="card shadow-lg mb-6 mb-md-0">
               <div class="card-body">
                  <form action="{{ route('vacatures') }}" method="GET">

                     <div class="industry mb-6">
                        <!-- Heading -->
                        <h3 class="font-weight-bold text-uppercase mb-3">
                           Branche
                        </h3>
                        <!-- List -->
                        @foreach (\App\Models\Industry::select('id','industry')->get() as $industry)
                        @if (\App\Models\Vacancy::where('industry_id', '=', $industry->id)->count() > 0)

                        <input class="form-check-input" type="checkbox" name="industry" id="{{ $industry->industry }}"
                           value="{{ $industry->industry }}">
                        <label class="form-check-label text-gray-700"
                           for="{{ $industry->industry }}">{{ $industry->industry }}</label>
                        @endif
                        @endforeach
                        </ul>
                     </div>

                     <div class="employment_function mb-6">
                        <!-- Heading -->
                        <h3 class="font-weight-bold text-uppercase mb-3">
                           Functie
                        </h3>
                        <!-- List -->
                        @foreach (\App\Models\EmploymentFunction::select('id','employment_function')->get() as
                        $employment_function)
                        @if (\App\Models\Vacancy::where('employment_function_id', '=',
                        $employment_function->id)->count() > 0)

                        <input class="form-check-input" type="checkbox" name="employment_function"
                           id="{{ $employment_function->employment_function }}"
                           value="{{ $employment_function->employment_function }}">
                        <label class="form-check-label text-gray-700"
                           for="{{ $employment_function->employment_function }}">{{ $employment_function->employment_function }}</label>
                        @endif
                        @endforeach
                     </div>

                     <div class="employment mb-6">
                        <!-- Heading -->
                        <h3 class="font-weight-bold text-uppercase mb-3">
                           Dienstverband
                        </h3>
                        <!-- List -->
                        @foreach (\App\Models\Employment::select('id','employment')->get() as $employment)

                        @if (\App\Models\Vacancy::where('employment_id', '=', $employment->id)->count() > 0)
                        <input class="form-check-input" type="checkbox" name="employment"
                           id="{{ $employment->employment }}" value="{{ $employment->employment }}">
                        <label class="form-check-label text-gray-700"
                           for="{{ $employment->employment }}">{{ $employment->employment }}</label>
                        @endif
                        @endforeach
                     </div>


                     <div class="education mb-6">
                        <!-- Heading -->
                        <h3 class="font-weight-bold text-uppercase mb-3">
                           Opleidingsniveau
                        </h3>
                        <!-- List -->
                        @foreach (\App\Models\Education::select('id','education')->get() as $education)
                        @if (\App\Models\Vacancy::where('education_id', '=', $education->id)->count() > 0)
                        <input class="form-check-input" type="checkbox" name="education"
                           id="{{ $education->education }}" value="{{ $education->education }}">
                        <label class="form-check-label text-gray-700"
                           for="{{ $education->education }}">{{ $education->education }}</label>
                        @endif
                        @endforeach
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div class="col-12 col-md-8 p-0">

            @if ($vacancies->count())
            <div class="row mb-6 mb-md-8 mx-1">
               <div class="col-auto">

                  <!-- Icon -->
                  <div class="icon-circle bg-dark text-white">
                     <i class="fe fe-award"></i>
                  </div>

               </div>
               <div class="col ml-n4">

                  <!-- Heading -->
                  <h2 class="font-weight-bold mb-0">
                     <span class="text-primary">Interne</span> vacatures
                  </h2>

                  <!-- Badge -->
                  <span class="badge badge-pill badge-dark mt-2 mb-3">
                     <span class="h6 text-uppercase">
                        @if ($vacancies->count() == 1)
                        {{ $vacancies->count() }} interne vacature
                        @else
                        {{ $vacancies->count() }} interne vacatures
                        @endif
                     </span>
                  </span>

                  <p class="text-muted">
                     We zoeken bij EXCHANGE WORKFORCE ook regelmatig zelf collega’s: voor de afdeling recruiting
                     bijvoorbeeld, of het voeren
                     van intake- of sollicitatiegesprekken. Ons advies: kijk regelmatig bij interne vacatures en wie
                     weet zien we je
                     binnenkort bij de koffieautomaat.
                  </p>

               </div>
            </div>
            @endif

            <div class="container">
               <table class="table">
                  <thead class="d-none">
                     <th>Branche</th>
                     <th>Employment Function</th>
                     <th>Employment</th>
                     <th>Education</th>
                     <th></th>
                  </thead>
                  <tbody>
                     <div class="card shadow-light-lg accordion" id="helpAccordionOne">
                        <div class="list-group">
                           @foreach ($vacancies as $vacancy)
                           <tr>
                              <td class="d-none">{{ $vacancy->industry->industry }}</td>
                              <td class="d-none">{{ $vacancy->employment_function->employment_function }}</td>
                              <td class="d-none">{{ $vacancy->employment->employment }}</td>
                              <td class="d-none">{{ $vacancy->education->education }}</td>
                              <td class="list-group-item px-6 py-5">
                                 <!-- Toggle -->
                                 <a class="d-flex align-items-center text-reset text-decoration-none"
                                    data-toggle="collapse" href="#vacancy_{{ $vacancy->id }}" role="button"
                                    aria-expanded="false" aria-controls="helpOne">
                                    <!-- Header -->
                                    <div class="d-flex align-items-center">
                                       <div class="mr-auto">
                                          <!-- Heading -->
                                          <h4 class="font-weight-bold mb-0">
                                             {{ $vacancy->title }}
                                          </h4>
                                          <!-- Text -->
                                          <p class="font-size-sm text-muted mb-0 pt-3 pb-2">
                                             {{ $vacancy->subtitle }}
                                          </p>
                                          <p class="font-size-sm text-muted mb-0">
                                             {{ $vacancy->city }} -
                                             €{{ $vacancy->salary }} -
                                             {{ $vacancy->employment->employment }} -
                                             {{ $vacancy->employment_function->employment_function }}
                                          </p>
                                       </div>
                                    </div>
                                    <!-- Metadata -->
                                    <div class="text-muted ml-auto">
                                       <!-- Chevron -->
                                       <span class="collapse-chevron text-muted">
                                          <i class="fe fe-lg fe-chevron-down"></i>
                                       </span>
                                    </div>
                                 </a>
                                 <!-- Collapse -->
                                 <div class="collapse" id="vacancy_{{ $vacancy->id }}" data-parent="#helpAccordionOne">
                                    <div class="py-5">
                                       <!-- Heading -->
                                       <h3>
                                          Voor wie ga je aan de slag?
                                       </h3>
                                       <!-- Text -->
                                       <span class="text-gray-800 mb-6 mb-md-8">
                                          {!! $vacancy->for_who !!}
                                       </span>
                                       <!-- Heading -->
                                       <h3 class="mt-8">
                                          Wat houdt je werk in?
                                       </h3>
                                       <!-- Text -->
                                       <span class="text-gray-800 mb-6 mb-md-8">
                                          {!! $vacancy->activities !!}
                                       </span>
                                       <div class="d-flex align-items-center">
                                          <!-- Detail -->
                                          <a href="/vacatures/{{ $vacancy->id }}" class="btn btn-dark mt-6">
                                             Bekijken
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 </a>
                              </td>
                           </tr>
                           @endforeach
                        </div>
                     </div>
                  </tbody>
               </table>
            </div>



         </div>
      </div>
   </div>
   <!-- / .container -->
</section>
@else
<div class="container d-flex flex-column">
   <div class="row align-items-center justify-content-center no-gutters min-vh-100">
      <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

         <!-- Heading -->
         <h1 class="display-3 font-weight-bold text-center">
            Uh Oh.
         </h1>

         <!-- Text -->
         <p class="mb-5 text-center text-muted">
            Er zijn momenteel geen vacatures beschikbaar!
         </p>

         <!-- Link -->
         <div class="text-center">
            <a class="btn btn-dark" href="/">
               Terug
            </a>
         </div>

      </div>
   </div> <!-- / .row -->
</div>
@endif
@endsection
