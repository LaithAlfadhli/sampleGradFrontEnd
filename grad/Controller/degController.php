<?php
	//ensure their is a clothe file and that it is embeded
	require_once('../Modle/deg.php');

	Class degController
	{
		public function getAll(){
			//create a new clothe object to call appropriate methods
			$degrees = new deg();
			//obtain and return all clothing  items as a response. 
			$resp = $degrees->showAll();
			return $resp;
		}

		public function getDeg($id){
			$degrees = new deg();
			//obtain and return particular clothing item with ID that was passed in. 

			$resp = $degrees->findById($id);
			return $resp;
		}

		
	}

?>