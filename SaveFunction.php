<?php
    include "libri_dbcon.php";

    if(isset($_POST['submit'])){
        $id = $_POST['idnumber'];
        $firstname = $_POST['first'];
        $mi = $_POST['mi'];
        $lastname = $_POST['last'];        
        $birth = $_POST['birth'];
        $yearsec = $_POST['Section'];
        $role = $_POST['User_Level'];
        $un = $_POST['username'];
        $pass = $_POST['pass'];
        

        $insert_users = "INSERT INTO users(`idno`, `lastname`, `firstname`, `mi`, `birthdate`, `role`, `year_section`)
        VALUES('$id', '$lastname', '$firstname', '$mi', '$birth', '$role', '$yearsec')";

        $result = $conn->query($insert_users);

        $insert_accs = "INSERT INTO accs(`idno`, `username`, `pass`)
        VALUES('$id', '$un', '$pass')";
        
        $result = $conn->query($insert_accs);

        if($result == TRUE){
            $message = "Student was Successfully Saved.";
            header('location: index.php?notif='.$message);
        } else {
            $message = "Error Saving.";
            header('location: Register.php?notif='.$message);
        }
    }
?>
