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

if($_POST["answer"][$_SESSION["whitney"][$_SESSION["counter"]-2]["correctAnswer"]]){
    echo $_SESSION["results"]++;
    echo "You got the last question right! No more questions!";
    echo "<br>";
} else {
    echo "Your last question was incorrect.  No more questions!";
    echo "<br>";
}

?>
 <br><br><br><br><br><br><br><br><br>
         <p>You answered <?php echo $_SESSION["results"]; ?> out of 10 questions correctly.</p>
         <p>Your score is  <?php echo $_SESSION["results"]*10; ?>%!</p><br>
         <p>Would you like to give it another go?</p><br>


         <a href ="../index.php"  type="submit" class="btn"><center>Try Again</center></a>
              </div>
            </div>
        </div>
    </body>
</html>