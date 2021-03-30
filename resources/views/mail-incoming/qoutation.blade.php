@component('mail::message')
# Nieuwe offerte aanvraag: {{ $Qoutation->name }} van {{ $Qoutation->company }}

<p><b>Naam: </b>{{ $Qoutation->name }}</p>
<p><b>Bedrijf: </b>{{ $Qoutation->company }}</p>
<p><b>Email: </b>{{ $Qoutation->email }}</p>
<p><b>Telefoonnummer: </b>{{ $Qoutation->phone }}</p>

<p><b>Bericht:</b></p>

<p>{!! $Qoutation->message !!}</p>


@component('mail::button', ['url' =>
'www.exchange-workforce.test/nova/resources/qoutations/'.$Qoutation->id.'/'])
Bekijk de offerte aanvraag
@endcomponent

@endcomponent
