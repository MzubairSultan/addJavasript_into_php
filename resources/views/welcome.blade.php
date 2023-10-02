{{-- <h3>important topic @include <br>@section <br>@extend <br>@yield</h3> --}}

{{-- ager hum chaty hy aik view ko dosry view k ander include krna to is ky liye hum @include function ka use kry gy  --}}

{{-- Ager hum chaty hy single value ki bjye hum array lay  --}}
@php
// $fruites = ["Banana","Apple","Orange","Stobery"];  
$fruites =[]; 
@endphp
{{-- @include('Pages.Header',['fruitnames' => $fruites]) --}}

{{-- Conditional base inclue file --}}

{{-- @includeWhen(true,'Pages.Header',['fruitnames' => $fruites]) --}}
{{-- ager iski value true hogi to ya include nahi kry ga/ false hogi to kry ga --}}
@includeUnless(false,'Pages.Header',['fruitnames' => $fruites])

<h1>Home view </h1>

@include('Pages.footer')







