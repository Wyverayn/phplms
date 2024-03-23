<?php
    include "dbcon.php";

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
        
        if($id == NULL || $firstname == NULL || $lastname == NULL || $birth == NULL || $yearsec == NULL || $role == NULL || $un == NULL || $pass == NULL) {
            echo "All fields are required.";
            exit();
        }

        $check = "SELECT * FROM accs WHERE idno = '$id' OR username = '$un'";
        $result = $conn->query($check);

        if($result->num_rows > 0) {
        echo "Username or ID already in Databse, Please Try again!";
        }
        else{
                $insert = "INSERT INTO users(`idno`, `lastname`, `firstname`, `mi`, `birthdate`, `role`, `year_section`)
                VALUES('$id', '$lastname', '$firstname', '$mi', '$birth', '$role', '$yearsec')";

                $result = $conn->query($insert);

                $insert = "INSERT INTO accs(`idno`, `username`, `pass`)
                VALUES('$id', '$un', '$pass')";
        
                $result = $conn->query($insert);

                if($result == TRUE){
                    $message = "Student was Successfully Saved.";
                    header('location: Register.php?notif='.$message);
                } else {
                    $message = "Error Saving.";
                    header('location: Register.php?notif='.$message);
                }
            }
    }
?>
