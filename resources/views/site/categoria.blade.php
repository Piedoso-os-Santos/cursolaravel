@extends('site.layout')


{{-- @section('title','Essa eh a pagina home')
@endsection --}}

@section('title','nossa home')

@section('conteudo')
    {{-- <h1>Essa eh nossa home</h1> --}}

    {{-- <h1>Hello world</h1>
    <h1>Piedoso Dos Santos Aurelio</h1> --}}

    <div class="row container">
        <h3>
            Categoria: {{$categoria->nome}}
        </h3>
    </div>


    @foreach ($produtos as $produto)
        <div class="row container"> <br>
            <div class="col s12 m5">
                <div class="card">
                    <div class="card-image">
                      <img src="{{$produto->imagem}}">
                      <span class="card-title">Card Title</span>
                      <a href="{{route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                      <p>{{Str::limit(  $produto->descricao,20) }}</p>
                    </div>
                  </div>
            </div>
    </div>
    @endforeach

<div class="row center">
    {{-- {{$produtos ->links('custom.pagination')}} --}}
</div>
@endsection
