@extends('modelo')

@section('conteudo')

<div class="container">

<div class="row">
    <div class="col 12">
       <h3>Classificação</h3>
    </div>
</div>

<table class="responsive-table highlight">
<thead>
    <tr>
        <th>Qtd. de Votos</th>
        <th>Candidata</th>
    </tr>
</thead>
<tbody>

    @foreach ($linhas as $linha)
    <tr>
        <td> {{ $linha->qtd_votos }} </td>
        <td> {{ $linha->nome }} </td>
    </tr>

    @endforeach

</tbody>
</table>

</div>

@endsection