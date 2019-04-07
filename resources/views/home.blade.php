@extends('layouts.app')

@section('content')
<div class="container">


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


@endsection 
