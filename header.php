<?php
session_start();
$conn = mysqli_connect("localhost", "avinash1_holi12", "DjAvi#279641", "avinash1_holi12");
if(!$conn){
    die("Database Not Connected");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Practice</title>
    <!-- Fontawesome CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap Style CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap UI CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Javascript Jquery File -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- Coustom CSS -->
    <link rel="stylesheet" href="css/styles.css">
<style>
    @media screen and (max-width:720px){
        .box{
            width:90%;
            box-shadow:1px 1px 4px grey;
        }
            .box2{
            width:90%;
            box-shadow:1px 1px 4px grey;
        }
    }
</style>
</head>
<body>

<h4>MCQ Objective Practice</h4>   

