<?php
// records
  $name = $_POST['name'];
  $phone =$_POST['phone'];
  $services =$_POST['services'];
  $date= $_POST['date'];

  // Dp connection

  $servername= 'localhost';
  $username ='root';
  $password ='';
  $dbname ='cleaning_db';
  

  
  $conn = new mysqli("localhost","root",'',"cleaning_db");
 

  
  // inserting data into db
  
  if($conn-> connect_error)
  {
    
      die('connection failed :' .$conn-> $connect_error);
  }
  else{
      $sql = ("INSERT INTO appointment_list(name,phone,services,date)
      VALUES ('$name','$phone','$services','$date')");
  }  
  
//var_dump($sql); 'exit';
  // saving statements
  $sql = mysqli_query($conn, $sql);

  if($sql == true)
  {
      echo "appointment is successfull!";
  }
  else{
      echo "appointment is unsuccessfull!!";
  }




?>