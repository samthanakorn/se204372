<?php
    class InformationDetail{
        public $Username;
        public $Name;
        public $LastName;
        public $Age;
        public $Phone;
        public $Address;
        public function __construct($Username, $Name, $LastName, $Age, $Phone, $Address){
            $this->Username = $Username;
            $this->Name = $Name;
            $this->LastName = $LastName;
            $this->Age = $Age;
            $this->Phone = $Phone;
            $this->Address = $Address;
        }
        public static function getAll(){
            $Informationlist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Information
            ORDER BY username";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $Username = $my_row['username'];
                $Name = $my_row['name'];
                $LastName=$my_row['lastname'];
                $Age = $my_row['age'];
                $Phone = $my_row['phone'];
                $Address = $my_row['address'];
                $Informationlist[] = new InformationDetail($Username, $Name, $LastName, $Age, $Phone, $Address);
            }
            require("connection_close.php");
            return $Informationlist;
        }
        public static function get($Username) {
            require("connection_connect.php");
            $sql = "SELECT * FROM Information
            WHERE username = '$Username'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $Username = $my_row['username'];
            $Name = $my_row['name'];
            $LastName = $my_row['lastname'];
            $Age = $my_row['age'];
            $Phone = $my_row['phone'];
            $Address = $my_row['address'];

            require("connection_close.php");
    
            return new InformationDetail($Username, $Name, $LastName, $Age, $Phone, $Address);
        }
    }
?>