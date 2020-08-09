@component('mail::message')
# Introduction

We are sorry to see you go.

You can check out for another interesting event here.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
