@component('mail::message')
# Thank You for Signing Up!

I appreciate your interest in my website. 

@component('mail::button', ['url' => 'http://sextuple-u.biz'])
Check out My Portfolio
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
