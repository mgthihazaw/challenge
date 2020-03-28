@component('mail::message')
# {{ $subject }}

{{ $content }}


<h4>Details of your entry form :</h4>
<table>
 @foreach ($data as $key => $value)
    <tr>
        <td>  {{ $key }}    </td>
        <td> :    {{ $value }}  </td>
    </tr>
@endforeach
</table>




@endcomponent
