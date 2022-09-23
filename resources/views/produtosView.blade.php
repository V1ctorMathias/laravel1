@extends('template.default')

@section('contente')

<h1> Produtos </h1>

<table>

<th>ID</th>
<th>IDCat</th>
<th>produto</th>
<th>Valor</th>

    @foreach($produtos as $pro)

<tbody>
    <tr>

        <td>
            {{$pro->idProduto}}
        </td>
    
        <td>
            {{$pro->tbCategoria}}
        </td>

        <td>
            {{$pro->produto}}
        </td>

        <td>
            {{$pro->valor}}
        </td>

    </tr>
    </tbody>
    @endforeach
</table>

@endsection
