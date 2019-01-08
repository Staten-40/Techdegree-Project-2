<?php
error_reporting(E_ALL);
session_start();
include 'inc/questions.php';


//Create session counter
//Reference: https://www.tutorialspoint.com/php/php_sessions.htm
if(!isset ($_SESSION["counter"]) || ($_SESSION["counter"] >= 10)) {
    $_SESSION["counter"] = 1;
} else {
    $_SESSION["counter"]++;
    session_destroy($_SESSION["counter"]);
}

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

      </style>
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs"><p>Question <?php echo $_SESSION["counter"]; ?> of 10</p>
            <p class="quiz"><p><b><font size="24"> What is <?php echo $questions[$_SESSION["counter"] -1]; ?>  ?  </font size></p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value= <?php echo $questions[0]["correctAnswer"] ?> />
                <input type="submit" class="btn" name="answer" value= <?php echo $questions[0]["firstIncorrectAnswer"] ?> />
                <input type="submit" class="btn" name="answer" value= <?php echo $questions[0]["secondIncorrectAnswer"] ?>  />



            </form>
        </div>
    </div>
</body>
</html>