<?php
   include("models/Connection.php");
    // $file_title;
   class audio_engineControllers extends Connection{

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
            }
            else{
         	          $this->audioInsert($file_title, $file_name, $file_location, $file_type, $file_size, $generate);

            }

          }
      }


      public function audioInsert($file_title, $file_name, $file_location, $file_type, $file_size, $generate)
      {
          $call = new audio_engineModels;
          $result = $call->audio($file_title, $file_name, $file_location, $file_type, $file_size, $generate);

          echo $result;
      }

}         	   
$audio_object = new audio_engineControllers;
?>