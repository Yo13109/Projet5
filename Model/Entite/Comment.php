<?php
class Comment
{
    public $id_comment;
    public $id_billet;
    public $comment;
    public $author;
    public $date_comment;
    public $signaled;
    public function __construct()
		{
			$this->date_comment = new DateTime($this->date_comment);
		}
}