<?php
   
   session_start();
   if(!isset($_SESSION['userdata'])){
       header("location: ../");
   }

   $userdata = $_SESSION['userdata'];
   $groupsdata = $_SESSION['groupsdata'];

   if($_SESSION['userdata']['status'] == 0){
      $status = '<b style="color:red">Not Voted</b>';
   }
   else{
    $status = '<b style="color:green">Voted</b>';
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="\OnlineVoting\style.css">
    <title> Online Voting System</title>
</head>

<body>

<header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
              <a class="navbar-brand"><h1>eBallot</h1></a>
              <form class="d-flex">
              <button class="btn btn-outline-secondary me-2" type="button">About</button>
              <a href="../"><button type="button" class="btn btn-outline-secondary me-2">Back</button></a>
                <a href="logout.php"><button type="button" class="btn btn-outline-secondary me-2">Logout</button></a>
              </form>
            </div>
          </nav>
    </header><br>

<!-- main section -->

<div class="container text-center">
  <div class="row">
    <div class="col-sm-4 bg-light "> <div id="profile">
      
       <img src="../uploads/<?php echo $userdata['image']?>" class="img-thumbnail"><br><br>
       <b>Name : </b> <?php echo $userdata['name']?> <br><br>
       <b>Mobile : </b> <?php echo $userdata['mobile']?> <br><br>
       <b>Address : </b> <?php echo $userdata['address']?> <br><br>
       <b>Status : </b> <?php echo $status?> <br><br>
  
  </div></div>
    
   
    <div class="col-sm-8 bg-white "><div id="group">
    <h3 class="my-2">Groups</h3>
        <?php
              if($_SESSION['groupsdata']){
                 for ($i=0; $i < count($groupsdata) ; $i++) { 
                  ?>
                  <div>
                  <img src="../uploads/<?php echo $groupsdata[$i]['image']?>" class="img-thumbnail col-4 float-sm-end my-2" height="200px" width="200px"> <br><br>
                         <div class="col-8 float-md-start">
                
                         <b>Group Name : </b><?php echo $groupsdata[$i]['name']?> <br><br>
                         <b>Votes : </b> <?php echo $groupsdata[$i]['votes']?> <br><br>
                         <form action="../api/vote.php" method="POST">
                          <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                          <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                          <?php
                            if($_SESSION['userdata']['status'] == 0){
                              ?>
                              <input type="submit" name="votebtn" value="vote" id="votebtn">
                              <?php
                            }
                            else{
                                  ?>
                                  <button disabled class="btn btn-sm btn-success"type="button" name="votebtn" value="vote" id="votebtn">Voted</button>
                                  <?php
                            }
                          ?>
                          
                         </form>
                         </div>
                        
                  </div>
                  <?php
                 }
              }
              else{

              }
        
        ?>

    </div>
   </div>
  </div>
</div><br>
 
<!-- main section ends -->


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