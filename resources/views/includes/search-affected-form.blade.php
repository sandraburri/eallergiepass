{{--
    This is for the care provider, after the first login he must enter his data,
    so that these can be shown later on the allergy passport of the affected person.
    This is done once after the first login and is no longer visible!
--}}

<div class="row justify-content-center">

    <form method="GET" action="{{action('AffectedController@search')}}">

        <div class="form-row">
            @php $fieldName = 'ahv_number' @endphp
            <div class="form-group col-md-12">
                <label for="{{$fieldName}}">{{__('AHV-Nummer')}}</label>
                <input
                    type="text"
                    class="form-control @if($errors->has($fieldName)) is-invalid @endif"
                    name="{{$fieldName}}"
                    value="{{old($fieldName)}}"
                    placeholder="AHV-Nr."
                />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        <button type="submit" class="btn btn-default">
            <i class="fa fa-btn fa-search"></i>Suchen
        </button>
    </form>


</div>
