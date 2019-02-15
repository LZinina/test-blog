@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent


@component('mail::panel', ['url' => 'https://laracasts.com'])
Lorem ipsum dolar.
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
