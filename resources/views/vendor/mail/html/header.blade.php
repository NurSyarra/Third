<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('/image/cm_logo.png')}}" class="logo" style="width: 300px">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
