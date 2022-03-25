<?php
class Table
{
    public $Username;
    public $CompanyID;
    public $DocumentRequire;
    public $InternshipStart;
    public $InternshipEnd;
    public $InternshipType;
    public $InternshipPosition;
    public $Status;


    //Information Entity

    public $StudentName;

    public $StudentLastName;

    //Company Entity
    public $CompanyName;

    public $CompanyAddress;

    public $CompanyPhone;

    public $CompanyEmail;

    public $CompanyManager;

    public $CompanyPosManager;

    public $CoordinatorName;

    public $CoordinatorPhone;

    public $CoordinatorEmail;


    public function __construct($Username, $CompanyID, $DocumentRequire, $InternshipStart, 
                                $InternshipEnd, $InternshipType, $InternshipPosition, $Status,$StudentName,$StudentLastName,$CompanyAddress,
                                $CompanyPhone,$CompanyEmail,$CompanyManager,$CompanyPosManager,$CoordinatorName,$CoordinatorPhone, $CoordinatorEmail,$CompanyName)
    {
        $this->Username = $Username;
        $this->CompanyID = $CompanyID;
        $this->DocumentRequire = $DocumentRequire;
        $this->InternshipStart = $InternshipStart;
        $this->InternshipEnd = $InternshipEnd;
        $this->InternshipType = $InternshipType;
        $this->InternshipPosition = $InternshipPosition;
        $this->Status = $Status;
        $this->StudentName = $StudentName;
        $this->StudentLastName = $StudentLastName;
        $this->CompanyAddress = $CompanyAddress;
        $this->CompanyPhone = $CompanyPhone;
        $this->CompanyEmail = $CompanyEmail;
        $this->CompanyManager = $CompanyManager;
        $this->CompanyPosManager = $CompanyPosManager;
        $this->CoordinatorName = $CoordinatorName;
        $this->CoordinatorPhone = $CoordinatorPhone;
        $this->CoordinatorEmail = $CoordinatorEmail;
        $this->CompanyName = $CompanyName;
    }


    public static function getAll()
    {
        $Petitionlist = [];
        require("connection_connect.php");
        $sql = "SELECT username,name,lastname,company_name,InternshipType,DocumentRequire,Status,InternshipPosition,phone,InternshipStart,InternshipEnd,company_address,company_manager,company_phone,company_posManager,company_email,company_coordinator,coordinator_phone,coordinator_email FROM Information NATURAL join Petition NATURAL join Company ORDER BY username";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Username = $my_row['username'];
            $CompanyID = $my_row['id_company'];
            $DocumentRequire = $my_row['DocumentRequire'];
            $InternshipStart = $my_row['InternshipStart'];
            $InternshipEnd = $my_row['InternshipEnd'];
            $InternshipType = $my_row['InternshipType'];
            $InternshipPosition = $my_row['InternshipPosition'];
            $Status = $my_row['Status'];
            $StudentName = $my_row['name'];
            $StudentLastName = $my_row['lastname'];
            $DocumentRequire = $my_row['DocumentRequire'];
            $CompanyAddress = $my_row['company_address'];
            $CompanyPhone = $my_row['company_phone'];
            $CompanyEmail = $my_row['company_email'] ;
            $CompanyManager = $my_row['company_manager'];
            $CompanyPosManager = $my_row['company_posManager'] ;
            $CoordinatorName = $my_row['company_coordinator'];
            $CoordinatorPhone = $my_row['coordinator_phone'];
            $CoordinatorEmail = $my_row['coordinator_email'];
            $CompanyName = $my_row['company_name'];
            $Tablelist[] = new Table($Username, $CompanyID, $DocumentRequire, $InternshipStart, 
                                           $InternshipEnd, $InternshipType, $InternshipPosition, $Status,$StudentName,$StudentLastName,$CompanyAddress
                                          ,$CompanyPhone,$CompanyEmail,$CompanyManager,$CompanyPosManager,$CoordinatorName,$CoordinatorPhone, $CoordinatorEmail,$CompanyName);
        }
        require("connection_close.php");
        return $Tablelist;
    }
    public static function Add($status)
    {   
        require("connection_connect.php");
        $sql = " INSERT INTO `Petition` (`Status`) 
                 VALUES ('$status')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
}
