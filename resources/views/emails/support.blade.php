@component('mail::message')

Hi {{$details}},

<p style="font-weight:bold">Thank you for reaching out Ravisara Photography!</p>

<p>
We received your email and will get back to you with a response as soon as possible.<br>
If you have any additional information that you think will help us to assist you,
Please feel free to reply to this email.
</p>

Thanks,<br>
Ravisara Jayamanna


<?php $SITEURL = env('APP_SITEURL'); ?>
@component('mail::button', ['url' => $SITEURL])
Visit Site
@endcomponent


<div style="font-weight: bolder">Support Center</div>
<div style="color: rgb(139, 139, 139)">support@ravisarajayamanna.com</div>
</div>
@endcomponent
