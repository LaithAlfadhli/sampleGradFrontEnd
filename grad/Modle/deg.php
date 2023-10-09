<?php
	
	//peça de roupa
	Class Deg
	{
		public function showAll(){
			
			$degrees = file_get_contents('../Assets/storage/degree.json');
			return $degrees;
		}


		public function findById($id){
			//obtain all the cloths by calling function to read all the json data
			$jsonClothes = Deg::showAll();
			//decode list of all the cloths
			$clothes = json_decode($jsonClothes);
			//return as a Json object that has the passed in id
			$clothePurchased = json_encode($clothes[$id]);

			return $clothePurchased;
		}

	}

?>