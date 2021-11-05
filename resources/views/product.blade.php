@extends('layout.master')

@section('title','product')
@section('content')
    <h1>This is {{$product}}</h1>
    @foreach ($product_item as $item)

        @if ($item == "Rice")
            <h2>{{$item}}</h2>
        @endif

    @endforeach
@endsection
