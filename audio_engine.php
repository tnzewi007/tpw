<?php
   include("models/Connection.php");
     $file_title;
   class AudioUpload extends Connection{

      public $conn;

      function __construct(){
        $this->conn = $this->getConnection();
      }
      
      public function uploadAudio(){
      
      	if(isset($_POST['upload'])){
         $file_title = ucfirst(htmlentities($_POST['audio_title']));
         $file_name = $_FILES['audio_file']['name'];
         $file_location = $_FILES['audio_file']['tmp_name'];
         $file_type = $_FILES['audio_file']['type'];
         $file_size = $_FILES['audio_file']['size'];
         $generate = mt_rand(000000,999999);
         $error_array = array();

         if(empty($file_title) or is_numeric($file_title)){
         	$error_array[0] = "<p class='error'>Please enter a valid audio title</p>";
         }
         if(empty($file_name)){
         	 $error_array[1] = "<p class='error'>No file selected</p>";
         }

         if(count($error_array) != 0){
         	echo"<p>".implode($error_array)."</p>";
         }else{
         	
         	$sql = "SELECT * FROM audio WHERE audio_name = '$file_name'";
         	$result = $this->conn->query($sql);
         	if(!$result){
         		die($this->conn->error);
         	}else{
         		
              if($result->num_rows==1){
              	$location = 'audio/';
              	$file_name = "copy".$generate."new".$file_name;
              	move_uploaded_file($file_location,$location.$file_name);
              	$insert = "INSERT INTO audio(`id`,`audio_title`,`audio_name`,`file_size`,`created_at`,`updated_at`) VALUES('','$file_title','$file_name','$file_size',now(),'')";
              	$result2 = $this->conn->query($insert);
              	if(!$result){
              		die($this->conn->error);
              	}else{
              		echo "<p class='true'>Operation Successful</p>";
              	}
              }else{
              	$location = 'audio/';
              	move_uploaded_file($file_location,$location.$file_name);
              	$insert = "INSERT INTO audio(`id`,`audio_title`,`audio_name`,`file_size`,`created_at`,`updated_at`) VALUES('','$file_title','$file_name','$file_size',now(),'')";
              	$result2 = $this->conn->query($insert);
              	if(!$result){
              		die($this->conn->error);
              	}else{
              		echo "<p class='true'>Operation Successful</p>";
              	}
              }

         	}
         }

      	}
      }
   }

   $audio_object = new AudioUpload;
?>