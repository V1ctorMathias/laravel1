@extends('template.default')

@section('contente')

<section class="centro">
	<div>
		<h1> Formulário de Contato </h1>
	</div>

	<section class="sec-form">

		<!--<form method="post" action="produto-inserir.php">-->
		<form method="post">
			<div>
				<input type="hidden" placeholder="idProduto" name="txIdProduto" value="idProduto" />
			</div>

			<div>
				<input type="text" class="tx" placeholder="Produto" name="txProduto" value="Nome Completo" />
			</div>

			<div>
				<input type="text" placeholder="Valor" class="tx" name="txValor" value="Telefone" />
			</div>
			
			<div>
				
				<select name="txIdCategoria" class="tx sel">
					<option value='0'> Motivo do Contato </option>
					
				</select>
				<!-- <input type="text" placeholder="idCategoria" name="txIdCategoria" />-->
			</div>
			<!-- Fim Categorias -->

			
		<div>

		</div>		

			<div>
				<input type="submit" value="Enviar" class="bt" />
			</div>
		</form>

	</section>

@endsection

