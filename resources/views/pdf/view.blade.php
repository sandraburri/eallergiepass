@php
    $cell_style = "height:250px;vertical-align:top";

@endphp

<table style="border:1px solid red;height:500px;width:100%">
    <tr>
        <td style="{{$cell_style}}">1</td>
        <td style="{{$cell_style}}">
       
            {{$affected->ahv_number}}
            {{$address->first_name}}
        </td>
        <td style="{{$cell_style}}">3</td>
    </tr>
    <tr>
        <td style="{{$cell_style}}">4</td>
        <td style="{{$cell_style}}">5</td>
        <td style="{{$cell_style}}">6</td>
    </tr>
</table>