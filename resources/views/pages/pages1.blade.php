@extends('template')
@section ('title', '¿Dónde ir?')
@section('class','dondeir')
@section('lema')
Atractivos dentro de la ciudad
@endsection
@section ('content')
@if(sizeof($atractivos) > 0)
    @foreach($atractivos as $atractivo)
    <div class="col-md-3 d-flex">
        <div class="item card">
            <img class ="box" src="{{ asset($atractivo->foto_url) }}">
            <p class="text-uppercase"><a href="{{ route ('detalle', $atractivo->id) }}">{{ $atractivo->titulo }}</a></p>
        </div>
    </div>
    @endforeach
@else
    <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
@endif
@endsection
