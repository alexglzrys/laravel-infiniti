@extends('public.layout')

@section('title', 'INFINITI - México - Our Clients by Agency')
@section('description', 'Listado de clientes por agencias automotrices autorizadas.')

@section('content')
    @include('public.partials._header')
    @include('public.partials._banner')
    @include('public.partials._customers')
    @include('public.partials._footer')
@endsection
