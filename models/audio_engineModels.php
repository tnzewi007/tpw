<?php
include "Connection.php";
class audio_engineModels extends Connection
{
    public $conn;

    function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function audio($file_title, $file_name, $file_location, $file_type, $file_size, $generate)
    {
    	$sql = "SELECT * FROM audio WHERE audio_name = '$file_name'";
        $result = $this->conn->query($sql);
         	if(!$result){
         		die($this->conn->error);
         	}
         	else{
         		
              if($result->num_rows==1){
              	$location = 'audio/';
              	$file_name = "copy".$generate."new".$file_name;
              	move_uploaded_file($file_location,$location.$file_name);
              	$insert = "INSERT INTO audio(`id`,`audio_title`,`audio_name`,`file_size`,`created_at`,`updated_at`) VALUES('','$file_title','$file_name','$file_size',now(),'')";
              	$result2 = $this->conn->query($insert);
              	if(!$result){
              		die($this->conn->error);
              	}else{
              		return "<p class='true'>Operation Successful</p>";
              	}
              }else{
              	$location = 'audio/';
              	move_uploaded_file($file_location,$location.$file_name);
              	$insert = "INSERT INTO audio(`id`,`audio_title`,`audio_name`,`file_size`,`created_at`,`updated_at`) VALUES('','$file_title','$file_name','$file_size',now(),'')";
              	$result2 = $this->conn->query($insert);
              	if(!$result){
              		die($this->conn->error);
              	}else{
              		return "<p class='true'>Operation Successful</p>";
              	}
              }

         	}
         }

      	}
      }
   }

    }
}
?>