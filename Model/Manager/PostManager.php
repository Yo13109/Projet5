<?php
	class PostManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("article","Post",$datasource);	
		}
		public function create($title, $content)
	{
		$req = $this->bdd->prepare('INSERT INTO article(title,content,date) VALUES(?, ?, NOW())');
		$affectedLines = $req->execute(array( $title, $content));
		

		return $affectedLines;
	}
	public function signal($id)
	{
		$req = $this->bdd->prepare('UPDATE comment SET signaled = 1 WHERE comment.id = ?');
	$affectedLines = $req->execute(array($id));
		
		
		return $affectedLines;
	}
	
     }
        