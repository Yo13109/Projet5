<?php
class Post
{
    public $id;
    public $title;
    public $content;
    public $date;
    public function __construct()
		{
			$this->date = new DateTime($this->date);
		}
}
