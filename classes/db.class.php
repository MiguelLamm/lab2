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
                self::$conn = new PDO($database.':host='.$hostname.';dbname='.$dbname.';charset=utf8mb4', $user, $password);
                return self::$conn;
            }
        }
    }//