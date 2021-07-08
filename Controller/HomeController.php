<?php
	class HomeController extends BaseController
	{
		public function Home()
		{
			$listUser = $this->UserManager->getAll();
			$this->addParam("listUser",$listUser);
			$this->view("home");	
		}
	}