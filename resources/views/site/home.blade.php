@extends('site.layout')

{{-- @section('title','Essa eh a pagina home')
@endsection --}}

@section('title','nossa home')

@section('conteudo')
    {{-- <h1>Essa eh nossa home</h1> --}}


    @include('includes.mensagem')

    @component('components.slidebar')
        @slot('paragrafo')
            Texto qualquer vindo do slot
        @endslot
    @endcomponent

@endsection



{{-- @foreach ($collection as $item)
    
@endforeach --}}