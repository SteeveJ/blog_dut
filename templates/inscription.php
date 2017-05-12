<?php
if(isset($_SESSION['connected'])){
	goPage('/');
}
?>

<div class="box">
	<div class="form-group">
		<label for="username" class="coText">Pseudo * : </label>
		<input type="text" id="username" name="username">
	</div>
	<div class="form-group">
		<label for="name" class="coText">Nom complet : </label>
		<input type="text" id="name" name="name">
	</div>
	<div class="form-group">
		<label for="email" class="coText">Email * : </label>
		<input type="email" id="email" name="email">
	</div>
	<div class="form-group">
		<label for="password" class="coText">Mot de passe * : </label>
		<input type="password" id="password" name="password">
	</div>
	<div class="form-group">
		<label for="password_confirmed" class="coText">Confirmation * : </label>
		<input type="password" id="password_confirmed" name="password_confirmed">
	</div>
	<div class="form-group">
		<button class="btn hide btnCo" id="valid_inscription">S'inscrire</button>
	</div>
</div>

<script>
	var page = "inscription";
</script>

