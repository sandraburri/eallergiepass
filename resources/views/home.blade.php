@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @include('includes.care-provider-form', [
        "careProvider" => $careProvider,
        "careProviderTitle" => $careProviderTitle,
        "address" => $address,
        "errors" => $errors
    ])

    @include('includes.search-affected-form', [
    ])

    {{--
    <div class="col">
        <div class="col-md-12">

        <ul>
        @foreach ($affected as $a)
            <li>
            <a href="{{action('AffectedController@view', $a->id)}}">
            {{$a->user->name}}
            </a>
            </li>
        @endforeach
        </ul>

        </div>
    </div>
    --}}

</div>

@endsection