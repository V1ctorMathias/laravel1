@extends('template.default')

@section('contente')

<h1> Olá, Cliente! </h1>

<table>

<th>ID</th>
<th>Nome</th>
<th>Nasc</th>
<th>EstCivil</th>
<th>Endereço</th>
<th>Número</th>
<th>Complemento</th>
<th>CEP</th>
<th>Cidade</th>
<th>Estado</th>
<th>RG</th>
<th>CPF</th>
<th>Email</th>
<th>Fone</th>
<th>Celular</th>

    @foreach($generos as $gen)

<tbody>
    <tr>

        <td>
            {{$gen->idCliente}}
        </td>
    
        <td>
            {{$gen->nome}}
        </td>

        <td>
            {{$gen->dtNasc}}
        </td>

        <td>
            {{$gen->EstadoCivil}}
        </td>

        <td>
            {{$gen->endereco}}
        </td>

        <td>
            {{$gen->numero}}
        </td>

        <td>
            {{$gen->complemento}}
        </td>

        <td>
            {{$gen->CEP}}
        </td>

        <td>
            {{$gen->cidade}}
        </td>

        <td>
            {{$gen->estado}}
        </td>

        <td>
            {{$gen->RG}}
        </td>

        <td>
            {{$gen->CPF}}
        </td>

        <td>
            {{$gen->email}}
        </td>

        <td>
            {{$gen->fone}}
        </td>

        <td>
            {{$gen->celular}}
        </td>

    </tr>
    </tbody>
    @endforeach
</table>

@endsection


