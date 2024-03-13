<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Libri</title>
    <link rel = "stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel ="Stylesheet" href ="indexstyle.css">
    <link rel = "icon" href = "images/logoL.png">
</head>


<body class = "body-home">
    <div class = "black-fill">

        <div class ="container">
          <br><br>
          <nav class="navbar navbar-expand-lg bg-body-tertiary" id = "homeNav">
            <div class="container-fluid">
              <a class="navbar-brand" href="#welcome">
                <img src="images/logoL.png" width = "100">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">
                      About
                    </a>
                  </li>
                </ul>
                <ul class = "navbar-nav me-right mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Login
                    </a>
                  </li>
                </ul>    
              </div>
            </div>
          </nav>

          <section id="welcome" class = "welcome-text" >
            <img src = "images/logoL.png">
            <h4>Welcome to Libri </h4>
            <p>In PROgrammer ng Pontevedra nga si Von we trust</p>
          </section>



          <!-- code na diri ni ralph para sa login -->

          <div class="Container">
            <div class="Box">
              <div>
                <img src="logo.png" class="logo">
              </div>
              <div class="Title">
                <table>
                  <tr>
                    <td colspan="2" align="center">
                      <h2>LOGIN</h2>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="Form">
                <form action="authenticate.php" method="post">
                  <table>
                    <tr>
                      <td>Username</td>
                      <td><input type="text" name="uname"></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><input type="password" name="pwd"></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center">
                        <input class="submit" type="submit" name="login" value="Login">
                        <a href="Register.php">Don't have an account? Click here</a> <!--Temporary redirect link-->
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>

    <!-- asta diri -->

          <section id = "about" class = "d-flex justify-content-center align-items-center flex-column" >
            <div class="card mb-3 card-1">
			        <div class="row g-0">
			          <div class="col-md-4">
			            <img src="images/logoL.png" class="img-fluid rounded-start" >
			          </div>
			          <div class="col-md-8">
			            <div class="card-body">
			              <h5 class="card-title">About Us</h5>
			              <!-- <p class="card-text"><?=$setting['about']?></p> -->
			              <p class="card-text"><small class="text-muted">
                      LINTI</small>
                    </p>
			            </div>
			          </div>
			        </div>
			      </div>
            <div class = "copyright-text">
              <p>Copyright &copy; 2024 LIBRI. All Rights Reserved.</p>
            </div>
          </section>
        </div>
    </div>
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>