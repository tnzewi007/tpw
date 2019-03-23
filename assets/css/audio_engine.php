<?php

     $file_title;
   class AudioUpload{
      
      public function uploadAudio(){
      	include("includes/connect.php");
      	if(isset($_POST['upload'])){
         $file_title = ucfirst(htmlentities($_POST['audio_title']));
         $file_name  = $_FILES['audio_file']['name'];
         $file_location = $_FILES['audio_file']['tmp_name'];
         $file_type = $_FILES['audio_file']['type'];
         $file_size = $_FILES['audio_file']['size'];
         $generate = mt_rand(000000,999999);
         $error_array = array();

         if(empty($file_title) or is_numeric($file_title)){
         	$error_array[0] = "<p class='error'>Please enter a valid audio title</p>";
         }
         if(empty($file_name)){
         	 $error_array[1] = "<p class='error'>Select a file</p>";
         }

         if(count($error_array) != 0){
         	echo"<ul class='d_list'><li>".implode($error_array)."</li></ul>";
         }else{
         	$sql = "SELECT * FROM audio WHERE audio_name = '$file_name'";
         	$result = $conn->query($sql);
         	if(!$result){
         		die($conn->error);
         	}else{
         		$location = 'audio/';
              if($result->num_rows==1){
              	$file_name = "copy".$generate."new".$file_name;
              	move_uploaded_file($file_location,$location,$file_name);
              	$insert = "INSERT INTO audio(`id`,`audio_title`,`audio_name`,`file_size`,`created_at`,`updated_at`) VALUES('','$file_title','$file_name','$file_size',now(),'')";
              	$result2 = $conn->query($insert);
              	if(!$result){
              		die($conn->error);
              	}else{
              		echo "<p class='true'>Operation Successful</p>";
              	}
              }else{
              	move_uploaded_file($file_location,$location,$file_name);
              	$insert = "INSERT INTO audio(`id`,`audio_title`,`audio_name`,`file_size`,`created_at`,`updated_at`) VALUES('','$file_title','$file_name','$file_size',now(),'')";
              	$result2 = $conn->query($insert);
              	if(!$result){
              		die($conn->error);
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