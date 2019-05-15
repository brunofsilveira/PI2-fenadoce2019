@extends('modelo')

@section('conteudo')

    <div class="row">

        @foreach ($linhas as $linha)

            <div class="col s12 m6 l3">
                
                <div class="card white-text">
                    <div class="card-image">
                        <img src='storage/{{ $linha->foto }}'  style="height:200px;">
                    </div>
                    <div class="card-content   blue darken-1">
                        <span class="card-title"> {{ $linha->nome }} </span>
                        <p> {{ $linha->clube }} </p>
                    </div>
                    <div class="card-action  blue darken-2">
                        <a class="white-text" href="{{ route('candidatas.detalhes',$linha->id) }}">Votar Nesta Candidata</a>
                    </div>
                </div>
                    
            </div>
        
        @endforeach
        
    </div>
    
@endsection