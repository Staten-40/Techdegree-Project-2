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
        margin-top: 1%;
        font-weight: bold;
        left: 10%;
        right: 10%;
        line-height: .10;
    }

    .toast {
        margin-left: -47%;
        margin-top: 8%;
        font-weight: bold;
        left: 10%;
        right: 10%;
        width: 80%;
        line-height: .5;
    }

    input.btn2 {
        width: 12em;
        display: inline-block;
        bottom: 150px;
        border-radius: 4px;
        border: 2px solid 	#00FF00;
        color: black;
        background-color: 	#00FF00;
        padding: 15px;
        margin: 4px;
        transition: .5s ;
        text-decoration: none;


    }

</style>
   <body>



<div class = "header">
<h1>MATH QUIZ</h1>

 <div class = "header2">
 <h3>Mrs. Shoobobbisock's Class</h3>

     <div class="toast">
<?php

/*$answer = trim(FILTER_SANTAIZE_STRING["answer"], FILTER_SANITIZE_STRING);
if($answer == [$_SESSION["whitney"]]) {
    $_SESSION["message"] = "Woo hoo!  You got it right!  Here's the next one:"
    $_SESSION["results"]++;
} elseif($_SESSION["message"] = "Bummer.  Wrong answer.  Better luck with the next question:";
} elseif($_SESSION["message"] == $_POST["answer"] = $_SESSION["tina"][$_SESSION["counter"]-2]["correctAnswer"]){
    echo "You got the last question right!";
} else {
    echo "The last question was incorrect"<br />;    }
    echo "NO MORE QUESTIONS!"; \n;
    echo " You answered $_SESSION{\"results\"] out of 10 questions correctly! Your Grade: $_SESSION["\results\"] * 10";"
}

"<p>Would you like to give it another go?</p>";

*/




$total = 10;
if($_SESSION["message"] == $_POST["answer"] = $_SESSION["tina"][$_SESSION["counter"]-2]["correctAnswer"]){
    $_SESSION["results"]++;
    echo "You got the last question right";
    echo "<br>";
    echo "<br>";

} else {
    echo "The last question was incorrect";
    echo "<br>";
    echo "<br>";
}

echo "No more questions!";
echo "<br>";
e

echo "You got " . $_SESSION["results"] . "correct out of 10 questions!";
echo "<br>";


echo "Your score is " . $_SESSION["results"]*10 . "%!"

?>
         "<p>Would you like to give it another go?</p>"

         <a href="../index.php"><button>Try Again</button></a>


              </div>
            </div>
        </div>
    </body>
</html>