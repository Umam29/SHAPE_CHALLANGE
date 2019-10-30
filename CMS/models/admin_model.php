<?php 

    class admin {
        //DB stuff
        private $conn;

        public $adm;

        function __construct($db) {
            $this->conn = $db;
        }


        public function read() {
            try {
                $query = "SELECT * FROM admin";

                $stmnt = $this->conn->prepare($query);
                $stmnt->execute();
                $this->adm = $stmnt->fetchAll(PDO::FETCH_OBJ);
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function register($name, $username, $pass, $level) {
            try {
                $query = "INSERT INTO `admin` (`id`, `name`, `username`, `password`, `level`) VALUES (NULL, '$name', '$username', '$pass', '$level')";

                $stmnt = $this->conn->prepare($query);
                $stmnt->execute();
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function enterAdmin($username, $pass) {
            try {
                $query = "SELECT * FROM admin WHERE username=:username AND password=:pass";

                $stmnt = $this->conn->prepare($query);
                $stmnt->execute(array(':username' => $username, ':pass' => $pass));
                $row = $stmnt->fetch(PDO::FETCH_ASSOC);
                if($row != null)
                {
                    session_regenerate_id();
                    $_SESSION["authorized"] = true;
                    $_SESSION["sess_id"] = $row['id'];
                    $_SESSION["sess_name"] = $row['username'];
                    session_write_close();
                }
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function del($id) {
            try {
                $query = "DELETE FROM admin WHERE id=:id";

                $stmnt = $this->conn->prepare($query);
                $stmnt->execute(array(':id' => $id));
                return true;
            } catch(PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }

?>