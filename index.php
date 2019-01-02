<?php
session_start();
include 'inc/questions.php';

$total = 10;
$page = 1;

if ($page > $total) {
    exit;
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
            background-color: #99cc66;
        }
        .btn {
            border: 2px solid #9966cc;
            background-color: #9966cc;
        }
        .btn:hover {
            background-color: #f6dddd;
            color: #5f0776;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question 1 of 10</p>
            <p class="quiz"><?php echo $questions[0]["leftAdder"]; ?> + <?php echo $questions[0]["rightAdder"]; ?> = ?</p>
            <form action="post" method="index.php">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value= 145 />
                <input type="submit" class="btn" name="answer" value= 125 />
                <input type="submit" class="btn" name="answer" value= 135 />


            </form>
        </div>
    </div>
</body>
</html>