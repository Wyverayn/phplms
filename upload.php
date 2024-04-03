<?php
include "libri_dbcon.php";

//target directory
$targetDir = "uploads/";

//check if the file was uploaded
if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $sub = $_POST['subject'];
    $code = $_POST['pdf-code'];

    $targetPath = $targetDir.$fileName;

    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetPath)) {

        $sql = "INSERT INTO `pdf-files` (`pdf-name`, `pdf-sub`, `pdf-code`) VALUES ('$fileName', '$sub', '$code')";
        if($conn->query($sql) == true) {
            $message = "File uploaded and saved to Database";
            header('location: Admins-Page.php?notif='.$message);
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