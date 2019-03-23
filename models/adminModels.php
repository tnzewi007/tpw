<?php
// namespace Models;
include "Connection.php";
class adminModels extends Connection
{
    public $conn;

    function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function allAudios()
    {
    	$sql = "SELECT * from audio";
    	$result = $this->conn->query($sql);
    	if ($result->num_rows >= 1){
    		$i = 0;
    		while ($row = $result->fetch_assoc()){
    			$audio_name = $row['audio_name'];
    			$audio_title = $row['audio_title'];
    			$file_size = $row['file_size'];
    			$id = $row['id'];
    			$date = $row['created_at'];
    			$details_array[$i] = array('id'=>$id, 'audio_title'=>$audio_title, 'audio_name'=>$audio_name, 'file_size'=>$file_size, 'date'=>$date);
    			$i++; 

    		}
    		return is_array($details_array) ? $details_array : false;
    	}
    }

    public function allVideos()
    {
    	$sql = "SELECT * from video";
    	$result = $this->conn->query($sql);
    	if ($result->num_rows >= 1){
    		$i = 0;
    		while ($row = $result->fetch_assoc()){
    			$video_name = $row['video_name'];
    			$video_title = $row['video_title'];
    			$file_size = $row['file_size'];
    			$id = $row['id'];
    			$date = $row['created_at'];
    			$details_array[$i] = array('id'=>$id, 'video_title'=>$video_title, 'video_name'=>$video_name, 'file_size'=>$file_size, 'date'=>$date);
    			$i++; 

    		}
    		return is_array($details_array) ? $details_array : false;
    	}
    }
}