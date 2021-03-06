<?php

session_start();
include 'inc/questions.php';

if($_SESSION["counter"] == 10) {
        $_SESSION["lastAnswer"] = $_POST["answer"];
        header("Location: inc/score.php");
    }


if(!isset ($_SESSION["counter"]) || ($_SESSION["counter"] > 10))  {
    shuffle($questions);
    $_SESSION["whitney"] = $questions;
    $_SESSION["counter"] = 1;
    $_SESSION["results"] = 0;
} elseif($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["counter"]++;
}
//session_destroy();
$testQuest = $_SESSION["whitney"][$_SESSION["counter"] -1];
$response =
    [
        $testQuest["correctAnswer"],
        $testQuest["firstIncorrectAnswer"],
        $testQuest["secondIncorrectAnswer"],
    ];
shuffle($response);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <style>
        body {
            background-color: #63D1F4;
        }
        .btn {
            border: 2px solid #f9f786;
            background-color: #f9f786;
        }
        .btn:hover {
            background-color: white;
            color: black;
        }
        .toast {
            margin-left: -40%;
            margin-top: 7%;
            font-weight: bold;
            left: 10%;
            right: 10%;
            width: 80%;
            line-height: .5;
        }
    </style>
</head>
<body>

<div class = "header">
    <h1>MATH QUIZ</h1>

    <div class = "header2">
        <h3>Mrs. Shoobobbisock's Class</h3>

    </div>

    <div class="toast">
        <?php
        if($_SESSION["counter"] == 1) {
            echo "<strong>Let's begin!</strong>";
        } elseif($_POST["answer"] == $_SESSION["whitney"][$_SESSION["counter"]-2]["correctAnswer"]) {
            echo "<strong>Woo hoo!   You got it right!    Here's the next one:</strong>";
            $_SESSION["results"]++;
        } else {
            echo "<strong>Uh oh.     Wrong answer.    Better luck with this one:</strong>";
        }
        ?>

        <div class="container">
            <div id="quiz-box">
                <p class="breadcrumbs"><p>Question <?php echo $_SESSION["counter"]; ?> of 10</p>
                <p class="quiz"><p><b><font size="24"> What is <?php echo $_SESSION["whitney"][$_SESSION["counter"] -1]["leftAdder"]; ?><strong>  + </strong> <?php echo $_SESSION["whitney"][$_SESSION["counter"] -1]["rightAdder"]; ?> = ?  </font size></p>

                <form action="index.php" method="post">
                    <input type="hidden" name="id" value="0" />
                    <input type="submit" class="btn" name="answer" value= <?php echo($response[0]); ?> / >
                    <input type="submit" class="btn" name="answer" value= <?php echo($response[1]); ?> / >
                    <input type="submit" class="btn" name="answer" value= <?php echo($response[2]); ?> / >







                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>