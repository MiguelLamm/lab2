<?php
 Class Order{

    private $lat;
    private $long;
    private $loc;

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

    public function insertIntoDB($filePath, $des, $userId, $lat, $long, $loc,$gemeenteH,$date, $time,$addr)
    {
        try {
            date_default_timezone_set('Europe/Brussels');
            $date = date('Y-m-d', strtotime($date));
            $time = date('H:i:s', strtotime($time));
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO aanvraag (userid, image, description, latitude, longitude, city, date, time, active,gemeenteHelp,address) VALUES ('$userId', :path, :des, '$lat', '$long', :loc,'$date','$time', 0, :gemeente, :addr)");
            $statement->bindParam(':path', $filePath);
            $statement->bindParam(':des', $des);
            $statement->bindParam(':gemeente', $gemeenteH);
            $statement->bindParam(':loc', $loc);
            $statement->bindParam(':addr', $addr);
            $statement->execute();

        } catch (Throwable $t) {
            return false;
        }
    }
    public function updateDBpost($filePath, $postid)
    {
        try {
            $conn = Db::getInstance();
            $statement = $conn->prepare("UPDATE aanvraag SET image2 = :path WHERE postid= $postid");
            $statement->bindParam(':path', $filePath);
            $statement->execute();

        } catch (Throwable $t) {
            return false;
        }
    }
 }//
?>