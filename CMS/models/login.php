<?php

    class login
    {
        //DB stuff
        private $conn;

        function __construct($db) {
            $this->conn = $db;
        }

        public function register($name, $username, $pass) {
            try {
                $query = "INSERT INTO `kid` (`id_kid`, `kidName`, `kidUsername`, `kidPassword`) VALUES (NULL, '$name', '$username', '$pass')";

                $stmnt = $this->conn->prepare($query);
                $stmnt->execute();
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function enter($username, $pass) {
            try {
                $query = "SELECT * FROM kid WHERE kidUsername=:username AND kidPassword=:pass";

                $stmnt = $this->conn->prepare($query);
                $stmnt->execute(array(':username' => $username, ':pass' => $pass));
                $row = $stmnt->fetch(PDO::FETCH_ASSOC);
                if($row != null)
                {
                    session_regenerate_id();
                    $_SESSION["authorized"] = true;
                    $_SESSION["sess_name"] = $row['kidUsername'];
                    session_write_close();
                }
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>