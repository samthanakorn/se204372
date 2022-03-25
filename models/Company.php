<?php
    class Company{
        public $CPID;
        public $CPName;
        public $CPType;
        public $CPStatus;
        public $CPAddress;
        public $CPPhone;
        public $CPFax;
        public $CPJobTitle;
        public $CPCoordinator;
        public $CPPosCoordinator;
        public $CPSelectionStudent;
        public $CPCooperative;
        public $CPNatureOfWork;
        public $CPCompensation;
        public $CPRoom;
        public $CPAbilityStudent;
        public $CPNumberPeople;
        public $CPDate;
        public $CPTime;
        public $CPEmail;
        public $CPManager;
        public $CPPosManager;
        public $CNTPhone;
        public $CNTEmail;
        public $CNTDepartment;
        

        public $LimitOne;
        public $LimitTwo;
        public function __construct ($CPID, $CPName, $CPType, $CPStatus, $CPAddress, $CPPhone, 
        $CPFax, $CPJobTitle, $CPCoordinator, $CPPosCoordinator, $CPSelectionStudent, $CPCooperative, $CPNatureOfWork, 
        $CPCompensation, $CPRoom, $CPAbilityStudent, $CPNumberPeople, $CPDate, $CPTime, $CPEmail, $CPManager, $CPPosManager, $CNTPhone, $CNTEmail, $CNTDepartment) {
            $this->CPID = $CPID;
            $this->CPName = $CPName;
            $this->CPType = $CPType;
            $this->CPStatus = $CPStatus;
            $this->CPAddress = $CPAddress;
            $this->CPPhone = $CPPhone;
            $this->CPFax = $CPFax;
            $this->CPJobTitle = $CPJobTitle;
            $this->CPCoordinator = $CPCoordinator;
            $this->CPPosCoordinator = $CPPosCoordinator;
            $this->CPSelectionStudent = $CPSelectionStudent;
            $this->CPCooperative = $CPCooperative;
            $this->CPNatureOfWork = $CPNatureOfWork;
            $this->CPCompensation = $CPCompensation;
            $this->CPRoom = $CPRoom;
            $this->CPAbilityStudent = $CPAbilityStudent;
            $this->CPNumberPeople = $CPNumberPeople;
            $this->CPDate = $CPDate;
            $this->CPTime = $CPTime;
            $this->CPEmail = $CPEmail;
            $this->CPManager = $CPManager;
            $this->CPPosManager = $CPPosManager;
            $this->CNTPhone = $CNTPhone;
            $this->CNTEmail = $CNTEmail;
            $this->CNTDepartment = $CNTDepartment;
        }
        
        public static function getAll(){
            $DetailCompanylist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Company Where company_status = 1 ORDER BY id_company";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $CPID = $my_row['id_company'];
                $CPName = $my_row['company_name'];
                $CPType = $my_row['company_type'];
                $CPStatus = $my_row['company_status'];
                $CPAddress = $my_row['company_address'];
                $CPPhone = $my_row['company_phone'];
                $CPFax = $my_row['company_fax'];
                $CPJobTitle = $my_row['company_jopTitle'];
                $CPCoordinator = $my_row['company_coordinator'];
                $CPPosCoordinator = $my_row['company_posCooperative'];
                $CPSelectionStudent = $my_row['company_selectionStudent'];
                $CPCooperative = $my_row['company_cooperative'];
                $CPNatureOfWork = $my_row['company_natureOfWork'];
                $CPCompensation = $my_row['company_compensation'];
                $CPRoom = $my_row['company_room'];
                $CPAbilityStudent = $my_row['company_abilityStudent'];
                $CPNumberPeople = $my_row['company_numPeople'];
                $CPDate = $my_row['company_date'];
                $CPTime = $my_row['company_time'];
                $CPEmail = $my_row['company_email'];
                $CPManager = $my_row['company_manager'];
                $CPPosManager = $my_row['company_posManager'];
                $CNTPhone = $my_row['coordinator_phone'];
                $CNTEmail = $my_row['coordinator_email'];
                $CNTDepartment = $my_row['coordinator_department'];
                $DetailCompanylist[] = new Company($CPID, $CPName, $CPType, $CPStatus, $CPAddress, $CPPhone, 
                                             $CPFax, $CPJobTitle, $CPCoordinator,$CPPosCoordinator, $CPSelectionStudent, $CPCooperative, $CPNatureOfWork, 
                                             $CPCompensation, $CPRoom, $CPAbilityStudent, $CPNumberPeople, $CPDate, $CPTime, $CPEmail, $CPManager, $CPPosManager, $CNTPhone, $CNTEmail, $CNTDepartment);
            }
            require("connection_close.php");
            return $DetailCompanylist;
        }

        public static function get($LimitOne, $LimitTwo){
            require("connection_connect.php");
            $sql = "SELECT * FROM Company Where company_status = 1 
            ORDER BY id_company DESC LIMIT $LimitOne, $LimitTwo";
            $result = $conn -> query($sql);
            $my_row = $result->fetch_assoc();
                $CPID = $my_row['id_company'];
                $CPName = $my_row['company_name'];
                $CPType = $my_row['company_type'];
                $CPStatus = $my_row['company_status'];
                $CPAddress = $my_row['company_address'];
                $CPPhone = $my_row['company_phone'];
                $CPFax = $my_row['company_fax'];
                $CPJobTitle = $my_row['company_jopTitle'];
                $CPCoordinator = $my_row['company_coordinator'];
                $CPPosCoordinator = $my_row['company_posCooperative'];
                $CPSelectionStudent = $my_row['company_selectionStudent'];
                $CPCooperative = $my_row['company_cooperative'];
                $CPNatureOfWork = $my_row['company_natureOfWork'];
                $CPCompensation = $my_row['company_compensation'];
                $CPRoom = $my_row['company_room'];
                $CPAbilityStudent = $my_row['company_abilityStudent'];
                $CPNumberPeople = $my_row['company_numPeople'];
                $CPDate = $my_row['company_date'];
                $CPTime = $my_row['company_time'];
                $CPEmail = $my_row['company_email'];
                $CPManager = $my_row['company_manager'];
                $CPPosManager = $my_row['company_posManager'];
                $CNTPhone = $my_row['coordinator_phone'];
                $CNTEmail = $my_row['coordinator_email'];
                $CNTDepartment = $my_row['coordinator_department'];
               
            
            require("connection_close.php");
            return new Company($CPID, $CPName, $CPType, $CPStatus, $CPAddress, $CPPhone, 
            $CPFax, $CPJobTitle, $CPCoordinator,$CPPosCoordinator, $CPSelectionStudent, $CPCooperative, $CPNatureOfWork, 
            $CPCompensation, $CPRoom, $CPAbilityStudent, $CPNumberPeople, $CPDate, $CPTime, $CPEmail, $CPManager, $CPPosManager, $CNTPhone, $CNTEmail, $CNTDepartment);
        }

        public static function addCompany($CPID, $CPName, $CPType, $CPStatus, $CPAddress, $CPPhone, 
        $CPFax, $CPJobTitle, $CPCoordinator,$CPPosCoordinator, $CPSelectionStudent, $CPCooperative, $CPNatureOfWork, 
        $CPCompensation, $CPRoom, $CPAbilityStudent, $CPNumberPeople, $CPDate, $CPTime, $CPEmail, $CPManager, $CPPosManager, $CNTPhone, $CNTEmail, $CNTDepartment){
            require("connection_connect.php");
            $sql = "INSERT INTO Company(id_company, company_name, company_type, company_status, company_address,
            company_phone, company_fax, company_jopTitle, company_coordinator, company_posCooperative,
            company_selectionStudent, company_cooperative, company_natureOfWork, company_compensation, company_room,
            company_abilityStudent, company_numPeople, company_date, company_time, company_email, company_manager, company_posManager, coordinator_phone, coordinator_email, coordinator_department)
            VALUES('$CPID', '$CPName', '$CPType', '$CPStatus', '$CPAddress','$CPPhone', '$CPFax', '$CPJobTitle', '$CPCoordinator', '$CPPosCoordinator', 
            '$CPSelectionStudent', '$CPCooperative', '$CPNatureOfWork', '$CPCompensation', '$CPRoom', '$CPAbilityStudent', '$CPNumberPeople', '$CPDate', '$CPTime', '$CPEmail', '$CPManager', '$CPPosManager', '$CNTPhone', '$CNTEmail', '$CNTDepartment')";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "ADD SUCCESS!";
        }
        public static function search($key){
            $searchlist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Company 
            WHERE (id_company like '%$key%' or company_name like '%$key%' or company_type like '%$key%'
                   or company_address like '%$key%' or company_phone like '%$key%' or company_fax like '%$key%' or company_jopTitle like '%$key%' 
                   or company_coordinator like '%$key%' or company_posCooperative like '%$key%' or company_selectionStudent like '%$key%' or company_cooperative like '%$key%' 
                   or company_natureOfWork like '%$key%' or company_compensation like '%$key%' or company_room like '%$key%' or company_abilityStudent like '%$key%' 
                   or company_numPeople like '%$key%' or company_email like '%$key%' or company_manager like '%$key%' or company_posManager like '%$key%' or coordinator_phone like '%$key%' 
                   or coordinator_email like '%$key%' or coordinator_department like '%$key%')";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $CPID = $my_row['id_company'];
                $CPName = $my_row['company_name'];
                $CPType = $my_row['company_type'];
                $CPStatus = $my_row['company_status'];
                $CPAddress = $my_row['company_address'];
                $CPPhone = $my_row['company_phone'];
                $CPFax = $my_row['company_fax'];
                $CPJobTitle = $my_row['company_jopTitle'];
                $CPCoordinator = $my_row['company_coordinator'];
                $CPPosCoordinator = $my_row['company_posCooperative'];
                $CPSelectionStudent = $my_row['company_selectionStudent'];
                $CPCooperative = $my_row['company_cooperative'];
                $CPNatureOfWork = $my_row['company_natureOfWork'];
                $CPCompensation = $my_row['company_compensation'];
                $CPRoom = $my_row['company_room'];
                $CPAbilityStudent = $my_row['company_abilityStudent'];
                $CPNumberPeople = $my_row['company_numPeople'];
                $CPDate = $my_row['company_date'];
                $CPTime = $my_row['company_time'];
                $CPEmail = $my_row['company_email'];
                $CPManager = $my_row['company_manager'];
                $CPPosManager = $my_row['company_posManager'];
                $CNTPhone = $my_row['coordinator_phone'];
                $CNTEmail = $my_row['coordinator_email'];
                $CNTDepartment = $my_row['coordinator_department'];
                $searchlist[] = new Company($CPID, $CPName, $CPType, $CPStatus, $CPAddress, $CPPhone, 
                                             $CPFax, $CPJobTitle, $CPCoordinator,$CPPosCoordinator, $CPSelectionStudent, $CPCooperative, $CPNatureOfWork, 
                                             $CPCompensation, $CPRoom, $CPAbilityStudent, $CPNumberPeople, $CPDate, $CPTime, $CPEmail, $CPManager, $CPPosManager, $CNTPhone, $CNTEmail, $CNTDepartment);
            }
            require("connection_close.php");
            return $searchlist;
        }
        public static function update($CPID, $CPName, $CPType, $CPStatus, $CPAddress, $CPPhone, 
        $CPFax, $CPJobTitle, $CPCoordinator,$CPPosCoordinator, $CPSelectionStudent, $CPCooperative, $CPNatureOfWork, 
        $CPCompensation, $CPRoom, $CPAbilityStudent, $CPNumberPeople, $CPEmail, $CPManager, $CPPosManager, $CNTPhone, $CNTEmail, $CNTDepartment){
            require("connection_connect.php");
            $sql = "UPDATE Company
            SET company_name = '$CPName', company_type = '$CPType', company_status = '$CPStatus',  company_address = '$CPAddress', company_phone = '$CPPhone', 
            company_fax = '$CPFax', company_jopTitle = '$CPJobTitle',  company_coordinator = '$CPCoordinator', company_posCooperative = '$CPPosCoordinator', company_selectionStudent = '$CPSelectionStudent', 
            company_cooperative = '$CPCooperative',  company_natureOfWork = '$CPNatureOfWork', company_compensation = '$CPCompensation', company_room = '$CPRoom', company_abilityStudent = '$CPAbilityStudent',
            company_numPeople = '$CPNumberPeople', company_email = '$CPEmail', company_manager = '$CPManager', company_posManager = '$CPPosManager', coordinator_phone = '$CNTPhone', coordinator_email = '$CNTEmail', coordinator_department = '$CNTDepartment'
            WHERE id_company = '$CPID'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Update SUCCESS!";
        }
        
    }
