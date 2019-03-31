@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (!$careProvider || !$careProvider->id) 
            @include('includes.care-provider-form')      
        @else
            {{$careProvider->title}} <br/>
            {{$careProvider->discipline}} <br/>

        @endif

        @if ($address && $address->id) 
        {{$address->lastName}} <br/>
            {{$address->firstName}} <br/>
            
        @endif
        
    </div>
</div>


@endsection 
