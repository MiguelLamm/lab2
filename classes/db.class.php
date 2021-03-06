<?php
    abstract class Db {
        private static $conn;

        private static function getConfig(){
            // get the config file
            return parse_ini_file(__DIR__ . "/../config/config.ini");
        }
        

        public static function getInstance() {
            if(self::$conn != null) {
                // REUSE our connection
                //echo "🚀";
                return self::$conn;
            }
            else {
                // CREATE a new connection

                // get the configuration for our connection from one central settings file
                $config = self::getConfig();
                $database = $config['database'];
                $host = $config['hostname'];
                $user = $config['user'];
                $password = $config['password'];
                $dbname = $config['dbname'];

                //echo "💥";
                //self::$conn = new PDO('mysql:host=localhost;dbname='.$database.';charset=utf8mb4', $user, "");
                //self::$conn = new PDO($database.':host='.$host.';dbname='.$dbname.';charset=utf8mb4', $user, $password);
                self::$conn = new PDO('mysql:host=ID245376_lab2.db.webhosting.be;dbname=ID245376_lab2';charset=utf8mb4, ID245376_lab2, admin4321);
                return self::$conn;
            }
        }
    }//