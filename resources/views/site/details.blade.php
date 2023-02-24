@extends('site.layout')
@section('title','Detalhes')
@section('conteudo')

<div class="row container">
    <div class="col s12 m6">  <br>
        <img src="{{ $produto->imagem }}" class="responsive-img" alt="">
    </div>
    <div class="col s12 m6">
        <h4>{{$produto->nome}}</h4>
        <h4>{{number_format( $produto->preco,2,',','.')}} MT</h4>
        <p>{{$produto->descricao}}</p>
        <br>
        <p>Postado por  {{$produto->user->firstName}}</p>
        <p>Categoria:  {{$produto->categoria->nome}}</p>
        
        <button class="btn orange btn-large">Comprar</button>

    </div>
</div>


@endsection