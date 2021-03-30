@extends('layout.app') @section('content')
<meta property=”og:title” content="Exchange Workforce - {{ $vacancy->title }}" />
<meta property=”og:description” content=" Bekijk alle vacatures op Exchange Workforce " />
<meta property=”og:url” content=https://www.exchange-workforce.eu/vacature/{{ $vacancy->id }} />
<meta property=”og:site_name” content="Exchange Workforce" />
<title>Exchange Workforce - {{ $vacancy->title }}</title>

@if(session()->has('sollicitatie'))
<div aria-live="polite" aria-atomic="true" style="position: relative;  border-radius: 5px;" class="mt-4 mr-3">
    <div class="toast px-5 py-3"
        style="position: absolute; top: 0; right: 0; border-radius: 5px; box-shadow: none; border: none;"
        data-delay="5000">
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
            De sollicitatie is succesvol verstuurd!
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        $('.toast').toast('show');
    });
</script>
@endif
<!-- CONTENT
    ================================================== -->
<section class="pt-8 pt-md-11">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">
                <!-- Link -->
                <a href="javascript:history.back()"
                    class="font-weight-bold font-size-sm text-primary text-decoration-none mb-3">
                    <i class="fe fe-arrow-left mr-3"></i>
                    Terug
                </a>

                <!-- Heading -->
                <h1 class="display-4 mb-2">
                    {{ $vacancy->title }}
                </h1>

                <!-- Text -->
                <p class="font-size-lg text-gray-700 mb-5 mb-md-0">
                    {{ $vacancy->city }} - {{ $vacancy->employment->employment }}
                </p>
            </div>
            <div class="col-auto">
                <a class="btn btn-dark mr-1" href="#apply_form" data-toggle="smooth-scroll" data-offset="0">
                    Solliciteren
                </a>
                <a class="btn btn-dark-soft dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Delen
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item share-facebook" target="_blank" href="#">
                        Facebook
                    </a>
                    <a class="dropdown-item share-linkedin" target="_blank" href="#">
                        LinkedIn
                    </a>
                    <a class="dropdown-item share-whatsapp" target="_blank" href="#">
                        WhatsApp
                    </a>
                    {{-- <a class="dropdown-item share-instagram" target="_blank" href="#">Email</a> --}}
                </div>
            </div>
        </div>
        <!-- / .row -->
        <div class="row">
            <div class="col-12">
                <!-- Divider -->
                <hr class="my-6 my-md-8 border-gray-300" />
            </div>
        </div>
        <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-8">
                <!-- Heading -->
                <h3 class="mt-6">
                    Voor wie ga je aan de slag?
                </h3>

                <!-- Text -->
                <span class="text-gray-800 mb-6 mb-md-8">
                    {!! $vacancy->for_who !!}
                </span>

                <!-- Heading -->
                <h3 class="mt-6">
                    Wat houdt je werk in?
                </h3>

                <!-- Text -->
                <span class="text-gray-800 mb-6 mb-md-8">
                    {!! $vacancy->activities !!}
                </span>

                <!-- Heading -->
                <h3 class="mt-6">
                    Wat heb jij in je mars?
                </h3>

                <!-- Text -->
                <span class="text-gray-800 mb-6 mb-md-8">
                    {!! $vacancy->capabilities !!}
                </span>

                <!-- Heading -->
                <h3 class="mt-6">
                    What's in it for you?
                </h3>

                <!-- Text -->
                <span class="text-gray-800 mb-6 mb-md-8">
                    {!! $vacancy->for_you !!}
                </span>

                <!-- Heading -->
                <h3 class="mt-6">
                    Extra's
                </h3>

                <!-- Text -->
                <span class="text-gray-800 mb-6 mb-md-8">
                    {!! $vacancy->extras !!}
                </span>
            </div>
            <div class="col-12 col-md-4">
                <!-- Card -->
                <div class="card shadow-light-lg mb-5">
                    <div class="card-body">
                        <!-- Heading -->
                        <h4>
                            In het kort
                        </h4>
                        <!-- Text -->
                        <ul>
                            @isset($vacancy->employment->employment)
                            <li class="font-size-sm mb-2">
                                {{ $vacancy->employment->employment }}
                            </li>
                            @endisset

                            @isset($vacancy->employment_function->employment_function)
                            <li class="font-size-sm mb-2">
                                {{ $vacancy->employment_function->employment_function }}
                            </li>
                            @endisset

                            @isset($vacancy->education->education)
                            <li class="font-size-sm mb-2">
                                {{ $vacancy->education->education }}
                            </li>
                            @endisset

                            @isset($vacancy->salary)
                            <li class="font-size-sm mb-2">
                                €{{ $vacancy->salary }}
                            </li>
                            @endisset


                        </ul>
                        @isset($vacancy->particularities)
                        {!! $vacancy->particularities !!}
                        @endisset
                    </div>
                </div>

                <!-- Card -->
                <div class="card shadow-light-lg mb-5">
                    <div class="card-body">
                        <!-- Heading -->
                        <h4>
                            Niet gevonden wat je zocht?
                        </h4>

                        <!-- Text -->
                        <p class="font-size-sm text-gray-800">
                            Niet gevonden wat je zocht? Probeer het nog eens, met minder filters. Of kom over een paar
                            dagen nog eens terug. Of nee,
                            wacht: schrijf je in, kunnen we jou benaderen!
                        </p>

                        <p class="font-size-sm text-gray-800">
                            We vragen je niet veel: naam, mailadres en telefoonnummer zijn voor nu genoeg. Wie weet tot
                            snel?
                        </p>

                        <!-- Heading -->
                        <a href="/inschrijven" class="font-weight-bold font-size-sm text-primary text-decoration-none">
                            Inschrijven
                            <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                    </div>
                </div>

                <!-- Card -->
                <div class="card shadow-light-lg">
                    <div class="card-body">
                        <!-- Heading -->
                        <h4>
                            Vragen
                        </h4>

                        <!-- Text -->
                        <p class="font-size-sm text-gray-800">
                            Liever eerst contact met ons omdat je vragen hebt over de vacature die je zag? Dat kan
                            natuurlijk, bel of mail ons
                            gerust. We reageren snel, beloofd!
                        </p>

                        <a href="/contact" class="font-weight-bold font-size-sm text-decoration-none text-primary">
                            Contact
                            <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>

