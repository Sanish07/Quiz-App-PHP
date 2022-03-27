<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Playing Science Quiz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            color: white;
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

        #quiz input {
            vertical-align: middle;
        }

        #quiz ol {
            margin: 0 0 10px 20px;
        }

        #quiz ol li {
            margin: 0 0 20px 0;
        }

        #quiz ol li div {
            padding: 4px 0;
        }

        #quiz h3 {
            font-size: 17px;
            margin: 0 0 1px 0;
            color: #666;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <main>
        <form action="result.php" method="post" id="quiz">
            <ol>

                <li>

                    <h3>WordPress is a...</h3>

                    <div>
                        <input type="radio" name="q1-answers" value="A" />
                        <label>A) Software </label>
                    </div>

                    <div>
                        <input type="radio" name="q1-answers" value="B" />
                        <label>B) Web App</label>
                    </div>

                    <div>
                        <input type="radio" name="q1-answers" value="C" />
                        <label>C) CMS</label>
                    </div>

                    <div>
                        <input type="radio" name="q1-answers" value="D" />
                        <label>D) Other</label>
                    </div>

                </li>

                <li>

                    <h3>SEO is Part Of...</h3>

                    <div>
                        <input type="radio" name="q2-answers" value="A" />
                        <label>A) Video Editing</label>
                    </div>

                    <div>
                        <input type="radio" name="q2-answers" value="B" />
                        <label>B) Graphic Designing</label>
                    </div>

                    <div>
                        <input type="radio" name="q2-answers" value="C" />
                        <label>C) Web Designing</label>
                    </div>

                    <div>
                        <input type="radio" name="q2-answers" value="D" />
                        <label>D) Digital Marketing</label>
                    </div>

                </li>

                <li>

                    <h3>PHP is a....</h3>

                    <div>
                        <input type="radio" name="q3-answers" value="A" />
                        <label>A) Server Side Script</label>
                    </div>

                    <div>
                        <input type="radio" name="q3-answers" value="B" />
                        <label>B) Programming Language</label>
                    </div>

                    <div>
                        <input type="radio" name="q3-answers" value="C" />
                        <label>C) Markup Language</label>
                    </div>

                    <div>
                        <input type="radio" name="q3-answers" value="D" />
                        <label>D) None Of Above These</label>
                    </div>

                </li>

                <li>

                    <h3>Localhost IP is..</h3>

                    <div>
                        <input type="radio" name="q4-answers" value="A" />
                        <label>A) 192.168.0.1</label>
                    </div>

                    <div>
                        <input type="radio" name="q4-answers" value="B" />
                        <label>B) 127.0.0.0</label>
                    </div>

                    <div>
                        <input type="radio" name="q4-answers" value="C" />
                        <label>C) 1080:80</label>
                    </div>

                    <div>
                        <input type="radio" name="q4-answers" value="D" />
                        <label>D) Any Other</label>
                    </div>

                </li>

                <li>

                    <h3>Webdevtrick Is For</h3>

                    <div>
                        <input type="radio" name="q5-answers" value="A" />
                        <label>A) Web Designer</label>
                    </div>

                    <div>
                        <input type="radio" name="q5-answers" value="B" />
                        <label>B) Web Developer</label>
                    </div>

                    <div>
                        <input type="radio" name="q5-answers" value="C" />
                        <label>C) Graphic Designer</label>
                    </div>

                    <div>
                        <input type="radio" name="q5-answers" value="D" />
                        <label>D) All Above These</label>
                    </div>

                </li>

            </ol>

            <input type="submit" value="Submit" class="submitbtn" />
        </form>
    </main>

    <?php include('footer.php') ?>
</body>

</html>