<?php
	class AdminManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("admin","admin",$datasource);	
		}
     }