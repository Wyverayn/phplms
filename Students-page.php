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
    <h2>USER</h2>
</div>
<body>
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
        
   
    
    <div class="temp"> <!--Added div here-->
         <div class="main-content"> <h3>Main Content</h3> 
         <div class="tablefunctions">
            <input type="text" placeholder="Search...">
            <a href="#" class="btn btn-primary"><h4>Download</h4></a>
            <a href="#" class="btn btn-primary"><h4>Delete</h4></a>
         </div>

            <h3>BOOKS</h3>
                        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Book1</td>
                    <td>Clint</td>
                    <td>May</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Book2</td>
                    <td>Geanne</td>
                    <td>November</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Book3</td>
                    <td>Von</td>
                    <td>July</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>Book4</td>
                    <td>Ralph</td>
                    <td>September</td>
                    </tr>
                    <tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>Book5</td>
                    <td>Vincent</td>
                    <td>December</td>
                    </tr>
                    <tr>
                </tbody>
                </table>

            </div> 

            <!-- Scroll bar here is a must -->
            <div class="sidebar"><h3>Sidebar</h3>
             <div class="space"></div>
              <div>
                <a href="#"><h4>Mathematics</h4></a>
              </div>
              <div class="space"></div>
              <div>
                <a href="#"><h4>Physics</h4></a>
              </div>
              <div class="space"></div>
              <div>
                <a href="#"><h4>Programming</h4></a>
              </div>
              <div class="space"></div>
              <div>
                <a href="#"><h4>Electronics</h4></a>
              </div>
              <div class="space"></div>
              <div>
                <a href="#"><h4>General Education</h4></a> <!-- Here includes GEC/GEE subs -->
              </div>
              <div class="space"></div>
              <div>
                <a href="#"><h4>Research Articles</h4></a>
              </div>
              <div class="space"></div>
              <div>
                <a href="#"><h4>Entertainment</h4></a>
              </div>
            </div>
    </div> <!--placed the main contents and sidebar in one container-->

            <div class="body-lower">
              <button id="logout-btn">Logout</button>
              <script>
                document.getElementById('logout-btn').addEventListener('click', function() {
                  const confirmLogout = confirm('Malog out kana? Di kana magtuon haw?');
                  if (confirmLogout) {
                    window.location.href = 'index.php';
                  }
                });
              </script>
            </div>

</body>




<!-- Design testing,  delete if done-->
<div class="des-test">
            <table class="tab-des-test">
              <tbody>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
                <tr class="tr-test">
                  <td class="td-test-image">
                    Image
                  </td>
                  <td class="td-test-desc">
                    Descriptions, aaaaaupload, and download
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Design testing, delete if done-->


          

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
