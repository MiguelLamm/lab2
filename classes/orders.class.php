<?php
 Class Order{

    private $order;
    private $date;
    private $school;

    public function show(){
        $conn = Db::getInstance();
        $statement= $conn->prepare("SELECT * FROM aanvraag, user WHERE user.id = aanvraag.userid and active = 1");
        $statement->execute();
        $posts = $statement -> fetchAll();
        return $posts;
    }
    public function showMine($myId){
        $conn = Db::getInstance();
        $statement= $conn->prepare("SELECT * FROM aanvraag WHERE userid LIKE :myId");
        $statement->bindParam(":myId",$myId);
        $statement->execute();
        $mypost = $statement -> fetchAll();
        return $mypost;
    }
    public function showReq(){
        $conn = Db::getInstance();
        $statement= $conn->prepare("SELECT * FROM aanvraag, user WHERE user.id = aanvraag.userid and active = 0");
        $statement->execute();
        $posts = $statement -> fetchAll();
        return $posts;
    }
    public function accept($postid){
        $conn = Db::getInstance();
        $statement= $conn->prepare("UPDATE aanvraag SET active = 1 where postid = :postid");
        $statement->bindParam(':postid', $postid);
        $statement->execute();
        return $statement;
    }
    public function decline($postid){
        $conn = Db::getInstance();
        $statement= $conn->prepare("UPDATE aanvraag SET active = 2 where postid = :postid");
        $statement->bindParam(':postid', $postid);
        $statement->execute();
        return $statement;
    }
    public function getLocation($lat, $long){
        $this->lat = $lat;
        $this->long = $long;
    }

    
    public static function getSearchPosts($search)
    {
        try {
            $conn = Db::getInstance();
            $statement = $conn->prepare("SELECT * FROM aanvraag WHERE (description LIKE '%$search%' OR city LIKE '%$search%') AND active = '1' ORDER BY id DESC");
            $statement->execute();
            $posts = $statement->fetchAll();

            return $posts;
        } catch (Throwable $t) {
            return false;
        }
    }

    public function uploadImage()
    {
        $target_dir = $this->newDirectory;
        $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);

        return $target_file;
    }

    public function insertIntoDB($order, $schoolId, $userId, $date)
    {
        try {
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO orders (order, school, deliverydate) VALUES (:order, :school, :deliverydate)");
            
            $statement->bindParam(':order', $order);
            $statement->bindParam(':school', $loc);
            $statement->bindParam(':deliverydate', $eliverydate);
            $statement->execute();
            return $result;
               
        } catch (Throwable $t){
            //return "yikes";
            //var_dump($t);
            return false;
        }
    }
   
 }//
?>