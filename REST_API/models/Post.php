<?php
    class Post {
        //DB stuff
        private $conn;
        // private $table = '';

        //Post Properties
        public $id_shape;
        public $size;
        public $width;
        public $length;

        //Constructor
        public function __construct($db) {
            $this->conn = $db;            
        }

        //Get Posts
        public function read() {
            //Create query
            $query = 'SELECT s.id_shape, s.size, s.width, s.length FROM shape s ORDER BY s.id_shape';

            //Prepare statement
            $stmnt = $this->conn->prepare($query);

            //Execute
            $stmnt->execute();

            return $stmnt;
        }

        //Get Single Post
        public function read_single() {
            $query = 'SELECT s.id_shape, s.size, s.width, s.length FROM shape s WHERE s.id_shape = ? LIMIT 0,1';

            //Prepare statement
            $stmnt = $this->conn->prepare($query);

            //Bind Param
            $stmnt->bindParam(1, $this->id_shape);

            //Execute
            $stmnt->execute();

            $row = $stmnt->fetch(PDO::FETCH_ASSOC);

            //Set properties
            $this->size = $row['size'];
            $this->width = $row['width'];
            $this->length = $row['length'];

        }

        //Post create
        public function create() {
            //create query
            $query = 'INSERT INTO shape 
            SET 
                size = :size,
                width = :width,
                length = :length';

            //Prepare statement
            $stmnt = $this->conn->prepare($query);

            //cleansing data
            $this->size = htmlspecialchars(strip_tags($this->size));
            $this->width = htmlspecialchars(strip_tags($this->width));
            $this->length = htmlspecialchars(strip_tags($this->length));

            //Bind data
            $stmnt->bindValue(':size', $this->size, PDO::PARAM_INT);
            $stmnt->bindValue(':width', $this->width, PDO::PARAM_INT);
            $stmnt->bindValue(':length', $this->length, PDO::PARAM_INT);

            //guarding execution
            if ($stmnt->execute()) {
                return true;
            } else {
                //print if error
                printf("Error: %s.\n", $stmnt->error);
                return false;
            }
        }
    }
?>