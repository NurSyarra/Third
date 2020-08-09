
@component('mail::message')

Apply for the event now before it's too late! <br><br>
<center><img  src="<?php echo url('/storage/poster_images/' . $poster_image) ?>" style="height: 50%; width: 50% "/></center> <br><br>
Details of the event: <br> 
<br>
Event name: {{ $EventName }} <br>
Organiser: {{ $Organizer }} <br>
Date of the event: {{$EventDate}}<br>

@component('mail::button', ['url' => route('posts.show', ['id'=>$id]), 'color' => 'primary'])
Click here to apply
@endcomponent

Regards,<br>
Committee Manager

@endcomponent
