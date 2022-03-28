<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
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
            margin-top: 10vh;
            color : white;
            padding : 15vh 25vw;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <main>
        <div id="page-wrap">

            <h1>Results</h1>

            <?php
            
            $answer1 = $_POST['q1-answers'];
            $answer2 = $_POST['q2-answers'];
            $answer3 = $_POST['q3-answers'];
            $answer4 = $_POST['q4-answers'];
            $answer5 = $_POST['q5-answers'];

            $category = $_POST['cate'];
        
            $totalCorrect = 0;
            
            if($category == "mixed"){
                if ($answer1 == "C") { $totalCorrect++; }
                if ($answer2 == "D") { $totalCorrect++; }
                if ($answer3 == "A") { $totalCorrect++; }
                if ($answer4 == "B") { $totalCorrect++; }
                if ($answer5 == "D") { $totalCorrect++; }
            }
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
    </main>

    <?php include('footer.php') ?>
</body>

</html>