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

    <div class="items-table">
        @foreach ($affectedItems as $type => $items)
        <div class="items-table-row">
            <div class="items-table-col">
                <h5>{{__($type)}}</h5>
                <a href="{{action("AffectedItemsController@create", ["type" => $type, "affected_id" => $affected->id])}}">
                    <i class="fa fa-btn fa-plus"></i>
                    Hinzufügen
                </a>
            </div>
        </div>

        @if ($items)

        <div class="items-table-row header">
            <div class="items-table-col type">{{$type == 'allergy' ? "Allergen" : "Typ"}}</div>
            <div class="items-table-col symptoms">Symptome</div>
            <div class="items-table-col verification">Nachweis am</div>
            <div class="items-table-col verified_by">Nachweis durch</div>
            <div class="items-table-col suspicion">Verdacht auf</div>
            <div class="items-table-col medication">Medikation</div>
            <div class="items-table-col emergency_medication">Notfallmedikation</div>
            <div class="items-table-col actions"></div>
        </div>

        @foreach ($items as $item)
        @include('includes.affectedItems-form', [
            "type" => $type,
            "item" => $item,
            "verificationBy" => $verificationBy
        ])
        @endforeach
        @endif
        @endforeach

    </div>


</div>

@endsection
