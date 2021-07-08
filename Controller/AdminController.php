<?php
class AdminController extends BaseController
{
    public function Home()
    {

        $listpost = $this->PostManager->getAll();

        $listComment = $this->CommentManager->getFiveLast();

        $this->addParam("posts", $listpost);
        $this->addParam("comment", $listComment);
        $signalComment = $this->CommentManager->getSignaled();

        $this->addParam("signal", $signalComment);

        $this->view("admin");
    }
    public function AddPost($title, $content)

    {
        $this->PostManager->create($title, $content);
        $this->redirect("/Admin");
    }

    public function DeletePost($id)

    {
        $this->PostManager->delete($id);
        $this->redirect("/Admin");
    }
    public function ShowUpdatePost($id)

    {

        $post = $this->PostManager->getById($id);
        $this->addParam("post", $post);
        $this->view("updatePost");
    }
    public function UpdatePost($title, $content, $id)
    {
        $post = new stdClass();
        $post->id = $id;
        $post->content = $content;
        $post->title = $title;
        $this->PostManager->update($post, array("title", "content"));
        $this->redirect("/Admin");
    }

    public function ShowAddPost()

    {




        $this->view("addPost");
    }

    public function DeleteComment($id)

    {
        $this->CommentManager->delete($id);
        $this->redirect("/Admin");
    }

    public function DeleteSignalComment($id)

    {
        $this->CommentManager->delete($id);
        $this->redirect("/Admin");
    }
    public function NoSignal($id)

    {
        $this->CommentManager->nosignal($id);
        $this->redirect("/Admin");
    }
    public function Authenticate($mail, $password)
    {

        $user = $this->UserManager->Authenticate($mail, $password);
        $_SESSION["user"] = $user;
        $this->redirect("/Admin");

    }
    public function Login()
    {
        $this->view("login");
    }
}
