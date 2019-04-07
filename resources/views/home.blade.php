@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (!$careProvider || !$careProvider->id) 
            @include('includes.care-provider-form')      
       
        @endif

        @if ($address && $address->id) 
        @include('includes.affected-form')
            
        @endif

        @if ($address && $address->id) 
        @include('includes.affectedItems-form')
            
        @endif
        
    </div>

</div>


@endsection 
