{{-- Using javaScript in php blade teplte --}}
<h1>test file</h1>
@php
$user ="Muhammad zubair"; 
$fruites = ["apple","orange","mango"];
@endphp

<script>

    // var data = @json($user);
    // console.log(data);
    // var fruitesarry = @json($fruites);
    // anothe method
    var fruitesarry = {{Js::from($fruites)}}
    fruitesarry.forEach(element => {
        console.log(element);
    });

</script>