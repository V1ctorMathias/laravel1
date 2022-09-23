@extends('template.default')

@section('contente')

<h1> Categorias </h1>

<table>

<th>ID</th>
<th>Categoria</th>

    @foreach($categorias as $pro)

<tbody>
    <tr>

        <td>
            {{$pro->idCategoria}}
        </td>
    
        <td>
            {{$pro->Categoria}}
        </td>

    </tr>
    </tbody>
    @endforeach
</table>

@endsection