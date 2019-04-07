{{--
    Here the service provider records the affected allergens data,
    which are later used for the allergy passport of the person concerned.
 --}}

<tr class="align-top">
    <td>
        @php $fieldName = 'name' @endphp
        <textarea
            class="form-control @if($errors->has($fieldName)) is-invalid @endif"
            name="{{$fieldName}}"
        >{{old($fieldName, $item[$fieldName])}}</textarea>
        </td>
    <td>
        @php $fieldName = 'symptoms' @endphp
        <textarea
            class="form-control @if($errors->has($fieldName)) is-invalid @endif"
            name="{{$fieldName}}"
        >{{old($fieldName, $item[$fieldName])}}</textarea>
    </td>
    <td>
        @php $fieldName = 'verification' @endphp
        <input
            type="date"
            class="form-control @if($errors->has($fieldName)) is-invalid @endif"
            name="{{$fieldName}}"
            value="{{old($fieldName, $item[$fieldName])}}"
        />
    </td>
    <td>
        @php $fieldName = 'suspicion' @endphp
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input @if($errors->has($fieldName)) is-invalid @endif"
                name="{{$fieldName}}"
                value="1"
                {{old($fieldName, $item[$fieldName]) ? checked : ''}}
            />
        </div>
    </td>
    <td>
        @php $fieldName = 'type' @endphp
        <input
            type="hidden"
            name="{{$fieldName}}"
            value="{{old($fieldName, $item[$fieldName])}}"
        />
        @php $fieldName = 'id' @endphp
        <input
            type="hidden"
            name="{{$fieldName}}"
            value="{{old($fieldName, $item[$fieldName])}}"
        />

        <button type="submit" class="btn btn-default">
            <i class="fa fa-btn fa-plus"></i>Speichern
        </button>


    </td>
    <td>
            <textarea>{{$item}}</textarea>
    </td>
</tr>
