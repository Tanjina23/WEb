<?php

$connect = mysqli_connect("localhost","root","","voting system") or die("Connection failed");

if($connect){
      echo "Connected!";
}
else{
       echo "Not Connected";
}
?>