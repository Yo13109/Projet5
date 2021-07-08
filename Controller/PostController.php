<?php
class PostController extends BaseController
{
	public function DisplayAll()
	{
		$listPost = $this->PostManager->getAll();
		$this->addParam("listPost", $listPost);
		$this->view("listPost");
	}
	public function DisplayOne($id)
	{
		$post = $this->PostManager->getById($id);

		$post->listComment = $this->CommentManager->getByIdPost($id);
		$this->addParam("post", $post);
		$this->view("post");
	}
	

	public function AddComment($pseudo, $comment, $id)
	{
		$this->CommentManager->create($pseudo, $comment, $id);
		
		$this->DisplayOne($id);
		
	}

	
	public function SignalComment($idpost,$idcomment)
	{
		$this->PostManager->signal($idcomment);
		$this->DisplayOne($idpost);
		
		
	}
	public function Mail($name,$prenom,$mail,$comment)
	{
		$headers = 'FROM ' .  $mail;
	
		mail("yoann.corsi@gmail.com", "formulaire de Contact", $comment, $headers);
		$this->redirect("/Home");
		
		
		
	}
}
