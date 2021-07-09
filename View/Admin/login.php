<div class="col-lg-6 offset-lg-3">
	<div class="card mb-4 mt-5">
		<div class="card-header mb-4"><img src="<?= $config->basepath; ?>/Image/utilisateur.png" width="60" height="60"></div>
		<div class="card-content">

			<div class="section">
				<div class="offset-lg-3 col-6">
					<form class="login" action="Login" method="post">
						<label class="form-label">Identifiant</label>
						<input type="text" name="login"class="form-control" />
				</div>
				<div class=" login offset-lg-3 col-6">
					<label class="form-label">Mot de passe</label>
					<input type="password" name="password" class="form-control" />
				</div>
				<div class=" offset-lg-5 col-6 mb-4 mt-5">
					<input type="submit" value="Se connecter" />
				</div>
				</form>
			</div>
		</div>
		<div class="card footer mt-2"></div>
	</div>
</div>