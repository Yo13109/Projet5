<div class="col-6 col-12">
	<div class="row">

		<div class="col-4  col-md-12">
			<div class="card mt-4 mb-4">

				<div class="card-header">

					<h2> Yoann Corsi</h2>
				</div>

				<div class="card-content">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 "><img class="affiche" src="Image/yoann.jpg" width="350" height="350" alt=""></div>
						<div class="col-md-6 col-lg-8">




							<p>Comptable de formation , et connu pour ma capacité d'adaptation, je suis le développeur php symphony qu'il vous faut </p>

							<p>Grâce à ma formation de developpeur d'application spécialité php symphony sur le site Open Classroom, j'ai réalisé plusieurs projet.</p>







						</div>
					</div>





				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 offset-lg-3 col-md-12">

		<div class="card mt-4">

			<div class="card-header">
				<h2> Pour me joindre sur les réseaux sociaux: </h2>
			</div>
			<div class="card-content">
				<div class="col-8 col-md-2 col-lg-2 mt-4 mb-4">
					<a href="https://twitter.com/home"> <img src="Image/twitter.png" width="45" height="45" alt="">
						<p> Yo13109</p>
					</a>
				</div>

				<div class="col-8 col-md-2 col-lg-2 mt-4 mb-4"><a href="https://www.facebook.com/yoann.corsi"> <img src="Image/facebook.png" width="45" height="45" alt="">
						<p>Yoann Corsi</p>
					</a>

				</div>
				<div class="col-8 col-md-2 col-lg-2 mt-4 mb-4"><a href="https://www.linkedin.com/feed/"> <img src="Image/linkedin.png" width="45" height="45" alt="">
						<p>Yoann Corsi</p>
					</a></div>
				<div class="col-8 col-md-2 col-lg-2"><a href="https://www.instagram.com/"><img src="Image/instagram.jpg" width="45" height="45" alt="">
						<p> yoanncorsi</p>
					</a></div>

				<div class="card-footer col-12"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 offset-lg-3 col-md-12">
		<div class="card mt-4 mb-4">
			<div class="card-header">

				<h2> Données Personnelles:</h2>
			</div>
			<div class="card-content">

				<div class="col-12  mt-4 mb-4">
					<img src="Image/tel.png" width="45" height="45" alt="">
					<p> 06.66.67.27.07</p>
				</div>
				<div class="col-12 mt-4 mb-4">
					<img src="Image/email.jpg" width="45" height="45" alt="">
					<p>Yoann.corsi@gmail.com</p>
				</div>
			</div>


			<a target="_blank" href="Image/CV.PDF"><img src="Image/Cv.jpg" width="60" height="60" alt="">
				<p>MON CV</p>
			</a>
			<div class="card-footer"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 offset-lg-3 col-md-12">
		<div class="card mt-4 mb-4">

			<div class="card-header">

				<h2> Formulaire de contact</h2>
			</div>

			<div class="card-content">

				<div class="col-12">
					<form method="post" action="<?= $config->basepath; ?>/Post/Contact">

						<fieldset>
							<legend>Vos coordonnées</legend> 

							<label for="nom">Quel est votre nom ?</label>
							<input class="form-control" type="text" name="name" id="name" />
							<label for="nom">Quel est votre prénom ?</label>
							<input class="form-control" type="text" name="prénom" id="prénom" />
							<label for="email">Quel est votre e-mail ?</label>
							<input class="form-control" type="email" name="mail" id="mail" />
							<label for="nom">Commentaire</label>
							<textarea rows="5" class="form-control" name="comment" id="comment"></textarea>
						</fieldset>
				</div>





			</div>






			<div class="card-footer col-12">
				<button type="button" class="btn btn-primary col-12">Envoyer</button>
			</div>
		</div>
	</div>
</div>