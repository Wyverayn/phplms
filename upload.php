<?php

include "libri_dbcon.php";

//target directory
$targetDir = "uploads/";

//check if the file was uploaded
if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $fileName = basename($_FILES["file"]["name"]);
    $targetPath = $targetDir.$fileName;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {

        $sql = "INSERT INTO files_beta (filename, filepath) VALUES ('$fileName', '$targetPath')";
        if($conn->query($sql) == true) {
            echo "File uploaded and saved to Database";
        }
        else {
            echo "Error: ".$sql." Error Details: ".$conn->error;
        }
    }
    else {
        echo "Error moving the file";
    }
}
else {
    echo "File not uploaded.";
}
$conn->close();
?>