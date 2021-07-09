<div class="col-lg-6 offset-lg-3">
	<div class="card">
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


<form>
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="mb-3 form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Check me out</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>