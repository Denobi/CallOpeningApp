<?php
    session_start();
    if(empty($_POST) or (empty($_POST["username"])or(empty($_POST['passwords'])))){
        print '<script>location.href="index.php"; </script>';
    }

    include('config.php');

    $username = $_POST["username"];
    $passwords = sha1($_POST["passwords"]);

    $sql = "SELECT * FROM accountusers WHERE username='{$username}' AND passUser='{$passwords}'";
    
    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res -> num_rows;

    if($qtd> 0){
        $_SESSION['username'] = $username;
        $_SESSION['nivelAcesso'] = $row->nivelAcesso;
        $_SESSION['mailUser'] =  $row->mailUser;
        print "<script>location.href='homepage.php'; </script>";
    }else{
        print "<script>alert('Dados incorretos, por favor verificar!!!')</script>";
        print "<script>location.href='index.php' </script>";
    }