<div class="input field">
	<label>Nome da cidade</label>
	<input type="text" name="nome" class="validate" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
</div>
<div class="input field">
	<label>Estado</label>
	<input type="text" name="estado" class="validate" value="{{ isset($registro->estado) ? $registro->estado : '' }}">
</div>
<div class="input field">
	<label>Sigla</label>
	<input type="text" name="sigla_estado" class="validate" value="{{ isset($registro->sigla_estado) ? $registro->sigla_estado : '' }}">
</div>
