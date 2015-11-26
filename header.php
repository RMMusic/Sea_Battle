<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.10.2015
 * Time: 15:43
 */
session_start();
?>
<!DOCTYPE html>
<html>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<head>
    <meta charset = "UTF-8">
    <title>Sea battle</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
//echo (isset($_SESSION["error"]))?$_SESSION["error"]:'';
echo $_SESSION['error'];
?>