<!-- FORM
      ================================================== -->
<section class="pt-8 pt-md-11 pb-8 pb-md-14">
    <div class="container">
        <div class="row" id="apply_form">
            <div class="col-12">
                <!-- Card -->
                <div class="card card-border border-primary shadow-light-lg">
                    <div class="card-body">
                        <!-- Form -->
                        <form action="{{ $vacancy->id }}/sollicitatie" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <label for="first_name">
                                            Voornaam
                                        </label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            placeholder="Voornaam" required />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <label for="last_name">
                                            Achternaam
                                        </label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            placeholder="Achternaam" required />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <label for="email">
                                            Email
                                        </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="hello@domain.com" required />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <label for="phone">
                                            Telefoonnummer
                                        </label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="06 12345678" required />
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="motivation"
                                                name="motivation" />
                                            <label class="custom-file-label" for="motivation">
                                                Motivatiebrief
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-5">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="cv" name="cv" />
                                            <label class="custom-file-label" for="cv">
                                                CV
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-5">
                                        <label for="message">
                                            Waarom wil je graag solliciteren voor deze functie?
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
                                    <button type="submit" class="btn btn-dark mb-6 mb-md-0 lift">Solliciteer nu <i
                                            class="fe fe-arrow-right ml-3"></i></button>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <p class="font-size-sm text-muted mb-0">
                                        De sollicitatie wordt veilig verstuurd en opgeslagen.
                                    </p>
                                </div>
                            </div>
                            <!-- / .row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>

<script>
    const shareFacebook = document.querySelector('.share-facebook');
    const shareLinkedin = document.querySelector('.share-linkedin');
    const shareWhatsapp = document.querySelector('.share-whatsapp');

    let postURL = encodeURI(document.location.href);
    let postTitle = encodeURI('Ik heb een vacature voor je! Bekijk hem nu!');

    shareFacebook.setAttribute(
        'href',
        `https://www.facebook.com/sharer.php?u=${postURL}`
    )
    shareLinkedin.setAttribute(
        'href',
        `https://www.linkedin.com/shareArticle?url=${postURL}&title=${postTitle}`
    )
    shareWhatsapp.setAttribute(
        'href',
        `https://api.whatsapp.com/send?text=${postTitle} ${postURL}`
    )
</script>
@endsection
