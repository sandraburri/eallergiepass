{{--
    This is for the care provider, after the first login he must enter his data,
    so that these can be shown later on the allergy passport of the affected person.
    This is done once after the first login and is no longer visible!
--}}

<div class="col">

    <form method="GET" action="{{action('AffectedController@search')}}">

        <div class="form-row">
            <h2>Betroffener suchen</h2>
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
                Betroffener nicht gefunden. Wollen Sie einen neuen Betroffenen<br/>
                anlegen mit AHV-Nummer <code>{{$ahvNumber}}</code>?
                <br/>
                <a href="{{action('AffectedController@create', ["ahv_number" => $ahvNumber])}}" class="btn btn-primary">
                    Neuer Betroffener anlegen.
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
