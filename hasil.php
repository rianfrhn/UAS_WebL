<html>   
<head>
<title> Cek Hasil Captcha </title>
</head>
<body>
<p align="center"> Hasil Login <br/>
<?php
include 'config.php';
$user=$_GET["username"];
$pwd=$_GET["password"];
$query=mysqli_query($conn, "select * from users where username='$user' and password='$pwd' ");

//memanggil lagi session untuk dimulai

if($_SESSION["Captcha"]!=$_GET["nilaiCaptcha"]){
echo "Username anda ".$_GET["username"]; echo "<br/>"; 
echo "Password anda ".$_GET["password"]; echo "<br/>"; 
}
else{
echo "Username anda ".$_GET["username"]; echo "<br/>"; 
echo "Password anda ".$_GET["password"]; echo "<br/>"; 
echo "kode Captcha Anda Benar";
}
if (mysqli_num_rows($query)>0){
echo "akses diterimai:)";
}
else{
echo "akses ditolak !!";
}
?>

</p> 
</body>
</html>