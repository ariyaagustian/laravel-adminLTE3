@component('mail::message')

Thank you for registering!

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent

@component('mail::subcopy')
If you’re having trouble clicking the "Verify Email" button, copy and paste the URL below
into your web browser: {!! $url !!}
@endcomponent

Regards,<br>
{{ ('Administrator') }}



@endcomponent
