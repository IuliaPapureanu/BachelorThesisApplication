@component('mail::message')
# {{$subject}}


{!! nl2br(e($contents)) !!}
{{--The body of your message.--}}
{{--{{$contents}}--}}
{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
@endcomponent
