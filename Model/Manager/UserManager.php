<?php
class userManager extends BaseManager
{
	public function __construct($datasource)
	{
		parent::__construct("user", "User", $datasource);
	}

	public function getByMail($mail)
	{
		$req = $this->bdd->prepare("SELECT * FROM user WHERE mail=?");
		$req->execute(array($mail));
		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "User");
		return $req->fetch();
	}
	public function Authenticate($mail, $password)
	{
		$user = $this->getByMail($mail);
		if ($user != false) {
			if (password_verify($password, $user->password)) {
				return $user;
			} else {
				throw new Exception("mot de passe incorrect");
			}
		} else {
			throw new Exception("votre email est incorrect");
		}
	}
	public function Mail($name, $prenom, $mail, $comment)
	{

		$headers = 'FROM ' .  $_POST["mail"];
		$message = $_POST["Comment"];
		mail("yoann.corsi@gmail.com", "formulaire de Contact", $message, $headers);
	}
}
