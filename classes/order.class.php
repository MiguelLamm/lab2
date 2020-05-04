<?php
 Class Order{

    private $order;
    private $date;
    private $school;

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
    
    public function order(){
        /*
            $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
            $statement = $conn->prepare("insert into orders (order,school,deliverydate) VALUES(:order , :school , :deliverydate)");
            $statement->bindParam(":order" , $this->order);
            $statement->bindParam(":school" , $this->school);
            $statement->bindParam(":deliverydate",$this->date);
            $result = $statement->execute();
            return $result;
        */
        $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
        $statement = $conn->prepare("insert into orders (`order`,`school`,`deliverydate`) VALUES(:order , :school , :deliverydate)");
        
        $statement->bindValue(":order" , $this->order);
        $statement->bindValue(":school" , $this->school);
        $statement->bindValue(":deliverydate",$this->date);

        $result = $statement->execute();
        
        return $result;
    }

    
    public function getOrders(){
        $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
        $statement = $conn->prepare("SELECT COUNT(id), `order`,`school`,`deliverydate` from orders group by `order`");
        $statement->execute();
        $result2 = $statement -> fetchAll();
        return $result2;
        
    }
   
 }//
?>