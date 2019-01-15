<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-color: #63D1F4;
        }
        .header {
            margin-left: 38%;
            margin-top: 5%;
            font-weight: bold;
            left: 10%;
            right: 10%;
            width: 80%;
            line-height: .10;
        }
        .header2 {
            margin-left: -2%;
            margin-top: 3%;
            font-weight: bold;
            left: 10%;
            right: 10%;
            line-height: .10;
        a {
            padding: 10px;
            border-radius: 10px;
            appearance: button;
            text-align: center;
        }
    </style>
<body>



<div class = "header">
    <h1>MATH QUIZ</h1>

    <div class = "header2">
        <h3>Mrs. Shoobobbisock's Class</h3>

        <br><br><br><br><br><br><br><br><br><br><br><br>

        <?php
        if($_POST["answer"][$_SESSION]["whitney"][$_SESSION]["counter"]["correctAnswer"]){
            echo $_SESSION["results"]++;
            echo '<p><font size="5">You got the last question right! No more questions!</font size></p>';
            echo "<br>";
            echo '<p><font size="4">NO MORE QUESTIONS</font size></p>';
            echo "<br>";
        } else {
            echo '<p><font size="5">Your last answer was incorrect.</font size></p>';
            echo "<br>";
            echo '<p><font size="4">NO MORE QUESTIONS</font size></p>';
            echo "<br>";
        }
        ?>
        <br><br><br><br><br><br><br><br><br>
        <p><font size="4">You answered <?php echo $_SESSION["results"]; ?> out of 10 questions correctly.</font size></p>
        <p><font size="4">Your score is  <?php echo $_SESSION["results"]*10; ?>%!</font size></p><br>
        <p><font size="4">Would you like to give it another go?</font size></p><br>


        <a href ="../index.php"  type="submit" class="btn"><center>Try Again</center></a>
    </div>
</div>
</div>
</body>
</html>