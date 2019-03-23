<?php
session_start();
include "models/Connection.php";
class registrationModels extends Connection
{
    public $conn;

    function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function loginUser($email, $password)
    {
    	$sql = "SELECT * from users where email='$email' and password='$password'";
    	$connect = $this->conn->query($sql) or die("Could not connect". $this->conn->error);

    	if($connect->num_rows == 1){
    		$_SESSION['email'] = $email;
			
			header("Location:dashboard.php");

    	}
    	else{
    		return "<p class='error'>Invalid Email and Password</p>";
    	}
    }
}
?>