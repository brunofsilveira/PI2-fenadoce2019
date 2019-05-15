@extends('modelo')

@section('conteudo')

<div class="container">

<div class="row">
    <div class="col 12">
       <h3>Votos dos Usuários</h3>
    </div>
</div>

<table class="responsive-table highlight"x>
<thead>
    <tr>
        <th>Usuário</th>
        <th>Candidata</th>
        <th>E-Mail</th>
    </tr>
</thead>
<tbody>

    @foreach ($linhas as $linha)
    <tr>
        <td> {{ $linha->nome_usuario }} </td>
        <td> {{ $linha->nome_candidata }} </td>
        <td> {{ $linha->email }} </td>
    </tr>

    @endforeach

</tbody>
</table>

</div>
    
@endsection