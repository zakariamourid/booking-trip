<?php
    $servername='sql108.epizy.com';
    $username='epiz_31211442';
    $password='7bZeDKRaCOTee';
    $dbname = "epiz_31211442_travel";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(mysqli_connect_errno()){
          echo 'failed'.mysqli_connect_errno();
        }   

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $adress=$_POST['adress'];
    $Destination=$_POST['destination'];
    $guests=$_POST['guests'];
    $arrival_date=$_POST['arrival_date'];
    $leaving_date=$_POST['leaving_date'];

  $query="INSERT INTO booking(name, email, phone, adress, Destination, guests, arrival_date, leaving_date) 
  VALUES('$name', '$email', '$phone', '$adress', '$Destination', '$guests', '$arrival_date', '$leaving_date')";     
if(mysqli_query($conn,$query)){
    echo 'added succesfully';
    header('Location:form_submited.html');
}
        // $query='SELECT * from booking';
        // $result= mysqli_query($conn,$query);
        // $post=mysqli_fetch_all($result, MYSQLI_ASSOC);
        // var_dump($post);
?>