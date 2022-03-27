<?php

    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

     $unameErr = "";
    
    echo "<br>";

    if(empty($_POST['uname'])){
        $unameErr = "Please Enter your name.";
        $user_name = "";
    } else {
        $user_name = test_input($_POST['uname']);
    }

    if(empty($_POST['category'])){
        $quiz_cate = "";
    } else {
        $quiz_cate = test_input($_POST['category']);
    }

    if($unameErr != null){
      echo "<h5 style='color : #FFCC29 ; margin-top : 0'>";
      print_r("$unameErr");
      echo "</h5>";
    } else{
        header('Location: '. $quiz_cate .'.php');
        exit();
    } 
    
    ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        form{
            text-align : left;
            margin-top : 10vh;
        }

        .input-fields{
            color : #082032;
            background-color : rgba(243, 233, 221,0.1);
            border : 2px solid #F5F5F5;
            margin-left : 1vw;
            padding : 0.5rem 0.7rem;
            border-radius : 15px;
            font-size : 1.2rem;
            text-align : center
        }

        button{
            color : #F9ED69;
            margin : 0 12vw;
            padding : 1rem 10rem;
            font-size : 1.5rem;
            border : 3px solid #222831;
            border-radius : 55px; 
            margin-top : 5vh;
            background-color : rgba(17, 153, 158,0.2);
        }

        button:hover{
            color : #F08A5D;
            background-color : rgba(60, 38, 100,0.2);
        }

    </style>
</head>

<body>

    <form method="post">

        <label>Enter Your Name : </label>
        <input class="input-fields" type="textbox" name="uname" autocomplete="off"><br>

        <br>

        <label>Select your preferred topic for quiz : </label>

        <select name="category" class="input-fields">
            <option value="mixed">Mixed</option>
            <option value="gk">General Knowledge</option>
            <option value="sci">Science</option>
            <option value="comp">Computers</option>
        </select>

        <br><br><br>
        <button type="submit">PLAY</button>


    </form>


</body>

</html>