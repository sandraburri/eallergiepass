@php
$table_width = 980;
$table_height = 100;
$table_border = "";

$col_padding = "padding: 3px 0 0 0";
$col1 = $table_width / 4;
$col2 = $table_width / 4;
$col3 = $table_width / 2;
$inner_width = $table_width /12;

$align_top = "vertical-align:top";

$border_right = "";
$inner_style = "$align_top; width: " . $inner_width ."px; $border_right; padding: 3px";

@endphp

<html>

<head>
    <style type="text/css">
        body,
        * {
            font-family: DejaVu Sans;
            font-size: 12px;
            box-sizing: border-box;
        }

        td {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <div style="border:1px solid #000;padding: 5px; background: #f5f5f5">
        <table style="height:{{$table_height}}px;width:{{$table_width}}px;{{$table_border}}; border-collapse: collapse;">
            <tr>
                <td style="{{$align_top}}; width: {{$col1}}px; {{$border_right}}; {{$col_padding}}">
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

                <td style="{{$align_top}}; width: {{$col2}}px; {{$border_right}}; {{$col_padding}};">
                    <div style="margin-top: 5px; background-color:#8DCB1F; padding: 5px; display: inline-block">
                        <img class="logo" style="width:200px" src="data:image/png;base64, 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" alt="" />
                    </div>
                    <div style="margin-top: 15px; margin-bottom: 10px">
                        {{$affected->address->first_name}}
                        {{$affected->address->last_name}}<br />
                        {{$affected->address->street}}
                        {{$affected->address->street_number}}<br />
                        {{$affected->address->zip}}
                        {{$affected->address->city}}<br />
                        {{$affected->birth_date->format('d.m.Y')}}<br />
                        {{$affected->ahv_number}}
                    </div>
                </td>

                <td style="{{$align_top}}; width: {{$col3}}px" rowspan="2">
                    <table style="width:100%;margin:0;height:100px;text-align:justify;border-collapse:collapse">
                        <tr>
                            <td style="{{$inner_style}}">&nbsp;</td>
                            <td style="{{$inner_style}}; font-weight: bold;">Symptome</td>
                            <td style="{{$inner_style}}; font-weight: bold;">Nachweis<br /> am</td>
                            <td style="{{$inner_style}}; font-weight: bold;">Verdacht<br />auf</td>
                            <td style="{{$inner_style}}; font-weight: bold;">Medikation</td>
                            <td style="{{$inner_style}}; font-weight: bold;">Notfallmedi-<br />kation</td>
                        </tr>

                        @foreach ($affectedItems as $type => $items)
                            @if ($items)
                                <tr>
                                    <td colspan="6" style="{{$inner_style}}; font-size: 9px; font-weight: bold;">
                                        {{__($type)}}
                                    </td>
                                </tr>

                                @foreach ($items as $item)

                                <tr>
                                    <td style="{{$inner_style}}; font-size: 9px; font-weight: bold;">
                                        {{$item->name}}</td>
                                    <td style="{{$inner_style}}; font-size: 9px;">
                                        {{$item->symptoms}}</td>
                                    <td style="{{$inner_style}}; font-size: 9px;">
                                        {{optional($item->verification)->format('d.m.Y')}}</td>
                                    <td style="{{$inner_style}}; font-size: 9px;">
                                        {{$item->suspicion ? "Ja" : ""}}</td>
                                    <td style="{{$inner_style}}; font-size: 9px;">
                                        {{$item->medication}}</td>
                                    <td style="{{$inner_style}}; font-size: 9px; color: red;">
                                        {{$item->emergency_medication}}</td>
                                </tr>

                                @endforeach
                            @endif
                        @endforeach
                    </table>
                </td>

                </td>
            <tr>
                <td style="{{$col_padding}}">
                    <div style="margin: 0 0 10px 0">
                        {!! $qrCode !!}
                    </div>
                    <div style="font-size: 10px; width: 160px">
                        Beschreibung Vorgehen via Browser oder QR-Code scannen....
                    </div>
                </td>

                <td style="{{$col_padding}}; padding-right: 20px; vertical-align:top">
                    Beim Inhaber dieses Allergiepasses
                    besteht eine Überepfindlichkeit auf
                    die aufgeführten Allergene oder
                    Medikamente. Dieses Dokument sollte
                    deshalb immer mitgeführt und bei
                    jedem Arzt, Zahnarzt und Apothekenbesuch vorgelegt werden.
                </td>
            <tr>
        </table>

    </div>
</body>

</html>
