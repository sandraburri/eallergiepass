@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('includes.affected-form', [
            "affected" => $affected,
            "address" => $address,
            "errors" => $errors
        ])
    </div>

    <div class="row justify-content-center">

        <table>

        @foreach ($affectedItems as $type => $items)

            <tr>
                <td>
                    <h2>{{__($type)}}</h2>
                </td>
            </tr>

            @if ($items)
                @foreach ($items as $item)
                    @include('includes.affectedItems-form', [
                        "item" => $item
                    ])
                @endforeach
            @endif
        @endforeach

        </table>

    </div>

</div>


@endsection
