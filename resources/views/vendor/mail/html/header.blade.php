@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://dupak.babelprov.go.id/assets/images/users/logo_prov.png" class="logo" alt="Bangka Belitung">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
