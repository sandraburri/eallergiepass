{{--
    Here the care provider records the affected allergens data,
    which are later used for the allergy passport of the affected person.
 --}}

 <form method="POST" action="{{action('AffectedItemsController@store')}}">

    {{csrf_field()}}

    <div class="items-table-row">

        @php $fieldName = 'name' @endphp
        <div class="items-table-col {{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
            <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
        </div>

        @php $fieldName = 'symptoms' @endphp
        <div class="items-table-col {{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
            <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
        </div>

        @php $fieldName = 'initialreaction' @endphp
        <div class="items-table-col {{$fieldName}}">
            <input type="date" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}"
                value="{{optional(old($fieldName, $item[$fieldName]))->format('Y-m-d')}}" />
            <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
        </div>

        @php
        $fieldName = 'verified_by' ;
        $oldValue = old($fieldName, $item[$fieldName]);
        @endphp
        <div class="items-table-col {{$fieldName}}">
            <select class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">
                <option value="">Bitte wählen ...</option>
                @foreach ($verificationBy as $value)
                <option value="{{$value}}" {{($oldValue == $value) ? 'selected' : ''}}>{{$value}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
        </div>

        @php $fieldName = 'verification' @endphp
        <div class="items-table-col {{$fieldName}}">
            <input type="date" class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}"
                value="{{optional(old($fieldName, $item[$fieldName]))->format('Y-m-d')}}" />
            <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
        </div>

        @php $fieldName = 'suspicion' @endphp
        <div class="items-table-col {{$fieldName}}">
            <div class="form-check">
                <input type="checkbox" class="form-check-input @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}" value="1" {{old($fieldName, $item[$fieldName]) ? 'checked' : ''}} />
                <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
            </div>
        </div>

        @php $fieldName = 'emergency_medication' @endphp
        <div class="items-table-col {{$fieldName}}">
            <textarea class="form-control @if($errors->has($fieldName)) is-invalid @endif" name="{{$fieldName}}">{{old($fieldName, $item[$fieldName])}}</textarea>
            <div class="invalid-feedback">{{$errors->first($fieldName)}}</div>
        </div>

        <div class="items-table-col actions">
            <input type="hidden" name="id" value="{{$item->id}}" />

            <button type="submit" class="btn btn-default text-primary submit">
                <i class="fa fa-btn fa-save"></i>
                Speichern
            </button>

            <a
                href="{{action("AffectedItemsController@delete", ["id" => $item->id])}}"
                class="btn btn-default text-danger"
            >
                <i class="fa fa-btn fa-trash"></i>
                Löschen
            </a>
        </div>

    </div>
</form>
