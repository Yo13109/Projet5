<?php
	class BaseController
	{
		private $httpRequest;
		private $param;
		protected $config;
		private $fileManager;
		
		public function __construct($httpRequest,$config)
		{
			$this->httpRequest = $httpRequest;
			$this->config = $config;
			$this->param = array();
			$this->addParam("httprequest",$this->httpRequest);
			$this->addParam("config",$this->config);
			$this->bindManager();
			$this->fileManager = new FileManager($config);
		}
		
		protected function view($filename)	
		{
			if(file_exists("View/" . $this->httpRequest->getRoute()->getController() . "/css/" . $filename . ".css"))
			{
				$this->addCss("View/" . $this->httpRequest->getRoute()->getController() . "/css/" . $filename . ".css");
			}
			if(file_exists("View/" . $this->httpRequest->getRoute()->getController() . "/js/" . $filename . ".js"))
			{
				$this->addJs("View/" . $this->httpRequest->getRoute()->getController() . "/js/" . $filename . ".js");
			}
			if(file_exists("View/" . $this->httpRequest->getRoute()->getController() . "/" . $filename . ".php"))
			{
				ob_start();
				extract($this->param);
				include("View/" . $this->httpRequest->getRoute()->getController() . "/" . $filename . ".php");
				$content = ob_get_clean();
				include("View/layout.php");
			}
			else
			{
				throw new ViewNotFoundException();	
			}
		}
		
		public function bindManager()
		{

			foreach($this->httpRequest->getRoute()->getManager() as $manager)
			{
				$managerName = $manager."Manager";
				$this->$managerName = new $managerName($this->config->database);
			}
		}
		/**
		 * ajout un parametre pour la vue
		 * @param string $name le nom de la variable dans la vue.
		 * @param mixed $value la valeur du parametre.
		 */
		public function addParam($name,$value)
		{
			$this->param[$name] = $value;
		}
		
		public function addCss($file)
		{
			$this->fileManager->addCss($file);
		}
		
		public function addJs($file)
		{
			$this->fileManager->addJs($file);
		}

	public function redirect($url)
	{
header("location: ".$this->config->basepath .$url);
	}
	}