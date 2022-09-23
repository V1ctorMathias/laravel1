<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Document</title>
</head>

<body>

    <header>

        <nav>


            <ul class="nav__links">

                <li> <a href="generos-view"> Cliente </a></li>

                <li> <a href="produtos-view"> Produto </a></li>

                <li> <a href="categorias-view">Categoria </a></li>

                <li> <a href="pedidos-view">Pedido </a></li>

                <li> <a href="contatosView">Contato </a></li>

            </ul>

        </nav>

        <a class="cta" href="/"><button>Home</button></a>

    </header>

    @yield('content')
    @yield('contente')

    <footer>
        <p id="rod"> Todos os direitos reservados - <?php echo date('Y'); ?> </p>
    </footer>

</body>

</html>