@component('mail::message')
# Nieuwe inschrijving: {{ $Signup->first_name }} {{ $Signup->last_name }}

<p><b>Inschrijving: </b>{{ $Signup->first_name }} {{ $Signup->last_name }}</p>
<p><b>Email: </b>{{ $Signup->email }}</p>
<p><b>Telefoonnummer: </b>{{ $Signup->phone }}</p>

<p><b>Bericht:</b></p>

<p>{!! $Signup->message !!}</p>


@component('mail::button', ['url' =>
'www.exchange-workforce.test/nova/resources/subscriptions/'.$Signup->id.'/'])
Bekijk de inschrijving
@endcomponent

@endcomponent
