@extends('modelo')

@section('conteudo')

<div class="container-fluid">
    <div class="row">

        @foreach ($linhas as $linha)

        <div class="col-md-3">

            <div class="bg-primary card" style="width: 18rem;">
                <img class="card-img-top" src='../../storage/app/public/{{ $linha->foto }}'>
                <div class="card-body">
                    <h5 class="card-title"> {{ $linha->nome }} </h5>
                    <p class="card-text"> {{ $linha->clube }} </p>
                    <a href="{{ route('candidatas.detalhes',$linha->id) }}" class="btn btn-primary">Votar Nesta Candidata</a>
                </div>
            </div>
                
        </div>
        
        @endforeach
        
    </div>
</div>
    
@endsection