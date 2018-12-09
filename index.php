<?php
include 'inc/math.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question 1 of 10</p>
            <p class="quiz">What is 54 + 71?</p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value= 145 />
                <input type="submit" class="btn" name="answer" value= 125 />
                <input type="submit" class="btn" name="answer" value= 135 />

                <?php
                function testAns() {
                    if('answer' == ['correctAnswer']) {
                        echo "Good Job! You got it right!";
                   } else {
                        echo
                        "Uh, oh.  Better luck next time.";
                    if(array_key_exists('answer', $_POST)) {
                        testAns();
                        }
                    }
                }
                ?>

            </form>
        </div>
    </div>
</body>
</html>