<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">

</head>
<body>

    <div class="header">
        
    </div>

    <div class="wholebody">


        <div class="side-nav">
            <div class="user">
                <img src="images/Untitled1.png" class="user-img">
                <div>
                    <h2>Random</h2>
                    <p>USER</p>
                </div>
                <img src="images/star.png" class="star-img">
            </div>
            <ul>
                <li><img src="images/dashboard.png"><a href="#">More</li>
                <li><img src="images/reports.png"><a href="#">Profile</a></li>
                <li><img src="images/messages.png"><a href="#">Feedback</a></li>
                <li><img src="images/projects.png"><a href="#">About</a></li>
                <li><img src="images/members.png"><button onclick = "hideShow()">Discussions</button></a></li>
                <li><img src="images/setting.png"><a href="#">Settings</a></li>
            </ul>

            <ul>
                <li><img src="images/logout.png">
                
                    <div class="logoutbtn">
                        <script>
                           function confirmLogout() {
                             if (confirm("Tapos nani sir? Ilog out nani?")) {
                               window.location = "index.php";
                             }
                           }
                         </script>
                     
                         <button onclick="confirmLogout()" class="btn">Log Out</button>
                         </div>
                
                </li>
            </ul>

            <div id = "main" class="main">
                <script src ="hiddencategories.js"></script>
                <div class="subfeatures">

                    <div id="comments-container">
                    <h2>Discussion</h2>
                    <div id="discussions"></div>
                    <textarea id="discussion-text" placeholder="Start a discussion..."></textarea>
                    <button onclick="postDiscussion()">Post</button>
                    </div>
                    <script src="libri_comments.js"></script>
                
                    </div>
                
            
            </div> 

            
        </div>

        <div class="upper">
            <div class="words">
            <h6>LIBRI</h6>
            <h4>explore, learn, succeed.</h4>
            <input type="text" placeholder="Enter book title" class="searchbar" size="70px">

        </div>
         </div>


        <div class="lower">
            <div class="books">
               
            <div class="des-test">
              <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file"  name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="submit"> 
                <div class="upload-pdf">
            
                <!-- need butangan class, leave nalang ni sa mga ga css -->
                <select id="subject" name="subject" class="" required>
                  <option value="math">Mathematics</option>
                  <option value="phys">Physics</option>
                  <option value="elex">Electrical/Electronics</option>
                  <option value="comp">Computer Studies</option>
                  <option value="comp">Chemistry</option>
                  <option value="gec">General Education</option>
                  <option value="ent">Entertainment/Literatures</option>
                  <option value="misc">Miscellaneous</option>
                </select>
                <input type="text" placeholder="PDF Code" id="pdf-code" name="pdf-code" class="" required>
                <input type="text" placeholder="Please put the file description here." id="pdf-desc" name="pdf-desc" class="" maxlength="200"> <!-- padakuan ni dapat -->
          </div>
              </form>
          </div>
          


              <?php
              include "libri_dbcon.php";

              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'math'";
              $display = $conn->query($pdf);
              echo "<h5>Mathematicss:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'phys'";
              $display = $conn->query($pdf);
              echo "<h5>Physics:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'elex'";
              $display = $conn->query($pdf);
              echo "<h5>Electrical/Electronics:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'comp'";
              $display = $conn->query($pdf);
              echo "<h5>Computer Studies:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'chem'";
              $display = $conn->query($pdf);
              echo "<h5>Chemistry:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'gec'";
              $display = $conn->query($pdf);
              echo "<h5>General Education:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'ent'";
              $display = $conn->query($pdf);
              echo "<h5>Entertainment/Literatures:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename) . "'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }


              $pdf = "SELECT * FROM `pdf-files` WHERE `pdf-sub` = 'misc'";
              $display = $conn->query($pdf);
              echo "<h5>Miscellaneous:</h5>";
              if ($display->num_rows > 0) {
                echo "<ul>";
                while ($row = $display->fetch_assoc()) {
                  $filename = $row["pdf-name"];
                  echo "<li>
                  <a href='download.php?file=" . urlencode($filename)."'>$filename</a>
                  <a href='delete-file.php?file=". urlencode($filename)."'>Delete</a>
                  </li>";
                }
                echo "</ul>";
              } else {
               echo "No files uploaded yet.";
              }

            ?>




            </div>
    
            <!-- <div class="category">
                SHELVES
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
            </div> -->

            </div>
        </div>
    </div> 

    <disv class="subfeatures">

    <div class="discussion-container" id="discussion-container">
      <h2>Discussion</h2>
      <div class="disc-txtarea">
        <textarea id="discussion-text" placeholder="Start a discussion..." rows="8" cols="80  "></textarea>
      </div>
      <button onclick="postDiscussion()">Post</button>
      <div class="discussion-content" id="discussions"></div>
    </div>

    <script src="libri_comments.js"></script>

    </div>



</body>
</html>
