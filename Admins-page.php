<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ADMIN</title>
    <link rel="stylesheet" href="adminstyle.css">
  </head>
<div class="header">
  <h2 class="btn">ADMIN</h2>
</div>
<body>
  <div class="upperbody">
    <h1 class ="anim">LIBRI</h1>
    <h2>WELCOME</h2>
  </div>
  <div class="body">
         <!-- upperpart sang body ang may information -->
    <div class="info">
        <div><h4 class="text-center"><h2>Information</h2></h4></div>
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
          <input type="text" placeholder="Search..." class="searchbar">
          <button type="button" class="btn">UPLOAD</button>

    <!-- ang table -->
            <h3>BOOKS</h3>
            
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
                  <option value="gec">General Education</option>
                  <option value="ent">Entertainment/Literatures</option>
                  <option value="misc">Miscellaneous</option>
                </select>
                <input type="text" placeholder="PDF Code" id="pdf-code" name="pdf-code" class="" required>
                <input type="text" placeholder="Please put the file description here." id="pdf-desc" name="pdf-desc" class="" maxlength="200"> <!-- padakuan ni dapat -->
          </div>
              </form>
            </div>
          </div> 
            
            
          </div>
            </div> 
            <!-- end of table -->


    </div>


    <!-- log out btn relocate please -->
    <script>
      function confirmLogout() {
        if (confirm("Tapos nani sir? Ilog out nani?")) {
          window.location = "index.php";
        }
      }
    </script>

    <button onclick="confirmLogout()">Logout</button>
    <!-- end -->

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
