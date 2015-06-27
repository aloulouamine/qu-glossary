<?php
	/**
	 * 
	 */
	 class Word
	 {
	 	private $word;
	 	function __construct($word)
	 	{
	 		$this->word=$word;

	 	}

	 	public static function getWords($conn){
	 		$req="SELECT * FROM words ";
			$res=$conn->query($req);
			$jsonArray = array();
			while($tab=$res->fetch(PDO::FETCH_ASSOC)) {
				$jsonArray[]=$tab;
			}
			return json_encode($jsonArray);
	 	}



	 	public static function getDefinition($conn,$word){
	 	$stmt=$conn->prepare("SELECT  d.user,d.definition,d.timestamp,u.name,u.img FROM definition d,user u
			WHERE d.word=:word and d.user=u.email");
		$stmt->bindParam(':word',$word);
		$stmt->execute();
		$tab=array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$tab[]=$row;
  		}
  		
  		return json_encode($tab);
	 }	
	 } 

	 
?>