<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Other Projects</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    
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
            margin-top: 10vh
        }


        .projects {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            padding: 0 5vw;
            margin-top : 10vh
        }

        .project-card {
            text-align: center;
            display: flex;
            flex-direction: column;
            width: clamp(20rem, calc(20rem + 2vw), 22rem);
            overflow: hidden;
            box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
            margin-left: 2vw;
            border-radius: 1em;
            background: rgba(57, 174, 169, 0.2);
            font-family: 'Quicksand', sans-serif;
            text-decoration: none;
            height: 40vh
        }

        .project-card:hover {
            transform: scale(1.1, 1.1);
            transition: 500ms;
            background: rgba(241, 0, 134, 0.2);
        }

        .project-card>img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        .project-text {
            margin-top: 2.5rem;
            color: #E6D5B8;
            font-size: 1.2rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 500;
        }

        .project-text:hover {
            color: rgb(242, 250, 90);
        }

        h1{
            margin-left : 40vw;
            color : #F7F5F2;
            font-size : 2.3rem;
            font-family: 'Montserrat', sans-serif;
        }

    </style>
</head>

<body>
    <?php include('header.php') ?>
    <main>
        <h1>My Other Projects</h1>
        <div class="projects">
            <a class="project-card" href="https://github.com/Sanish07/todo-assignment-2" target="_blank">
                <img src="images/project-images/p1-img.jpg" alt="p1-logo" height="170" />
                <div class="project-text">React Todo-list App</div>
            </a>

            <a class="project-card" href="https://github.com/Sanish07/Guess-The-Number" target="_blank">
                <img src="images/project-images/p2-img.jpg" alt="p2-logo" height="170" />
                <div class="project-text">Guess The Number Game</div>
            </a>

            <a class="project-card" href="https://github.com/Sanish07/simon-game" target="_blank">
                <img src="images/project-images/p3-img.jpg" alt="p3-logo" height="170" />
                <div class="project-text">Simon Memory Game</div>
            </a>

            <a class="project-card" href="https://github.com/Sanish07/Infomania-v2.0" target="_blank">
                <img src="images/project-images/p4-img.jpg" alt="p4-logo" height="170" />
                <div class="project-text">Infomania Front End Website</div>
            </a>

            <a class="project-card" href="https://github.com/Sanish07/blog-app-laravel" target="_blank">
                <img src="images/project-images/p5-img.jpg" alt="p2-logo" height="170" />
                <div class="project-text">Laravel Blog Application</div>
            </a>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>