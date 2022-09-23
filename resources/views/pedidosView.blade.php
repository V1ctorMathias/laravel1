@extends('template.default')

@section('contente')

<h1> Pedidos </h1>

<table>

<th>ID</th>
<th>IDCat</th>
<th>produto</th>
<th>Valor</th>
<th>Valor</th>

    @foreach($pedidos as $ped)

<tbody>
    <tr>

        <td>
            {{$ped->idPedido}}
        </td>
    
        <td>
            {{$ped->tbCliente}}
        </td>

        <td>
            {{$ped->categoria}}
        </td>

        <td>
            {{$ped->produto}}
        </td>

        <td>
            {{$ped->valor}}
        </td>

    </tr>
    </tbody>
    @endforeach
</table>

@endsection