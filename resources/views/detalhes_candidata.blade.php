@extends('modelo')

@section('conteudo')

<div class="container">

@if ($errors->any())

    <div class="col 12" role="alert">
        <ul>

            @foreach ($errors->all() as $error)
            
                <li>{{ $error }}</li>

            @endforeach

        </ul>
    </div>
    
@endif

    <div class="row">
    
        <div>

            <h5 class="card-title"> {{ $reg->nome }} </h5>
            <p class="card-text"> {{ $reg->clube }} </p>
                
        </div>

        <div>

            <form method="POST" action="{{ route('votos.store') }}">
                
                {{ csrf_field() }}

                <div>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Enter nome">
                </div>
                <div>
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div>
                    <label for="candidata_id">Candidata</label>
                    <input type="text" class="form-control" id="candidata_id" name="candidata_id" value="{{ $id }}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>

    </div>

</div>

@endsection