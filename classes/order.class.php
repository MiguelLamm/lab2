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
    
    public function insertIntoDB(){
        try {
            $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
            $statement = $conn->prepare("INSERT into orders (order,school) VALUES(:order, :school)");
            $statement->bindParam(":order","testorder");
            $statement->bindParam(":school","testschool");
            //$statement->bindParam(":deliverydate",$this->date);
            $result = $statement->execute();
            
            $status = $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);
            return $status;
        } catch (Throwable $t){
            //return "yikes";
            //var_dump($t);
            return false;
        }
    }
   
 }//
?>