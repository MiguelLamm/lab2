<?php
 
    class User {
        private $email;
        private $password;
        private $passwordConfirmation;
        private $naam;
        private $voornaam;

        public function getNaam(){
            return $this->naam;
        }
    
        public function setNaam($naam){
            $this->naam = $naam;
        }
    
        public function getVoornaam(){
            return $this->voornaam;
        }
    
        public function setVoornaam($voornaam){
            $this->voornaam = $voornaam;
        }
        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }
 
        /**
         * Set the value of email
         *
         * @return  self
         */
        public function setEmail($email)
        {
                $this->email = $email;
 
                return $this;
        }
 
        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }
 
        /**
         * Set the value of password
         *
         * @return  self
         */
        public function setPassword($password)
        {
                $this->password = $password;
 
                return $this;
        }
 
        /**
         * Get the value of passwordConfirmation
         */
        public function getPasswordConfirmation()
        {
                return $this->passwordConfirmation;
        }
 
        /**
         * Set the value of passwordConfirmation
         *
         * @return  self
         */
        public function setPasswordConfirmation($passwordConfirmation)
        {
                $this->passwordConfirmation = $passwordConfirmation;
 
                return $this;
        }
        
        public function register(){
                $options = [
                'cost' => 14 //2^12 
            ];

            $password = password_hash($this->password,PASSWORD_DEFAULT, $options);


            try {
                //$conn = Db::getInstance();
                $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
                $statement = $conn->prepare("INSERT into user (email,pass, naam, voornaam) VALUES(:email, :password, :naam, :voornaam)");
                $statement->bindParam(":email",$this->email);
                $statement->bindParam(":naam",$this->naam);
                $statement->bindParam(":voornaam",$this->voornaam);
                $statement->bindParam(":password",$password);
                $result = $statement->execute();
                return $result;
               
            } catch (Throwable $t){
                //return "yikes";
                //var_dump($t);
                return false;
            }
    }
    public function login(){
        
        try{
            //$conn = Db::getInstance();
            $conn= new PDO("mysql:host=localhost;dbname=lab2;","root","", null);
            $statement = $conn->prepare("select * from users where email = :email");
            
            //parameter binden
            $statement->bindParam(":email",$this->email);

            $result = $statement->execute();

            var_dump($user['id']);
            
            //array overzetten naar variable
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            
            if (password_verify($this->password, $user['pass'])) {
                echo 'Password is valid!';
                session_start();
                header('Location: index.php');
                return true;
            }
             else {
                 echo 'Password is invalid!';
                //display error message
                return false;
        
            }
        }
        catch (Throwable $t){
            
        }
    }
}