@component('mail::message')
# Nieuwe reactie op vacature: {{ $VacancyReply->Vacancy->title}}

<p><b>Sollicitant: </b>{{ $VacancyReply->first_name }} {{ $VacancyReply->last_name }}</p>
<p><b>Email: </b>{{ $VacancyReply->email }}</p>
<p><b>Telefoonnummer: </b>{{ $VacancyReply->phone }}</p>

<p><b>Bericht:</b></p>

<p>{!! $VacancyReply->message !!}</p>


@component('mail::button', ['url' =>
'www.exchange-workforce.test/nova/resources/vacancy-replies/'.$VacancyReply->id.'/'])
Bekijk de sollicitatie
@endcomponent

@component('mail::button', ['url' =>
'www.exchange-workforce.test/nova/resources/vacancies/'.$VacancyReply->vacancy->id.'/'])
Bekijk de vacature
@endcomponent

@endcomponent
