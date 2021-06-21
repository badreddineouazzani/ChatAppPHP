<?php
include("connexion.php");
session_start();
if (empty($_SESSION["idusr"])) {
header("location:login.php");
}
$id=$_SESSION["idusr"];
$sql2="SELECT * FROM user WHERE id!= '$id'";
$res2=mysqli_query($connect,$sql2) or die(mysqli_error($connect));
$data2=$res2->fetch_all();
//  var_dump($data2)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>


    <div class="container">
        <div class="row">
            <?php 
for ($i=0; $i < count($data2) ; $i++) { 

?>
            <form action="chats.php?idR=<?php echo base64_encode($data2[$i][0])?>" method="post" class="col-md-4 mt-5" >
                <div class="card " >
                    <img class="card-img-top w-25 m-auto" src="img/<?php echo $i+1 ?>.png" alt="Card image cap">

                    <div class="card-body  text-center">
                        <h5 class="card-title " >
                            <?php echo $data2[$i][1]?>
                        </h5>
                        <input type="submit" class="btn btn-primary " name="submit" value="send message">
                    </div>
                 </div>
                 </form>
                    <?php 
}
?>
               
           
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>