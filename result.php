<html>
 
<head>
 <meta charset=UTF-8" />
 
 <title>PHP Quiz</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
 <div id="page-wrap">
 
 <h1>Results</h1>
 
        <?php
            
            $answer1 = $_POST['q1-answers'];
            $answer2 = $_POST['q2-answers'];
            $answer3 = $_POST['q3-answers'];
            $answer4 = $_POST['q4-answers'];
            $answer5 = $_POST['q5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
 
 </div>
 
</body>
 
</html>