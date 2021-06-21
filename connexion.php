<?php
  
  class createCon {
    public function connect()
    {
        $connect = mysqli_connect("localhost",'root','' ,'testPHP') or die("error $mysqli_error()");
        return $connect;
    }
    
    // $query = "drop table testPHP;";
    //   mysqli_query($connect , $query);  
    //   $query = "create database testPHP;";
    //   mysqli_query($connect , $query);  
    //   $query = "USE DATABASE testPHP;";
    //   mysqli_query($connect , $query);
    //   $query1 = "CREATE TABLE user(
    //       id INT AUTO_INCREMENT PRIMARY KEY, 
    //       name VARCHAR(30) NOT NULL,
    //       username VARCHAR(30) NOT NULL,
    //       mail VARCHAR(30) NOT NULL,
    //       pass VARCHAR(30) NOT NULL,
    //       gender VARCHAR(10) NOT NULL,
    //       img VARCHAR(30),
    //       reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //   )";
    
    
    // if (mysqli_query($connect, $query1)) {
    //   echo "Table  user created successfully";
    // } else {
    //   echo "Error creating table: " . mysqli_error($connect);
    // }
    
    // mysqli_close($connect);

  }
  
 
    ?>