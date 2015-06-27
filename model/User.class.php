<?php 
	/**
	* class user
	*/
	class User
	{
		private $email;
		private $password;
		function __construct($email,$password)
		{
			$this->email=$email;
			$this->password=$password;
		}

		function insert($conn){

			$stmt=$conn->prepare("INSERT INTO user VALUES (:email,:password)");
			$stmt->bindParam(':email',$this->email);
			$stmt->bindParam(':password',hash('md5',$this->password));
			$stmt->execute();
		
		}


		function login($conn){
			$req="SELECT * FROM user u Where (u.email='".$this->email."' and u.password='".hash('md5',$this->password)."');";
			$res=$conn->query($req);
			while($tab=$res->fetch(PDO::FETCH_ASSOC)) {
				return 1;
			}
			return 0;
		}

	}
?>