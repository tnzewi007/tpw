<?php

if(isset($_REQUEST["file"])){
    $file = urldecode($_REQUEST["file"]);
    
    //database connection
    include ("includes/connect.php");
    $sql = "SELECT * FROM audio WHERE audio_name = '$file'";

        $result = $conn->query($sql);
            if(!$result){
                die($conn->error);
            }else{
                if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $name = $row['audio_name'];

        $date_updated = $row['created_at'];

        $filesize = $row['file_size'];

    


        
    }
}


    // Get parameters
    //$file = urldecode($_REQUEST["file"]); // Decode URL-encoded string
    $filepath = "audio/" . $file;
    
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}
}

?>