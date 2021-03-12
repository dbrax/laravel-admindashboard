@component('mail::message')

Hello

{{ _('Our team at ') }} {{config('app_name')}} {{ _(' we would like to welcome you to our community. Please feel at home ') }}

## Our Contacts

Mobile Number: {{config('dashboard.app_contact_mobile_number')}},

Email : {{config('dashboard.app_contact_email')}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
