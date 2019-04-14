{{--
    Here the service provider records the affected allergens data,
    which are later used for the allergy passport of the person concerned.
 --}}

<form method="POST" action="{{action('AffectedItemsController@store')}}">

{{csrf_field()}}

    <tr class="align-top">
        @php $fieldName = 'name' @endphp
        <td class="{{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
        </td>

        @php $fieldName = 'symptoms' @endphp
        <td class="{{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
        </td>

        @php $fieldName = 'verification' @endphp
        <td class="{{$fieldName}}">
            @if ($type != "incompatibility") 
            <input type="date" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="{{old($fieldName, $item[$fieldName])}}" />
            @else
            - 
            @endif
        </td>

        @php
        $fieldName = 'verified_by' ;
        $oldValue = old($fieldName, $item[$fieldName]);
        @endphp
        <td class="{{$fieldName}}">
            @if ($type != "incompatibility") 
            <select class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">

                <option value="">Bitte wählen ...</option>
                @foreach ($verificationBy as $value)
                <option value="{{$value}}" {{($oldValue == $value) ? 'selected' : ''}}>{{$value}}</option>
                @endforeach
            </select>
            @else
            -
            @endif
        </td>

        @php $fieldName = 'suspicion' @endphp
        <td class="{{$fieldName}}">
            <div class="form-check">
                <input type="checkbox" class="form-check-input @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="1" {{old($fieldName, $item[$fieldName]) ? 'checked' : ''}} />
            </div>
        </td>

        @php $fieldName = 'medication' @endphp
        <td class="{{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
        </td>

        @php $fieldName = 'emergency_medication' @endphp
        <td class="{{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
        </td>

        @php $fieldName = 'type' @endphp
        <td class="{{$fieldName}}">
            <input type="hidden" name="{{$fieldName}}" value="{{old($fieldName, $item[$fieldName])}}" />
            @php $fieldName = 'id' @endphp
            <input type="hidden" name="{{$fieldName}}" value="{{old($fieldName, $item[$fieldName])}}" />

            <button type="submit" class="btn btn-default text-primary" name="submit">
                <i class="fa fa-btn fa-save"></i>
                Speichern
            </button>

            <button type="submit" class="btn btn-default text-danger" name="delete">
                <i class="fa fa-btn fa-trash"></i>
                Löschen
            </button>
        </td>
    </tr>

</form>