<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webstyle.css">
    <title>Website Index</title>
</head>

<body class="centerer">
    
    <?php
        session_start();
        require "config.php";
        if(isset($_POST["Login"])){
            $username = $_POST["uname"];
            $password = $_POST["pword"];
            $captcha = $_POST["nilaiCaptcha"];
            $result = mysqli_query($conn, "select * from users where username = '$username'");
            if(mysqli_num_rows($result)>0 && $captcha == $_SESSION["Captcha"]){
                $_SESSION["login"]=true;
                $_SESSION["username"] = $username;

                header("Location: jadwal.php");
                exit;
            }

        }
    ?>
    <div class="wrapper">
        <div class="imgcontainer">
            <img src="pnj.png" alt="Image" class="avatar">
        </div>
        <div class="imgcontainer1">
            <img src="Logo_HIMATIK_Nobg.png" alt="Image" class="logo">
        </div>
        <form method="POST" class="login">
            <div class="container">
                <label for="uname">Username</label>
                <input name="uname" type="text" class="username">
                <label for="pword">Password</label>
                <input type="password" name="pword">
                <!--<input type="checkbox" name="adminlogin" value="1">
                <label for="checkbox">Log in sebagai admin</label> -->
                <label for="captchaImg">Captcha</label> <br>
                <img src="gambar.php" name="captchaImg"> <br>
                <input name="nilaiCaptcha" value="" class="inputs">
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <input type="submit" class="palebtn" name="Login" value="Login">
            </div>



    </div>






    </form>

</body>

</html>