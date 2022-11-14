<html>
<head>
<title>
    Results
</title>
</head>
<body>

<?php
    $ans1 = $_POST['Question1'];
    $ans2 = $_POST['Question2'];
    $ans3 = $_POST['Question3'];
    $ans4 = $_POST['Question4'];
    $ans5 = $_POST['Question5'];

    $total = 0;

    if($ans1 == "Topeka"){
        $total++;
    };

    if($ans2 == "6"){
        $total++;
    };

    if($ans3 == "Eiffel Tower"){
        $total++;
    };

    if($ans4 == "Aragog"){
        $total++;
    };

    if($ans5 == "Gold"){
        $total++;
    };

    $score = $total/5 * 100;

    echo "<html>
            <head>
            <style>
                h3{
                    border:solid;
                }

                div{
                    border:solid;
                }
            </style>
            <title>
            result
            </title>
            </head>
            <body style='background-color:lightgrey'>
            <h3 > Question 1: What is the state capital of Kansas? </h3>
            <div>
            <br>
            <p>You Answered: $ans1</p>
            <br>
            <p>Correct Answer: Topeka </p>
            <br>
            <br>
            </div>
            
            <h3 > Question 2: How many infinity stones are there in the Marvel Universe?</h3>
            <div>
            <br>
            <p>You Answered: $ans2</p>
            <br>
            <p>Correct Answer: 6 </p>
            <br>
            <br>
            </div>
            
            <h3 > Question 3: What is the most visited tourist attraction in the world?</h3>
            <div>
            <br>
            <p>You Answered: $ans3</p>
            <br>
            <p>Correct Answer: Eiffel Tower </p>
            <br>
            <br>
            </div>
            <h3 > Question 4: What's the name of Hagrid's pet spider in the Harry Potter Universe?</h3>
            <div>
            <br>
            <p>You Answered: $ans4 </p>
            <br>
            <p>Correct Answer: Aragog </p>
            <br>
            <br>
            </div>
            <h3 > Question 5:What element does the chemical symbol Au stand for?</h3>
            <div>
            <br>
            <p>You Answered: $ans5</p>
            <br>
            <p>Correct Answer: Gold </p>
            <br>
            <br>
            </div>
            <h3 >Total correct: $total </h3>
            <br>
            <h3>Score: $score%</h3>
            <a href='../index.html'> home</a>
            
            
            
            </body>
        
    
    
        </html>";
?>
</body>
</html>