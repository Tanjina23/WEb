<?php

  include("connect.php");

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $cp = $_POST['confirmPassword'];
  $address = $_POST['address'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $role = $_POST['role'];

  if($password == $cp){
       move_uploaded_file($tmp_name,"../uploads/$image");
       $insert = mysqli_query($connect, "INSERT INTO user(name,mobile,password,address,image,role,status,votes)VALUES('$name','$mobile','$password','$address','$image','$role',0,0)");
       if($insert){
        echo'
        <script>
          alert("Registration Successful!");
          window.location = "../";
        </script>
  ';
       }
       else{
        echo'
              <script>
                alert("Some error occured!");
                window.location = "../Routes/registration.php";
              </script>
        ';
}

  }
  else{
          echo'
                <script>
                  alert("Password and confirm password does not match!");
                  window.location = "../Routes/registration.php";
                </script>
          ';
  }

?>