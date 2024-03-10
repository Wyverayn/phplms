<?php
    include "dbcon.php";

    if(isset($_POST['submit'])){
        $id = $_POST['idnumber'];
        $firstname = $_POST['first'];
        $mi = $_POST['mi'];
        $lastname = $_POST['last'];        
        $birth = $_POST['birth'];
        $role = $_POST['role'];
        $yearsec = $_POST['year_section'];
        

        $insert = "INSERT INTO users(`idno`, `lastname`, `firstname`, `mi`, `birthdate`, `role`, `year_section`)
        VALUES('$id', '$lastname', '$firstname', '$mi', '$birth', '$role', '$yearsec')";
        
        $result = $conn->query($insert);

        if($result == TRUE){
            $message = "Student was Successfully Saved.";
            header('location: Register.php?notif='.$message);
        } else {
            $message = "Error Saving.";
            header('location: Register.php?notif='.$message);
        }
    }
?>
