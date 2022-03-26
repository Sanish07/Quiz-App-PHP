<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Details</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    
    <form method="post">

        <label>Enter Your Name : </label>
        <input type="textbox" name="uname" autocomplete="off"><br>
        
        <br>
               
        <label>Select your preferred topic for quiz : </label>

        <input type="checkbox" name="category[]" value="All">
        <label>All</label>

        <input type="checkbox" name="category[]" value="General Knowledge">
        <label>GK</label>
        
        <input type="checkbox" name="category[]" value="Science and Nature">
        <label>Science</label>

        <input type="checkbox" name="category[]" value="Computers">
        <label>Computers</label>
        
        <br><br><br>
        
        
        <input type="submit">


    </form>

    <?php
    
    echo "<br>";

    if(isset($_POST['uname'])){
        $user_name = $_POST['uname'];
    } else {
        $user_name = "";
    }

    if(isset($_POST['category'])){
        $quiz_cate = $_POST['category'];
        $quiz_cate = implode(", ",$quiz_cate);
    } else {
        $quiz_cate = "";
    }

    $cookie_name = "user_data";
    $cookie_value = " $user_name [$quiz_cate]";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
     

    echo "<h2>";
    print_r("<br> User Name :  " . $user_name );
    print_r("<br> Preferences :  " . $quiz_cate );
    print_r("<br> Cookie Data : ".$_COOKIE[$cookie_name]);
    echo  "</h2>";

    ?>

    </body>
</html>