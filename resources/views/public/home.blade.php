@extends('public.layout')

@section('title', 'INFINITI - México - Empower the Drive')
@section('description', 'La innovación, potencia y diseño de nuestros autos impulsan tu potencial y llevan tu manejo más allá.')

@section('content')
    @include('public.partials._header')
    @include('public.partials._banner')
    @include('public.partials._cars')
    @include('public.partials._promotions')
    @include('public.partials._agencies')
    @include('public.partials._footer')
@endsection
