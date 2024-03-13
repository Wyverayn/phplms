<?php

include "libri_dbcon.php";

$filename = $_GET["file"];

$delete = "DELETE FROM files_beta WHERE filename = '$filename'";
$result = $conn->query($delete);

if($result==TRUE) {
    $message = "Deleted";
    }


?>