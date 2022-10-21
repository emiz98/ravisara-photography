@component('mail::message')

From: {{$details['email']}}, <br>
Phone: {{$details['phone']}},

<p>{{$details['message']}}</p>

Thanks,<br>
{{$details['name']}}

<br>
<div style="font-weight: bolder">Support Center</div>
<div style="color: rgb(139, 139, 139)">support@ravisarajayamanna.com</div>
</div>
@endcomponent
