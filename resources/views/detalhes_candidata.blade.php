@extends('modelo')

@section('conteudo')

<div class="container">

@if ($errors->any())

    <div class="alert alert-danger" role="alert">
        <ul>

            @foreach ($errors->all() as $error)
            
                <li>{{ $error }}</li>

            @endforeach

        </ul>
    </div>
    
@endif

<div class="container">

    <div class="row">
    
        <div class="col-md-5">

            <img class="card-img-top img responsive" src='storage/{{ $reg->foto }}'> 
            <h5 class="card-title"> {{ $reg->nome }} </h5>
            <p class="card-text"> {{ $reg->clube }} </p>
                
        </div>

        <div class="col-md-7">

            <form method="POST" action="{{ route('votos.store') }}">
                
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Enter nome">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="candidata_id">Candidata</label>
                    <input type="text" class="form-control" id="candidata_id" name="candidata_id" value="{{ $id }}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

</div>

</div>

@endsection