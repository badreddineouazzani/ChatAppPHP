

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="addUser.php" method="post">

        <div class="form-group">
                <label class="mx-auto my-2 mt-5 w-25 form-control " style="border:none" for="name">name :</label>
         <input type="text" name="nameU" id="name" class="form-control w-25 m-auto" placeholder="enter your name" required>

        </div>
        <div class="formgroup">
                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="username">username : </label>
            <input type="text" name="username" id="username" class="form-control w-25 m-auto"  placeholder="enter your username" required>

        </div>
        <div class="formgroup">
                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="email">email : </label>
            <input type="email" name="email" id="email" class="form-control w-25 m-auto"  placeholder="enter your email" required>

        </div>
        <div class="formgroup">
                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="password">password : </label>
            <input type="password" name="password" id="password" class="form-control w-25 m-auto"  placeholder="enter your password" required>

        </div>
        <div class="formgroup">

                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="conf_password">confirm password : </label>
            <input type="password" name="conf_password" id="conf_password" class="form-control w-25 m-auto"  placeholder="confirm your password"
                required>
        </div>
        <div class="formgroup">
                <label class="mx-auto my-2 w-25 form-control " style="border:none" for="gender">gender : </label>
            <select name="gender" id="gender" class="form-control w-25 m-auto"  required>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>

        </div>
        <div class="formgroup">

            <input type="submit" class="btn btn-primary my-4 w-25 r-2" name="submited" style="margin-left:37.5%;" value="submit">

        </div>
    </form>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>