<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>

    @foreach ($categoriasMenu as $categoria)
        <li><a href="{{route('site.categoria',$categoria->id)}}">{{$categoria->nome}}</a></li>
    @endforeach

    
    

  </ul>
        

    <nav>
        <div class="nav-wrapper container">
          <a href="{{route('site.index')}}" class="brand-logo">Curso Laravel</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="">Home</a></li>
            <li><a href="" class="dropdown-trigger" data-target='dropdown1'>Categorias <i class="material-icons right">expand_more</i> </a></li>
            <li><a href="badges.html">Carrinho </a></li>
            {{-- <li><a href="collapsible.html">Info</a></li> --}}
          </ul>
        </div>
      </nav>

    @yield('conteudo')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var elemDrop = document.querySelectorAll('.dropdown-trigger');
        var instanceDrop = M.Dropdown.init(elemDrop,{
            coverTrigger: false,
            constrainWidth:false
        });
    </script>
</body>
</html>