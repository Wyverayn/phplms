<?php
include "libri_dbcon.php";
if($_REQUEST["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['login'])) {
        $username = $_POST['uname'];
        $password = $_POST['pwd'];


        // <!-- tables and column names to be modified -->
        $login = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($login);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row['password'] == $password) {
                session_start();

                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['login'] = true;

                if($row['user-type']='admin') {
                    header('location: Webpages/Admins-page.php');
                }
                else {
                    header('location: Webpages/Students-page.php');
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
