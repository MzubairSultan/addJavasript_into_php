<h1>this is a header</h1>


{{-- @foreach ($fruitnames as $n )
<p>{{$n}}</p>
    
@endforeach --}}
{{-- Ager hmari array empty ho to  --}}

@forelse ($fruitnames as $n)
<p>{{$n}}</p>
@empty
    <p>No value found</p>
@endforelse