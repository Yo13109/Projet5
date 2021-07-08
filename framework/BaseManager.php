<?php
	class BaseManager
	{
		private $table;
		private $object;
		protected $bdd;
		
		public function __construct($table,$object,$datasource)
		{
			$this->table = $table;
			$this->object = $object;
			$this->bdd = BDD::getInstance($datasource);
		}
		/**
		 * recupere une données par son id
		 * @param int $id identifiant de la donnée à chercher.
		 */
		
		public function getById($id)
		{
			
			$req = $this->bdd->prepare("SELECT * FROM " . $this->table . " WHERE id=?");
			$req->execute(array($id));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->object);
			return $req->fetch();
		}
		/**
		 * recupere toutes les données de la table
		 */
		public function getAll()
		{
			$req = $this->bdd->prepare("SELECT * FROM " . $this->table);
			$req->execute();
			$req->setFetchMode(PDO::FETCH_CLASS,$this->object);
			return $req->fetchAll();
		}
		
		/*public function create($obj,$param)
		{
			
			$paramNumber = count($param);
			$valueArray = array_fill(1,$param_number,"?");
			$valueString = implode($valueArray,",");
			$sql = "INSERT INTO " . $this->table . "(" . implode($param,",") . ") VALUES(" . $valueString . ")";
			$req = $this->bdd->prepare($sql);
			$boundParam = array();
			foreach($param as $paramName)
			{
				if(property_exists($obj,$paramName))
				{
					$boundParam[$paramName] = $obj->$paramName;	
				}
				else
				{
					throw new PropertyNotFoundException($this->object,$paramName);	
				}
			}
			$req->execute($boundParam);
		}*/
		
		public function update($obj,$param)
		{
			$sql = "UPDATE " . $this->table . " SET ";
			$sqlparam=array();
			foreach($param as $paramName)
			{

				$sqlparam[] =   $paramName . " = :".$paramName;
			}
			$sql.=implode(",",$sqlparam);
			$sql = $sql . " WHERE id = :id ";
			$req = $this->bdd->prepare($sql);
			
			$param[] = 'id';
			$boundParam = array();
			foreach($param as $paramName)
			{
				if(property_exists($obj,$paramName))
				{
					$boundParam[$paramName] = $obj->$paramName;	
				}
				else
				{
					throw new PropertyNotFoundException($this->object,$paramName);	
				}
			}
			
			$req->execute($boundParam);
			
			
		}
		
		public function delete($id)
		{
		
				$req = $this->bdd->prepare("DELETE FROM " . $this->table . " WHERE id=?");
				return $req->execute(array($id));
		
			
		}
		
	}