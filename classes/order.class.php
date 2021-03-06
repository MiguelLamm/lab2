<?php
 Class Order{

    private $order;
    private $date;
    private $school;
    private $bD;
	private $eD;
	private $user;

	public function getOrder(){
		return $this->order;
	}

	public function setOrder($order){
		$this->order = $order;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function getSchool(){
		return $this->school;
	}
    public function setSchool($school){
		$this->school = $school;
    }
    
    public function getBD(){
		return $this->bD;
	}

	public function setBD($bD){
		$this->bD = $bD;
	}

	public function getED(){
		return $this->eD;
	}

	public function setED($eD){
		$this->eD = $eD;
	}

	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
	}

    public function orderNow(){
		//$conn = Db::getInstance();
		//$conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
		$conn= new PDO('mysql:host=ID245376_lab2.db.webhosting.be;dbname=ID245376_lab2';charset=utf8mb4, ID245376_lab2, admin4321);
        $statement = $conn->prepare("insert into orders (`order`,`school`,`deliverydate`, 'userid') VALUES(:order , :school , :deliverydate, :me)");
        
        $statement->bindValue(":order" , $this->order);
        $statement->bindValue(":school" , $this->school);
		$statement->bindValue(":deliverydate",$this->date);
		$statement->bindValue(":me",$this->user);

        $result = $statement->execute();
        
        return $result;
    }

    
    public function getOrders(){
		//$conn = Db::getInstance();
		//$conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
		$conn= new PDO('mysql:host=ID245376_lab2.db.webhosting.be;dbname=ID245376_lab2';charset=utf8mb4, ID245376_lab2, admin4321);
        $statement = $conn->prepare("SELECT COUNT(id), `order`,`school`,`deliverydate` from orders WHERE deliverydate BETWEEN :bd AND :ed group by `order`");
        $statement->bindValue(":bd" , $this->bD);
        $statement->bindValue(":ed" , $this->eD);
        $statement->execute();
        $result2 = $statement -> fetchAll();
        return $result2;  
	}
	
	public function getMyOrders(){
		//$conn = Db::getInstance();
		//$conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
		$conn= new PDO('mysql:host=ID245376_lab2.db.webhosting.be;dbname=ID245376_lab2';charset=utf8mb4, ID245376_lab2, admin4321);
        $statement = $conn->prepare("SELECT `order`,`school`,`deliverydate` from orders WHERE userid = :user AND deliverydate BETWEEN :bd AND :ed");
        $statement->bindValue(":bd" , $this->bD);
		$statement->bindValue(":ed" , $this->eD);
		$statement->bindValue(":user" , $this->user);
        $statement->execute();
        $result2 = $statement -> fetchAll();
        return $result2;  
    }
   
 }//
?>