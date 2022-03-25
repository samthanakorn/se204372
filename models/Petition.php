<?php
class Petition
{
    public $Username;
    public $CompanyID;
    public $DocumentRequire;
    public $InternshipStart;
    public $InternshipEnd;
    public $InternshipType;
    public $InternshipPosition;
    public $Status;
    public $Approved;

    public function __construct($Username, $CompanyID, $DocumentRequire, $InternshipStart, $InternshipEnd, $InternshipType, $InternshipPosition, $Status)
    {
        $this->Username = $Username;
        $this->CompanyID = $CompanyID;
        $this->DocumentRequire = $DocumentRequire;
        $this->InternshipStart = $InternshipStart;
        $this->InternshipEnd = $InternshipEnd;
        $this->InternshipType = $InternshipType;
        $this->InternshipPosition = $InternshipPosition;
        $this->Status = $Status;
    }
    public static function getAll()
    {
        $Petitionlist = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Petition
            ORDER BY username";
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
            $Petitionlist[] = new Petition($Username, $CompanyID, $DocumentRequire, $InternshipStart, $InternshipEnd, $InternshipType, $InternshipPosition, $Status);
        }
        require("connection_close.php");
        return $Petitionlist;
    }
    public static function get($Username)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM Petition WHERE username = '$Username'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $Username = $my_row['username'];
        $CompanyID = $my_row['id_company'];
        $DocumentRequire = $my_row['DocumentRequire'];
        $InternshipStart = $my_row['InternshipStart'];
        $InternshipEnd = $my_row['InternshipEnd'];
        $InternshipType = $my_row['InternshipType'];
        $InternshipPosition = $my_row['InternshipPosition'];
        $Status = $my_row['Status'];

        require("connection_close.php");
        return new Petition($Username, $CompanyID, $DocumentRequire, $InternshipStart, $InternshipEnd, $InternshipType, $InternshipPosition, $Status);
    }
    public static function CheckApproved()
    {
        require("connection_connect.php");
        $sql = "SELECT COUNT(username) AS Approved FROM Petition
        WHERE Status = 'Approve'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $Approved = $my_row['Approved'];

        require("connection_close.php");
        return $Approved;
    }
}
