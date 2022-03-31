<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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

        .contacts {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            padding: 0 5vw;
        }

        .contact-card {
            text-decoration: none;
            margin-top: 10vh;
            border: 2px solid #203239;
            border-radius: 20px;
            padding: 2rem 3rem;
            width: 8vw;
            height: 25vh;
            margin-left: 2vw;
            text-align: center;
            background-color: rgba(26, 19, 47, 0.2);
        }

        .contact-card:hover {
            transform: scale(1.1, 1.1);
            background-color: rgba(146, 84, 200, 0.2);
        }

        .contact-text {
            margin-top: 1rem;
            color: #F6E7D8;
            font-size: 1.15rem;
            font-family: 'Open Sans', sans-serif;
            font-weight: 500;
            font-weight : 500;
        }

        h1{
            margin-left : 45vw;
            color : #F7F5F2;
            font-size : 2.3rem;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <main>
    <h1>Contact Me</h1>
        <div class="contacts">
            <a class="contact-card" href="https://in.linkedin.com/in/sanish-nirwan-39ab88192" target="_blank">
                <img src="images/contact-icons/in-logo.png" alt="in-logo" width="100" height="100" />
                <div class="contact-text">Connect with me on LinkedIn</div>
            </a>

            <a class="contact-card" href="https://github.com/Sanish07" target="_blank">
                <img src="images/contact-icons/github-logo.png" alt="gh-logo" width="100" height="100" />
                <div class="contact-text">View my Github Repository</div>
            </a>

            <a class="contact-card" href="https://www.facebook.com/sanish.nirwan" target="_blank">
                <img src="images/contact-icons/fb-logo.png" alt="fb-logo" width="100" height="100" />
                <div class="contact-text">Contact Me on Facebook</div>
            </a>

            <a class="contact-card" href="https://twitter.com/sanish_p1" target="_blank">
                <img src="images/contact-icons/twitter-logo.png" alt="twitter-logo" width="100" height="100" />
                <div class="contact-text">Follow Me on Twitter</div>
            </a>

            <a class="contact-card" href="mailto:sanishnirwan@gmail.com" target="_blank">
                <img src="images/contact-icons/gmail-logo.png" alt="gmail-logo" width="100" height="100" />
                <div class="contact-text">Send Me Email</div>
            </a>
        </div>
    </main>

    <?php include('footer.php') ?>
</body>

</html>