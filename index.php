<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hmórga</title>
    <meta name="description" content="SocialWebApp"/>
    <meta name="keywords" content="projekt"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<form method="post" action="loginProc.php">
    Username:<br/>
    <input type="text" name="username"><br/><br/>

    Password:<br/>
    <input type="password" name="password"><br/><br/>
    <input type="submit" value="Log in"><br/><br/></br>

    <a href="http://przemekutp.pl/zad7/rejrstrform.html">Zarejestruj się</a>
    <a href="https://github.com/Brodeon">Mój git</a>

</form>
</body>
</html>