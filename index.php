<?php
error_reporting(E_ALL);
session_start();
include 'inc/questions.php';


//Create session counter
//Reference: https://www.tutorialspoint.com/php/php_sessions.htm
if(!isset ($_SESSION["counter"]) || ($_SESSION["counter"] >= 10)) {
    shuffle($questions);
    $_SESSION["tina"] = $questions;
    $_SESSION["counter"] = 1;
} else {
    $_SESSION["counter"]++;
    session_destroy($_SESSION["counter"]);

$testQuest = $_SESSION["tina"][$_SESSION["counter"] -1];
$response =
    [
        $testQuest["correctAnswer"],
        $testQuest["firstIncorrectAnswer"],
        $testQuest["secondIncorrectAnswer"],
    ];
shuffle($response);


//$_SESSION["tina"] = $questions;
//var_dump($_SESSION["tina"]);
//$individual_question = $_SESSION["tina"][$_SESSION["counter"] -1];
//var_dump($individual_question);
//ceho "<br /><br /><br />";
//var_dump($questions);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <!--use <style> tag to add color -->
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

      </style>
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs"><p>Question <?php echo $_SESSION["counter"]; ?> of 10</p>
            <p class="quiz"><p><b><font size="24"> What is <?php echo $_SESSION["tina"][$_SESSION["counter"] -1]["leftAdder"]; ?> + <?php echo $_SESSION["tina"][$_SESSION["counter"] -1]["rightAdder"]; ?>  ?  </font size></p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value= <?php echo $testQuest["correctAnswer"]; ?> / >
                <input type="submit" class="btn" name="answer" value= <?php echo $testQuest["firstIncorrectAnswer"]; ?> / >
                <input type="submit" class="btn" name="answer" value= <?php echo $testQuest["secondIncorrectAnswer"]?> / >


            </form>
        </div>
    </div>
</body>
</html>