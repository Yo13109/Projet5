<div class="col-lg-6 offset-lg-3">
	<div class="card mb-4 mt-5">
		<div class="card-header"><img src="<?= $config->basepath; ?>/Image/utilisateur.png" width="60" height="60" ></div>
		<div class="card-content">

			<div class="section">
				<div class="mb-3">
					<form class="login-form" action="Login" method="post">
						<label>Identifiant</label>
						<input type="text" name="login" />
				</div>
				<div class="mb-3">
				<label>Mot de passe</label>
				<input type="password" name="password" />
				</div>
				<input type="submit" value="Se connecter" />
				</form>
			</div>
		</div>
		<div class="card footer">Yoann Corsi</div>
	</div>
</div>


