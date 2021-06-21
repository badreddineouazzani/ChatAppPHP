<?php
include("connexion.php");
//   if(isset($_REQUEST["send"]) ){
//      if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]!=""){
//         $m=$_REQUEST["msg"];
//         $query="INSERT INTO message(idUser,message) VALUES(2,'$m')";
//         mysqli_query($cnx,$query);
//      }
// }
$connect=new createCon();
$connect2=$connect->connect();
session_start();
if (empty($_SESSION["idusr"])) {
header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>


  <style>
    body{
      overflow: hidden;
      background-image:url("img/.png");

    }
    .status {
      height: 70vh;
      overflow-y: scroll;
      scroll-behavior: auto;
      max-height: 100vh;
      padding: 50px;

    }
    .w{
      width: 65px;
      height: 65px;
      position: absolute;
      top:14px;
      left:10px;
    }
    .mo-5 {
          padding: 10px 0 70px 0;
          margin-top: 60px;
    }
     .centerr{
    position: absolute;
    left: 20%;
    width:100% /* value of your choice which suits your alignment */
}
.bg-primary {
  background-color: rgb(2, 3, 3);
}
.font-weight-bold{
  font-size: 24px;
  font-weight: bolder;
}
  </style>
</head>
<script>
  var url = "http://localhost/testPHP/getdata.php", ctr = 0;

  $(function () {

   
     
    setInterval(() => {
      load();
    }, 100);


    // send messages 
    $("form").submit(function (e) {
      e.preventDefault();
      $.post(url, {
        message: $("#msg").val()
      },function () {
        $(".status").animate({scrollTop:1000000},800);
      });
      $("#msg").val('');
      return false;
    });
  });

  // get messages

  function load() {

    $.get(url + "?start=" + ctr, function (response) {
      var d = JSON.parse(response);
      if (d.message) {
        if (d.message) {
          $.each(d.message, function (val, i) {
            if (ctr != i.id) {
              ctr = i.id;
              var oriontation="<?php echo base64_decode($_REQUEST["idR"]); ?>";
            var c = oriontation==i.idS?"left":"right";
              console.log(oriontation);


             
                     
              var i = ' <div class=" card m-3 w-50 bg-primary text-white rounded float-'+c+'" > <div class="card-body"><h6 class="card-title " ><div class=" text-'+c+'">' + i.message + '</div> </h6></div></div>';
              $(".status").append(i);
            }

          });
          $(".status").animate({scrollTop:1000000},800);

        }
      }
      //  load(); 
    })
  }
</script>

<body>
  <header  class=" bg-secondary text-center text-warning font-weight-bold" style="padding:50px; ">
   <img src="img/paper-post-it-note-picture-frames-clip-art-others.jpg" class="w  rounded-circle" alt="Cinque Terre" width="304" height="236"> 
      
<div class=" position-absolute float-left ml-5  "  style="top: 25px;">


<?php

                $id=base64_decode($_REQUEST['idR']) ;
                $query="SELECT name FROM user WHERE id='$id'";
              if ($Result=mysqli_query($connect2,$query) or die (mysqli_error($connect2))) {
                $nom=$Result->fetch_assoc();
                echo $nom["name"];
                $_SESSION["idR"] =$id;
              }  
                
            ?>

</div>
   

  </header>
  <div class="status">



</div>



  <footer class="bg-secondary text-center mo-5 " >
    <form method="post" class="form-inline  my-2 centerr">
      <input type="text" class="form-control w-50 ml-5  mr-sm-2" id="msg" >
      <button type="submit" name="send" id="send" class="btn btn-primary my-2 my-sm-0">
        <i class="fas fa-paper-plane "></i> send</button>
    </form>
  </footer>

  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>