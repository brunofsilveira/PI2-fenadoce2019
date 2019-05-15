@extends('modelo') 

@section('conteudo') 

<div class="container">

@if ($acao == 1)
  <h3>Inclusão de Candidatas</h3>
  <form method="post" action="{{ route('candidatas.store') }}" enctype="multipart/form-data">

@elseif ($acao == 2)
  <h3>Alteração de Candidatas</h3>
  <form method="post" action="{{ route('candidatas.update', $reg->id) }}" enctype="multipart/form-data">
  {{ method_field('put') }} 
    
@else
  <h3>Consulta de Candidatas</h3>

@endif 

{{ csrf_field() }}

    <div class="row">
      <div class="col-sm-8">
        <div class="form-group">
          <label for="nome">Nome da Candidata:</label>
            <input type="text" class="form-control" id="nome" name="nome" 
                  value="{{$reg->nome or old('nome')}}" 
                  @if ($acao==3)
                      readonly="readonly"> 
                  @else 
                      autofocus> 
                  @endif
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="clube">Clube:</label>
                <input type="text" class="form-control" id="clube" name="clube"
                      value="{{$reg->clube or old('clube')}}" 
                      @if ($acao==3)
                          readonly="readonly" 
                      @endif
                >
              </div>
            </div>

            <div class="col-sm-6">
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" multiple id="imagem" name="imagem"
                  @if ($acao==3)
                      readonly="readonly" 
                  @endif
                  >
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
              </div>
            </div>
          </div>

        @if ($acao == 1 or $acao == 2)
          <input type="submit" value="Enviar" class="blue lighten-2 btn btn-danger">
        </form>
        @else
        <div class="text-right">
          <a href="{{ url()->previous() }}" class="btn btn-success btn-sm" role="button">Voltar</a>
        </div>
        @endif
      </div>
      <div class="col-sm-4">
        @if ($acao == 1)
          <img src="" id="outFoto" style="width: 300px; height: 200px; display: none;" alt="Foto">
        @else 
          <img src="../../storage/{{ $reg->foto }}" id="outFoto" style="width: 300px; height: 200px;" alt="Foto">
        @endif  
      </div>
    </div>
    
    <!-- arquivos js ficam em public/js -->
    <script src="{{ URL::asset('js/foto.js') }}"></script>

  </div>
@endsection