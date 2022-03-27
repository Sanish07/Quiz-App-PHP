<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
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
            background-image: linear-gradient(to right,#082032, #240054);
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

        .facts-place {
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
            max-width: 1200px;
            margin-block: 2rem;
            gap: 4.6rem;
        }

        .facts-card {
            display: flex;
            flex-direction: column;
            width: clamp(20rem, calc(20rem + 2vw), 22rem);
            overflow: hidden;
            box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 1em;
            background: rgba(170, 20, 240, 0.3);
            font-family: 'Quicksand', sans-serif;
        }

        .facts-card:hover {
            transition: 200ms;
            transform: scale(1.05);
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        .card__body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
            text-align: left
        }

        .card__body>h4 {
            margin-top: 2vh;
            padding: 0 0.6rem;
            color: #E8F6EF;
            font-size: 1.5rem;
            text-transform: capitalize;
            font-family: 'Nunito', sans-serif;
        }

        main {
            margin-top: 5vh;
            padding: 0 5vw;
            text-align: center
        }

        .page-head {
            font-family: 'Varela Round', sans-serif;
            font-size: 4.5rem;
            padding: 31vh 0;
            color: #F1F8FD;
        }

        h2{
            color: #08D9D6;
            font-family: 'Mulish', sans-serif;
            font-size : 1.75rem;
            text-transform : capitalize 
        }

        
    </style>
</head>

<body>

    <?php include('header.php') ?>

    <main>
        <h1 class="page-head">Welcome to Quizophile!</h1>
        <h2>You can read some facts since you're here.</h2>
        <div class="facts-place">


            <div class="facts-card">
                <div class="card__header">
                    <img src="https://solarsystem.nasa.gov/system/content_pages/main_images/1534_50_Enceladus_768.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> Enceladus, one of Saturn’s smaller moons, reflects 90% of the Sun’s light. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://wonderfulengineering.com/wp-content/uploads/2017/07/hole-through-the-earth.png"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> It would take 19 minutes to fall from the North Pole to Earth’s core. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://www.treehugger.com/thmb/0YzrZoQ1XuYCdsMSG3meMO6_C58=/1000x562/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__treehugger__images__2019__09__cloud-0693b27e05ee4a1c802182da4aa117a9.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> A cloud typically weighs 1.1 Million pounds. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://sciencenotes.org/wp-content/uploads/2015/05/glass-marble.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> A ball of glass bounces higher than ball of rubber. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://groovyhistory.com/content/50251/f3a19f8d9d4f9810ba5773370d875dcc.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> Nintendo was started while the Ottoman Empire still existed. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://www.danspapers.com/wp-content/uploads/2021/06/360_F_325682910_0QdehxnHliKYvz11ID0StPgySJhUdvBU.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> Lobsters don't die naturally nor do they age. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://miro.medium.com/max/1300/1*Amvp5CwsYdhW87qDkDWoDQ.jpeg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> If you fold a paper 42 times, it would reach to moon. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://i.dailymail.co.uk/i/pix/2017/04/07/13/3F0B412C00000578-0-image-a-43_1491569118247.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> Coca-Cola was originally green in color. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://www.rd.com/wp-content/uploads/2017/08/06-Nothing-Rhymes-with-Orange%E2%80%94and-10-More-Words.-Bet-You-Cant-Guess-Them.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> "Rhythm" is the longest English word without a vowel. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://www.icytales.com/wp-content/uploads/2016/07/bears.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> All polar bears are left handed. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://images.everydayhealth.com/images/diet-nutrition/what-is-honey-nutrition-health-benefits-risks-and-uses-722x406.jpg"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> Honey is the only food that doesn't spoil. </h4>
                </div>
            </div>

            <div class="facts-card">
                <div class="card__header">
                    <img src="https://i0.wp.com/travelwineshoes.com/wp-content/uploads/2019/06/img_1428.png?fit=630%2C487&ssl=1"
                        alt="card__image" class="card__image" width="600" height="250">
                </div>
                <div class="card__body">
                    <h4> The name of all the continents end with the same letter that they start with. </h4>
                </div>
            </div>

        </div>
    </main>

    <?php include('footer.php') ?>

</body>

</html>