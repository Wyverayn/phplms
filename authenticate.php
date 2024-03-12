<?php
include "libri_dbcon.php";
if($_REQUEST["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['login'])) {
        $username = $_POST['uname'];
        $password = $_POST['pwd'];


        // <!-- tables and column names to be modified -->
        $login = "SELECT * FROM users WHERE un = '$username'";
        $result = $conn->query($login);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row['pw'] == $password) {
                session_start();

                $_SESSION['username'] = $row['un'];
                $_SESSION['password'] = $row['pwd'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['user_level'] = $row['level'];
                $_SESSION['login'] = true;

                if($row['type']='admin') {
                    header('location: admin.php');
                }
                else {
                    header('location: user.php');
                }
            }
            else {
                $message = "Invalid password! please try again.";
                header('location: index.php');
            }
        }
        else {
            $message = "This user does not exist.";
            header('location: index.php');
        }
    }
}
