<h1> hi this is Modue 2 view program</h1>

{{-- Blade template start here --}}
{{-- 1) Agar my kuch b echo krwana chata ho php k andr to my isko asy liku ga --}}
{{5+2}} 
<br><br>      
{{-- 2) Agr my koi message print krwant chata ho blade my php ki help sy --}}
{{"hello word"}}

{{-- 3) Agr hum blade temple my php k andr html ka code likhna chaty hy  --}}
<br><br>      
{!!"<h1> yahoo world</h1>"!!}

{!!"<script> alert('yahoo yahoo')</script>"!!}

<br><br>
{{-- 4)varibale ko bna kr use krny ka tariqa --}}
@php
$user ="Muhammad zubair sultan";
$myarr =["Muhammad zubair","Muhammad sultan","Muhammad umar"]
@endphp
{{$user}};

{{-- 5 Ager humny use krni ho array in foreach loop my  --}}
<ul>
{{-- agr my loop varibale use krna chata ho jo k foreach loop k stah use hoty hy to wo kesy hum use kr sakty hy --}}
@foreach ($myarr as $nam )
    <li>{{$loop->index}}-{{$nam}}</li>
@endforeach

</ul>

{{-- 6) kisi b chiz ko as its print krny k liye @use krty hy  --}}


@{{user}} <br><br>
{{"Please input the value"}}<br>

<a href="/part2">Blade Templete advance topic</a>

