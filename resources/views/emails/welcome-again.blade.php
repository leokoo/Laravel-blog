@component('mail::message')
# Introduction

Thanks so much for registering!

- one
- two
- three

@component('mail::button', ['url' => 'https://www.wpstarters.com'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
    Some brilliant quote to go here.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
