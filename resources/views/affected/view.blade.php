@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="col">
    {{--
        Here the care provider records the affected data,
        which are later used for the allergy passport of the affected person.
    --}}

    <form method="POST" action="{{action('AffectedController@store')}}">

        <div class="form-row">
            @if ($address && $address->id)
                <h2>Patient &laquo;{{$address->first_name}} {{$address->last_name}}&raquo; bearbeiten</h2>
            @else
                <h2>Patient erfassen</h2>
            @endif
            </div>

            {{csrf_field()}}

            @if ($errors->any())
            <div class="alert alert-danger">
                <b>Bitte korrigieren Sie die Fehler im Formular</b>
            </div>
            @endif
            <div class="form-row">

                @php $fieldName = 'first_name' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">Vorname</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="Vorname"
                        />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>

                @php $fieldName = 'last_name' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">Name</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="Name"
                        />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>
            </div>

            <div class="form-row">

                @php $fieldName = 'street' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">Strasse</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="Strasse"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>

                @php $fieldName = 'street_number' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">Nummer</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="Nummer"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>
            </div>

            <div class="form-row">

                @php $fieldName = 'zip' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">PLZ</label>
                    <input
                        type="number"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="PLZ"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>

                @php $fieldName = 'city' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">Ort</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="Ort"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>
            </div>

            <div class="form-row">

                @php $fieldName = 'phone_number' @endphp
                <div class="form-group col-md-12">
                    <label for="{{$fieldName}}">Telefon</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $address[$fieldName])}}"
                        placeholder="Telefon"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>
            </div>

            <div class="form-row">

                @php $fieldName = 'ahv_number' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">AHV-Nummer</label>
                    <input
                        type="text"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{old($fieldName, $affected[$fieldName])}}"
                        placeholder="AHV-Nummer"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>

                @php $fieldName = 'birth_date' @endphp
                <div class="form-group col-md-6">
                    <label for="{{$fieldName}}">Geburtsdatum</label>
                    <input
                        type="date"
                        class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                        name="{{$fieldName}}"
                        value="{{optional(old($fieldName, $affected[$fieldName]))->format('Y-m-d')}}"
                        placeholder="Geburtsdatum"
                    />
                    <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
                </div>
            </div>

            <input type="hidden" name="affected_id" value="{{$affected ? $affected->id : ''}}" />
            <input type="hidden" name="address_id" value="{{$address ? $address->id : ''}}" />

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-save"></i>
                Speichern
            </button>

        </form>

    </div>

    <div class="col mt-4">
        <a href="{{ action("AffectedController@items", ["id" => $affected->id]) }}"></a>
    </div>

</div>


@endsection
