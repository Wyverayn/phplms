<!DOCTYPE html>
<html lang="en" >

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    
    @font-face {
    font-family: plushfont;
    src: url(images/plushblack.otf);
}
* {
    padding: 0;
    margin:0;
}
#customers {
  font-family: plushfont;
  font-weight: 600;
  border-collapse: collapse;
  width: 90%;
  margin: 0 auto;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1f2833;
  color: white;
}
.block {
  display: block;
  width: 80%;
  border: none;
  background-color: #0b0c10;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}

.headr h3{
  color: #c5c6c7;
  font-family: plushfont;
  font-weight: 600;
  font-size: 60px;
  margin-left: 80px;
  margin-top: 30px;
}

.headr{
  width: auto;
  height: 250px;
  background-color: #1f2833;
  display: flex;
  justify-content: space-between;

}

.banner{
  margin-right: 80px;
  
}

.square{
  height: 160px;
  width: 180px;
  background-color: #c5c6c7;
}
.triangle{
  width: 0;
	height: 0;
	border-left: 90px solid transparent;
	border-right: 90px solid transparent;
	border-top: 50px solid #c5c6c7;
}

.middle{
  height: auto  ;
  padding-top: 50px;
  background-color: #c5c6c7;
  padding-bottom: 40px;
}

.backbut {
    color: #c5c6c7;
    background-color: #1f2833;
    border-radius: 25px;
    width: 80px;
    height: 40px;
   margin-bottom: 4px;
   margin-left: 80px;
   margin-top: 16px;
   padding-top: 5px;
   padding-left: 20px;
}

.backbut a {
  font-family: plushfont;
  font-weight: 600;
  font-size: 18px;
  text-decoration: none;
}

 .backbut:hover{
    background-color: #c5c6c7;
    color: #1f2833;
    transition: 0.8s;
} 

</style>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">



  
</head>

<body>
 <!-- <form action = "#" method="POST"> 
          <div class="w3-show-inline-block">
          <div class="w3-bar">
            <center>
              <input type="submit" value="Download as PDF" name="logout" class="w3-btn w3-black">
            </center>
        </div>
        </div>  
  </form>
   <form action = "logout.php" method="POST"> 
          <div class="w3-show-inline-block">
          <div class="w3-bar">
            <center>
              <input type="submit" value="LogOut" name="logout" class="w3-btn w3-black">
            </center>
        </div>
        </div>  
  </form> -->

  <div class="headr">
    
  <h3 style="margin-left: 80px;">Feedback <br> <span style="margin-left: 120px;">List</span></h3>

  <div class="banner">
    <div class="square">
      <img src="Untitled116_20240319220931.png" width="180">

    </div>
    <div class="triangle">

    </div>
  </div>
</div>

<div class="middle">
  <?php 
  session_start();
  require 'config.php';
   if (isset($_SESSION['login'])) {
          $userLoggedIn = $_SESSION['login'];
          $result = mysqli_query($conn,"SELECT * FROM poll");

            echo "<table border='1' id='customers'>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Feedback</th>
            <th>Suggestions</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['feedback'] . "</td>";
            echo "<td>" . $row['suggestions'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";                                                                    
}
  else {
  //header("Location: index.php");
  }
   ?>

<div class="backbut">
  <a href="../Admins-page.php" class="btn btn-primary"><i class="fas fa-arrow-left me-1"></i> Back</a>
</div>

</div>


  



  
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  
</body>

</html>
