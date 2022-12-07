
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo300.png">
    <link rel="stylesheet" href="css/login.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>PDMS - LOGIN</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-50">
        <!-- Navbar -->
        <div class="container-fluid">
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample"
          >
          <a class="navbar-brand">
            <img src="img/logo300.png" alt="BCP">
        </a>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page">Bestlink College of the Philippines</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- Login Form -->
      <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="img/side.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="box col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="php/check_login.php" method="post">
                <!-- ALERT -->
                <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
                <!-- User input -->
                <div class="form-outline mb-4">
                  <input type="text" 
                          id="form3Example3" class="form-control form-control-lg"
                          name="uname"
                          placeholder="Enter a username" />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" 
                    name="password"/>
                </div>
    
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg">Login</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>
