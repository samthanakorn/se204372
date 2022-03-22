<?php
    class Announcement{
        public $ANMID;
        public $ANMCompanyName;
        public $ANMBriefDescription;
        public $ANMFullDescription;
        public $ANMTimeDescription;
        public $ANMDate;
        public $ANMTime;

        public $LimitOne;
        public $LimitTwo;
        public function __construct($ANMID, $ANMCompanyName, $ANMBriefDescription, $ANMFullDescription, $ANMTimeDescription, $ANMDate, $ANMTime){
            $this->ANMID = $ANMID;
            $this->ANMCompanyName = $ANMCompanyName;
            $this->ANMBriefDescription = $ANMBriefDescription;
            $this->ANMFullDescription = $ANMFullDescription;
            $this->ANMTimeDescription = $ANMTimeDescription;
            $this->ANMDate = $ANMDate;
            $this->ANMTime = $ANMTime;
        }
        public static function get($LimitOne, $LimitTwo){
            require("connection_connect.php");
            $sql = "SELECT * FROM Announcement
            ORDER BY id DESC LIMIT $LimitOne, $LimitTwo";
            $result = $conn -> query($sql);
            $my_row = $result->fetch_assoc();
            $ANMID = $my_row['id'];
            $ANMCompanyName = $my_row['companyName'];
            $ANMBriefDescription=$my_row['briefDescription'];
            $ANMFullDescription=$my_row['fullDescription'];
            $ANMTimeDescription=$my_row['timeDescription'];
            $ANMDate = $my_row['date'];
            $ANMTime = $my_row['time'];
            
            require("connection_close.php");
            return new Announcement($ANMID, $ANMCompanyName, $ANMBriefDescription, $ANMFullDescription, $ANMTimeDescription, $ANMDate, $ANMTime);
        }

    }
?>