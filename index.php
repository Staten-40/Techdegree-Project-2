<?php
session_start();
include 'inc/questions.php';

//Create session counter
//Reference: https://www.tutorialspoint.com/php/php_sessions.htm
$counter = 1;
if(isset ($_SESSION[$counter])) {
    $_SESSION[$counter] = 1;
} else {
    $_SESSION[$counter]++;
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
            <p class="breadcrumbs"><p>Question 1 of 10</p>

            /* Inline style edits to correct math problem font error.  Tested keys in array */
            <p class="quiz"><p><b><font size="24"> What is  <?php echo $questions[9]["leftAdder"]; ?> + <?php echo $questions[9]["rightAdder"]; ?>  ?  </font size></p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value= <?php echo $questions[9]["correctAnswer"] ?> />
                <input type="submit" class="btn" name="answer" value= <?php echo $questions[9]["firstIncorrectAnswer"] ?> />
                <input type="submit" class="btn" name="answer" value= <?php echo $questions[9]["secondIncorrectAnswer"] ?>  />



            </form>
        </div>
    </div>
</body>
</html>