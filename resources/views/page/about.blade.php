@extends('layout.base')

@section('title', "About Page")

@section('content')
    @if ($name == 'John')
        <p>ini merupakan konten about John</p>
    @else
    <p>ini merupakan konten bukan John</p>
    @endif

    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li><p>John {{$i}}</p></li>
        @endfor
    </ul>

@endsection