<?php
 Class Order{

    private $order;
    private $date;
    private $school;
    private $bD;
    private $eD;

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

    public function orderNow(){
       
        $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","root", null);
        $statement = $conn->prepare("insert into orders (`order`,`school`,`deliverydate`) VALUES(:order , :school , :deliverydate)");
        
        $statement->bindValue(":order" , $this->order);
        $statement->bindValue(":school" , $this->school);
        $statement->bindValue(":deliverydate",$this->date);

        $result = $statement->execute();
        
        return $result;
    }

    
    public function getOrders(){
        $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","root", null);
        $statement = $conn->prepare("SELECT COUNT(id), `order`,`school`,`deliverydate` from orders WHERE deliverydate BETWEEN :bd AND :ed group by `order`");
        $statement->bindValue(":bd" , $this->bD);
        $statement->bindValue(":ed" , $this->eD);
        $statement->execute();
        $result2 = $statement -> fetchAll();
        return $result2;
        
    }
   
 }//
?>