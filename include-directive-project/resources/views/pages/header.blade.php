<h1>This is header view</h1>

{{-- @foreach ($names as $key => $n)
        <p>{{ $key }} - {{ $n }}</p>
@endforeach --}}

@forelse ($names as $key => $n)
   <p>{{$key}} - {{$n}}</p> 
@empty
    <p>NNo data found...</p>
@endforelse