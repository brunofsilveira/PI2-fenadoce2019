<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Fenadoce 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script>
    $(()=>{	
      //alert("Materialize")
      $('.dropdown-button').dropdown();
    })
  </script>
  <style>
    
    .nav-search {
      -webkit-box-shadow: none;
    }

    .form-search {
      display: flex;
    }

    .btn-search {
      height: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      -webkit-box-shadow: none;
    }

    .brand-logo {
      margin-left: 2.5%;
    }

  </style>
</head>
<body>
  <nav class="blue darken-1">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Fenadoce 2019</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('candidatas.principal') }}">Principal</a></li>
        
        @if (Auth::check())

          <li><a href="{{ route('candidatas.index') }}">Cadastros - Candidatas</a></li>
          <li><a href="{{ route('votos.index') }}">Votos</a></li>
          <li><a href="{{ route('votos.contagem') }}">Classificação</a></li>
          <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
          <li>
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>
              Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>        
          </li>
            
        @else

          <li><a href="{{ route('login') }}">Logar / Registrar</a></li>
            
        @endif

        <li>
          <nav class="nav-search blue darken-1">
            <div class="nav-wrapper">
              <form class="form-search" action="{{ route('candidatas.pesquisar') }}" method="POST">
                {{ csrf_field() }}
                <div class="input-field">
                  <input id="search" name="inPesquisar" type="search" placeholder="Buscar..." aria-label="Search">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
                <button class="blue lighten-2 btn btn-search waves-effect waves-light" type="submit"><i class="material-icons right">send</i></button>
              </form>
            </div>
          </nav>
        </li>
      </ul>
    </div>
  </nav>

@yield('conteudo')

</body>
</html>
