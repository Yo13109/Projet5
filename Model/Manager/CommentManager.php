<?php
class CommentManager extends BaseManager
{
	public function __construct($datasource)
	{
		parent::__construct("comment", "Comment", $datasource);
	}
	public function getByIdPost($id)
	{
		$req = $this->bdd->prepare("SELECT * FROM comment WHERE id_billet=?");
		$req->execute(array($id));
		$req->setFetchMode(PDO::FETCH_CLASS, "Comment");
		return $req->fetchAll();
	}

	public function create($pseudo, $comment, $id)
	{
		$req = $this->bdd->prepare('INSERT INTO comment(id_billet, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
		$affectedLines = $req->execute(array($id, $pseudo, $comment));

		return $affectedLines;
	}

	public function getSignaled()
	{
		$req = $this->bdd->prepare("SELECT * FROM comment WHERE signaled=1 ");
		$req->execute();
		$req->setFetchMode(PDO::FETCH_CLASS, "Comment");
		return $req->fetchAll();
	}
	public function getFiveLast()
	{
		$req = $this->bdd->prepare("SELECT * FROM comment ORDER BY date_comment DESC LIMIT 0,5");
		$req->execute();
		$req->setFetchMode(PDO::FETCH_CLASS, "Comment");
		return $req->fetchAll();
	}
	public function nosignal($id)
	{
		
		$req = $this->bdd->prepare("UPDATE comment SET signaled = 0 WHERE comment.id = ?");

		$req->execute(array($id));
		$req->setFetchMode(PDO::FETCH_CLASS, "Comment");
		return $req->fetchAll();
	}
}
