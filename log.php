<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title> Online Voting System</title>
</head>
<body>
    
<header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
              <a class="navbar-brand"><h1>eBallot</h1></a>
              <form class="d-flex">
                <a href="index.php"><button class="btn btn-outline-secondary me-2" type="button">Home</button></a>
                <button class="btn btn-outline-secondary me-2" type="button">About</button>
                <a href="Routes/registration.php"><button class="btn btn-outline-secondary me-2" type="button">Register</button></a>
              </form>
            </div>
          </nav>
    </header>
    
    <div class="container text-center">
  <div class="row">
    <div class="col-sm-6">
    <img src="ovs.png" class="img-fluid my-5 " alt="Online Voting System">
    </div>
    <!-- form -->
    <div class="col-sm-6">
     <div class="frm">
       <h3 class="my-5 text-muted">Login</h3>

        <form action="api/login.php" method="POST">
            <div class="input-group mb-3">
         <input type="text" name="name" class="form-control" placeholder="Enter your name or group name"  aria-describedby="basic-addon1" required>
         </div>

         <div class="input-group mb-3">
         <input type="password" name="password" class="form-control" placeholder="Enter password"  aria-describedby="basic-addon1" required>
         </div>

         <select name="role"class="form-select" aria-label="Default select example">
              <option value="1">Voter</option>
              <option value="2">Group</option>
         </select>

         <div class="bttn my-4">
         <button type="submit" class="btn btn-secondary text-white">Login</button>
         </div>

         <div class="link">
            Don't have an account? <a href="Routes/registration.php"> Register here </a>
         </div>

        </form>
     </div>
    </div>
  </div>
     </div>

     <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://eBallot.com/">eBallot.com</a>
  </div>
  <!-- Copyright -->
</footer>

 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>