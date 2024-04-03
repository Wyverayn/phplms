<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>USER</title>
  <link rel="stylesheet" href="userstyle.css">
</head>
<div class="header">
  <h2 class="btn">USER</h2>

  <div class="logoutbtn">
   <script>
      function confirmLogout() {
        if (confirm("Tapos nani sir? Ilog out nani?")) {
          window.location = "index.php";
        }
      }
    </script>

    <button onclick="confirmLogout()" class="btn">LOG OUT</button>
    </div>
</div>
<body>
  <div class="upperbody">
    <h1 class ="anim">LIBRI</h1>
    <h2>WELCOME</h2>
  </div>
  <div class="body">

    <!-- upperpart sang body ang may information -->
    <div class="info">
      <div>
        <h4 class="text-center">
          <h2>Information</h2>
        </h4>
      </div>

      <div class="about">
        <h5>Name:</h5>
        <h5>Level:</h5>
        <h5>Info:</h5>
      </div>
      <div class="gallery">
        <div class="imageItem1"></div>
      </div>
    </div>

    <div class="main-content"> 
      <h3>Main Content</h3> 
      <form method="post">
        <input type="text" name="search-string" placeholder="Search..." class="searchbar">
        <button type="submit">Submit</button>
      </form>
      <h3>BOOKS</h3>
            
      <div class="des-test">

      <?php
      include "libri_dbcon.php";

      $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'elex'";
      $display = $conn->query($pdf);
      $search_string = NULL;

      if ($display->num_rows > 0) {
        if(isset($_POST['search-string']) && !empty(trim($_POST['search-string']))) {
          $search_string = $_POST['search-string'];
          $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'elex' AND `pdf-code` LIKE '$search_string%'";
          $display = $conn->query($pdf);
          echo "<h2>Uploaded Files:</h2>";
          echo "<ul>";
          while ($row = $display->fetch_assoc()) {
            $filename = $row["pdf-name"];
            echo "<li>
              <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
            </li>";
          }
          echo "</ul>";
          } else {
            echo "<h2>Uploaded Files:</h2>";
            echo "<ul>";
            while ($row = $display->fetch_assoc()) {
              $filename = $row["pdf-name"];
              echo "<li>
                <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
              </li>";
            }
            echo "</ul>";
          }
        } else {
          echo "No files uploaded";
        }
      ?>   

      </div>
    </div>


    <!-- sidebar part (shelves) -->

    <div class="sidebar"><h3>Sidebar</h3>
      <div class="space"></div>
        <div>
          <a href="Student-page-math.php"><h4 class="btn">Mathematics</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-phys.php"><h4 class="btn">Physics</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-elex.php"><h4 class = "btn">Electrical/Electronics</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-comp.php"><h4 class = "btn" >Computer Studies</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-chem.php"><h4 class = "btn" >Chemistry</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-gec.php"><h4 class = "btn" >General Education</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-ent.php"><h4 class = "btn" >Entertainment/Literature</h4></a>
        </div>
        <div class="space"></div>
        <div>
          <a href="Student-page-misc.php"><h4 class = "btn" >Miscellaneous</h4></a>
        </div>
      </div>
    </div>



    <div class="subfeatures">
      <div class="discussion-container" id="discussion-container">
        <h2>Discussion</h2>
        <div class="disc-txtarea">
          <textarea id="discussion-text" placeholder="Start a discussion..." rows="8" cols="82"></textarea>
        </div>

        <div class="btn-post-container">
          <button class="btn-post" onclick="postDiscussion()">Post</button>
        </div>

        <ul id="discussion" style="overflow-y: scroll; overflow-x: hidden; max-height: 300px;">
          <li class="discussion-content" id="discussions"></li>
        </ul>
      </div>

      <script src="libri_comments.js"></script>
    </div>



</body>



<footer>
    <div class="footerdes">
        <div>
            <thead>
                <tr>
                    <th><h6>contact</h6></th>
                    <th><h6>feedback</h6></th>
                    <th><h6>more</h6></th>
                </tr>
            </thead>
        </div>
        </div>
</footer>
</html>
