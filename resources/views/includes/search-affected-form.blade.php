{{--
    This is for the service provider, who enters the AHV number of the person concerned here.
    If the AHV number has already been entered in the DB, the service provider is taken to the
    already completed entry view and can continue working on it there. If the AHV number does
    not yet exist, the service provider arrives at an empty view and must first complete the
    patient data there.
--}}

<div class="col">

    <form method="GET" action="{{action('AffectedController@search')}}">

        <div class="form-row">
            <h2>Patient suchen</h2>
        </div>

        @php
            $ahvNumber = old('ahv_number');
            if (empty($ahvNumber)) {
                $ahvNumber = "756.";
            }
        @endphp

        @if ($errors->any())
            @if (AhvNumber::isValid($ahvNumber))
            <div class="alert alert-info">
                Patient nicht gefunden. Wollen Sie einen neuen Patienten<br/>
                anlegen mit AHV-Nummer <code>{{$ahvNumber}}</code>?
                <br/>
                <br/>
                <a href="{{action('AffectedController@create', ["ahv_number" => $ahvNumber])}}" class="btn btn-primary">
                    Neuer Patient anlegen
                </a>
            </div>
            @endif
        @endif

        <div class="form-row">
            @php $fieldName = 'ahv_number' @endphp
            <div class="form-group col-md-12">
                <label for="{{$fieldName}}">{{__('AHV-Nummer')}}</label>
                <input
                    type="text"
                    class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                    name="{{$fieldName}}"
                    value="{{$ahvNumber}}"
                    placeholder="AHV-Nummer im Format 000.0000.0000.00"
                />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-search"></i>
            Suchen
        </button>
    </form>

</div>