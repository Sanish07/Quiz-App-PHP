<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Play Quiz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-image: url("images/quiz-bg.jpg");
            background-size: cover;
            display: flex;
            flex-direction: column;
            height: 100vh;
            color : white
        }

        .header {
            min-height: 50px;
            background-image: linear-gradient(to right,#082032, #240054);
            height: 7vh;
            position : fixed;
            top : 0;
            width : 100%
        }

        main{
            margin-top : 10vh
        }

        #title {
            color : #C355F5;
            font-weight: 700;
            font-size : 1.2rem;
            font-family: 'Cinzel Decorative', cursive;
            text-transform : uppercase;
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
            transition : 500ms;
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
            background-image: linear-gradient(to right, #3490DE , #6639A6);
            place-items: center;
        }

        main{
            text-align : center;
            margin : 15vh 20vw;
            padding : 10vh;
            border : 3px solid white;
            border-radius : 20px;
            font-family: 'Work Sans', sans-serif;
            font-size : 1.3rem;
            padding-top : 0;
        }


    </style>
</head>

<body>

    <?php include('header.php') ?>
    <main>
        <?php include('validate.php') ?>
    </main>
    <?php include('footer.php') ?>
</body>

</html>