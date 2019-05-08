@extends('modelo')

@section('conteudo')

<table class="table table-hover">
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
    
@endsection