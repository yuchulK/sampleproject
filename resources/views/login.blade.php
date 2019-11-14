@extends('template')
@section('section')
    <p>てすとー</p>
    {{$blogs[0]-> title}}
    {{$blogs[0]}}
    {{-- @foreach($blogs as $blog)
    {{ $blog -> id }}：{{ $blog -> title }}：{{ $blog -> text }}
    @endforeach --}}
    
@endsection