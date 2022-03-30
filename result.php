<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-image: url("images/quiz-bg.jpg");
            background-size: cover;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            min-height: 50px;
            background-image: linear-gradient(to right, #082032, #240054);
            height: 7vh;
            position: fixed;
            top: 0;
            width: 100%
        }

        #title {
            color: #C355F5;
            font-weight: 700;
            font-size: 1.2rem;
            font-family: 'Cinzel Decorative', cursive;
            text-transform: uppercase;
        }

        .head-items {
            display: flex;
            flex-direction: row;
            list-style: none;
            padding: 5vh auto;
            margin-top: 0;
        }

        .head-items>li {
            margin: 0.8rem 1.6rem;
            font-size: 1.1rem;
        }

        .head-items>li>a {
            text-decoration: none;
            color: #BC8CF2;
            font-family: 'Noto Sans', sans-serif;
        }

        .head-items>li>a:hover {
            transition: 500ms;
            color: #EEEEEE;
        }

        #first-item {
            margin-left: 52vw;
        }

        .footer {
            color: #ECF2F9;
            min-height: 50px;
            margin-top: auto;
            font-family: sans-serif;
            width: 100%;
            height: 50px;
            text-align: center;
            background-image: linear-gradient(to right, #3490DE, #6639A6);
            place-items: center;
        }

        main {
            text-align : center;
            margin-top: 6vh;
            color : white;
            padding : 15vh 25vw;
        }

        #results{
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size : 1.6rem;
            color : #FFFDDE;
        }

        h1{
            font-size : 3.1rem;
            font-family: 'Montserrat', sans-serif;
            color : #FFEEAD;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <main>
        <div id="page-wrap">

            <h1>Results</h1>

            <?php
            
            $unattempted = 0;

            if(isset($_POST['q1-answers'])){
                $answer1 = $_POST['q1-answers'];
            }
            else {
                $answer1 = "";
                $unattempted++;
            }

            if(isset($_POST['q2-answers'])){
                $answer2 = $_POST['q2-answers'];
            }
            else {
                $answer2 = "";
                $unattempted++;
            }

            if(isset($_POST['q3-answers'])){
                $answer3 = $_POST['q3-answers'];
            }
            else {
                $answer3 = "";
                $unattempted++;
            }

            if(isset($_POST['q4-answers'])){
                $answer4 = $_POST['q4-answers'];
            }
            else {
                $answer4 = "";
                $unattempted++;
            }

            if(isset($_POST['q5-answers'])){
                $answer5 = $_POST['q5-answers'];
            }
            else {
                $answer5 = "";
                $unattempted++;
            }

            $category = $_POST['cate'];
        
            $totalCorrect = 0;
            
            if($category == "mixed"){
                if ($answer1 == "C") { $totalCorrect++; }
                if ($answer2 == "D") { $totalCorrect++; }
                if ($answer3 == "A") { $totalCorrect++; }
                if ($answer4 == "B") { $totalCorrect++; }
                if ($answer5 == "D") { $totalCorrect++; }
            }

            if($category == "gk"){
                if ($answer1 == "C") { $totalCorrect++; }
                if ($answer2 == "A") { $totalCorrect++; }
                if ($answer3 == "A") { $totalCorrect++; }
                if ($answer4 == "D") { $totalCorrect++; }
                if ($answer5 == "D") { $totalCorrect++; }
            }

            if($category == "sci"){
                if ($answer1 == "B") { $totalCorrect++; }
                if ($answer2 == "D") { $totalCorrect++; }
                if ($answer3 == "C") { $totalCorrect++; }
                if ($answer4 == "B") { $totalCorrect++; }
                if ($answer5 == "A") { $totalCorrect++; }
            }

            if($category == "comp"){
                if ($answer1 == "A") { $totalCorrect++; }
                if ($answer2 == "A") { $totalCorrect++; }
                if ($answer3 == "C") { $totalCorrect++; }
                if ($answer4 == "D") { $totalCorrect++; }
                if ($answer5 == "B") { $totalCorrect++; }
            }

            echo "<div id='results'>
            $totalCorrect / 5 correct <br> 
            Unattempted Questions : $unattempted
            </div>";
            
        ?>
    </main>

    <?php include('footer.php') ?>
</body>

</html>