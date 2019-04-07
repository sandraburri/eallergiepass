@extends('layouts.app')

@section('content')
<div class="container">

    @include('includes.care-provider-form', [
        "careProvider" => $careProvider,
        "address" => $address,
        "errors" => $errors
    ])

    @include('includes.search-affected-form', [
    ])


    {{--
    <div class="row justify-content-center">
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
