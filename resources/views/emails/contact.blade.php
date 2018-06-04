@component('mail::message')
    # You have mail!

    Message from: {{ $name }}
    User Email: {{ $email }}

@component('mail::panel')
    {{ $body }}
@endcomponent

@endcomponent