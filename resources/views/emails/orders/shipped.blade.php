@component('mail::message')
# Order Shipped

Order has been shipped.
Your total price {{$order->total}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
