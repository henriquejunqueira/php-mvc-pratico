<div class="row container">
	<div class="col s12">
		<h3 class="light">Página de Cadastro</h3>
	</div>
	
	<div class="col s12">
		<form action="?router=Site/cadastro/" method="POST">
			<div class="input-field col s12 m6">
				<input type="text" name="nome" id="nome" required />
				<label for="nome">Nome</label>
			</div>
			
			<div class="input-field col s12 m6">
				<input type="email" name="email" id="email" required />
				<label for="email">E-mail</label>
			</div>
			
			<div class="input-field col s12">
				<input type="submit" value="enviar" class="btn-small" />
				<input type="reset" value="limpar" class="btn-small red" />
			</div>
		</form>
	</div>
</div>