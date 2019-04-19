@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h2>Patient &laquo;{{$address->first_name}} {{$address->last_name}}&raquo; bearbeiten</h2>
            <a
                href="{{action("PdfController@index", ["id" => $affected->id])}}"
                class="btn btn-primary"
                >
                <i class="fa fa-btn fa-print"></i>
                Allergiepass drucken
            </a>
        </div>
        <div class="col-md-4 text-right pr-4">
            {!! $qrCode !!}
        </div>
    </div>

    <div class="col mt-4">

        <table class="table">
            @foreach ($affectedItems as $type => $items)
            <thead>
                <tr>
                    <td colspan="8">
                        <h2>{{__($type)}}</h2>

                        <a href="{{action("AffectedItemsController@create", ["type" => $type, "affected_id" => $affected->id])}}">
                            <i class="fa fa-btn fa-plus"></i>
                            Hinzufügen
                        </a>
                    </td>
                </tr>

            </thead>

            @if ($items)

            <thead>
                <tr>
                    <th>{{$type == 'allergy' ? "Allergen" : "Typ"}}</th>
                    <th>Symptome</th>
                    <th>Nachweis am</th>
                    <th class="">Nachweis durch</th>
                    <th>Verdacht auf</th>
                    <th>Medikation</th>
                    <th>Notfallmedikation</th>
                </tr>
            </thead>

            @foreach ($items as $item)
            @include('includes.affectedItems-form', [
                "type" => $type,
                "item" => $item,
                "verificationBy" => $verificationBy
            ])
            @endforeach
            @endif
            @endforeach

        </table>

    </div>

</div>

@endsection
