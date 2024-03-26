<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}


if($imageFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $conn = mysqli_connect("localhost", "root", "", "teacher_files");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $subject = $_POST['subject'];
        $filename = basename($_FILES["fileToUpload"]["name"]);

        $sql = "INSERT INTO files (subject, filename) VALUES ('$subject', '$filename')";

        if (mysqli_query($conn, $sql)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>