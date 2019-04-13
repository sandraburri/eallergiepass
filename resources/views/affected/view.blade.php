@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col">
        @include('includes.affected-form', [
        "affected" => $affected,
        "address" => $address,
        "errors" => $errors
        ])
    </div>

    <div class="col mt-4">
        <a href="{{ action("AffectedController@items", ["id" => $affected->id]) }}"></a>
    </div>

</div>


@endsection