<?php
    include("connexion.php");
    $id='';
    if (isset($_POST['submited'])) {      
        $login=$_POST['login'];
        $pass=$_POST['password'] ;
        $pass=md5($pass) ;

        $sql="SELECT * FROM user  WHERE pass='$pass'  AND (username='$login' OR mail='$login') ";
        $res=mysqli_query($connect, $sql);
        $id=$res->fetch_assoc();
       echo $pass;
        // var_dump($res);
        session_start();
        $_SESSION['idusr']=$id['id'];
        
        header("location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>



<form action="" class="my-5" method="post" id="form_1">
        <div class="formgroup">
                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="email">login : </label>
            <input type="text" name="login" id="email" class="form-control w-25 m-auto"  placeholder="enter your email or username" required>

        </div>
        <div class="formgroup">
                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="password">password : </label>
            <input type="password" name="password" id="password" class="form-control w-25 m-auto"  placeholder="enter your password" required>

        </div>
        <div class="formgroup">

            <input type="submit" class="btn btn-primary my-4 w-25 r-2" name="submited" style="margin-left:37.5%;" value="submit">

        </div>
    </form>




    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
      const form=  document.getElementById('form_1');
      form.addEventListener('submit',function(){
            return false;
        })
    </script>
</body>

</html>