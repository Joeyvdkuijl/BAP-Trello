@component('mail::message')
<strong>Name: </strong>{{$data['fullname']}}
<br>
<strong>Email: </strong>{{$data['email']}}

<strong>Message:</strong>

{{$data['comment']}}
@endcomponent
