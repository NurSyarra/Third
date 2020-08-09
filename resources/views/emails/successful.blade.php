@component('mail::message')

Great news, you have successfully register for the event!

@component('mail::button', ['url' => $url])
Go to dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
