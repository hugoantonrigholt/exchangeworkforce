@component('mail::message')
# Nieuwe bericht van: {{ $Contact->first_name }} {{ $Contact->last_name }}

<p><b>Naam: </b>{{ $Contact->first_name }} {{ $Contact->last_name }}</p>
<p><b>Email: </b>{{ $Contact->email }}</p>
<p><b>Telefoonnummer: </b>{{ $Contact->phone }}</p>

<p><b>Bericht:</b></p>

<p>{!! $Contact->message !!}</p>


@component('mail::button', ['url' =>
'www.exchange-workforce.test/nova/resources/contacts/'.$Contact->id.'/'])
Bekijk het bericht
@endcomponent

@endcomponent
