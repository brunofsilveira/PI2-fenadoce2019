@extends('modelo')

@section('conteudo')

<table class="table table-hover">
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
    
@endsection