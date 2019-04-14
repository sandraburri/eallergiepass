@php
$cell_style = "height:250px;vertical-align:top";
@endphp

<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <style type="text/css">
        * {
            font-family: "Open Sans";
            font-size: 12px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <table style="border:1px solid red;height:500px;width:100%">
        <tr>
            <td style="{{$cell_style}}">
                {{$careprovider->name}}<br />
                {{$careprovider->title}}
                {{$careprovider->address->first_name}}
                {{$careprovider->address->last_name}}<br />
                {{$careprovider->discipline}}<br />
                {{$careprovider->address->street}}
                {{$careprovider->address->street_number}}<br />
                {{$careprovider->address->zip}}
                {{$careprovider->address->city}}<br />
                {{$careprovider->address->phone_number}} <br />
            </td>

            <td style="{{$cell_style}}">
                {{$affected->ahv_number}}
                {{$affected->address->first_name}}
            </td>


            <td style="{{$cell_style}}">3</td>
        </tr>
        <tr>
            <td style="{{$cell_style}}">4</td>
            <td style="{{$cell_style}}">5</td>
            <td style="{{$cell_style}}">6</td>
        </tr>
    </table>

</body>

</html>