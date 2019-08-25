{{--
    This is for the care provider, after the first login he must enter his data,
    so that these can be shown later on the allergy passport of the affected person.
    This is done once after the first login and is no longer visible!
--}}

<div class="col">

    @if ($careProvider->id && $address->id)
    @else

    <form method="POST" action="{{action('CareProviderController@store')}}">

        <div class="form-row">
            <h2>Praxisdaten erfassen</h2>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <b>Bitte korrigieren Sie die Fehler im Formular</b>
        </div>
        @endif

        {{csrf_field()}}

        <div class="form-row">
            @php $fieldName = 'name' @endphp
            <div class="form-group col-md-12">
                <label for="{{$fieldName}}">Praxis</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Name der Praxis" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <div class="form-row">
            @php
            $fieldName = 'title';
            $oldValue = old($fieldName);
            @endphp
            <div class="form-group col-md-2">
                <label for="{{$fieldName}}">Titel</label>
                <select class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">
                    <option value="">Bitte wählen ...</option>
                    @foreach ($careProviderTitle as $value)
                    <option value="{{$value}}" {{($oldValue == $value) ? 'selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>

            @php $fieldName = 'first_name' @endphp
            <div class="form-group col-md-5">
                <label for="{{$fieldName}}">Vorname</label>
                <input type="text" placeholder="Vorname" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Vorname" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>

            @php $fieldName = 'last_name' @endphp
            <div class="form-group col-md-5">
                <label for="{{$fieldName}}">Name</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Name" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <div class="form-row">
            @php $fieldName = 'discipline' @endphp
            <div class="form-group col-md-12">
                <label for="{{$fieldName}}">Fachrichtung</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Fachrichtung" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <div class="form-row">
            @php $fieldName = 'street' @endphp
            <div class="form-group col-md-6">
                <label for="{{$fieldName}}">Strasse</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Strasse" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>

            @php $fieldName = 'street_number' @endphp
            <div class="form-group col-md-6">
                <label for="{{$fieldName}}">Nummer</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Nummer" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <div class="form-row">

            @php $fieldName = 'zip' @endphp
            <div class="form-group col-md-6">
                <label for="{{$fieldName}}">PLZ</label>
                <input type="number" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="PLZ" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>

            @php $fieldName = 'city' @endphp
            <div class="form-group col-md-6">
                <label for="{{$fieldName}}">Ort</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Ort" />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <div class="form-row">
            @php $fieldName = 'phone_number' @endphp
            <div class="form-group col-md-12">
                <label for="{{$fieldName}}">Telefon</label>
                <input type="text" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName)}}" placeholder="Telefon" data-phone-number />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-save"></i>
            Speichern
        </button>
    </form>

    @endif

</div>