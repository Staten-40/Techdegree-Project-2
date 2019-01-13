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
        background-color: #99cc66
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
        eight: bold;
        left: 10%;
        right: 10%;
        line-height: .10;
    }

</style>
   <body>



<div class = "header">
<h1>MATH QUIZ</h1>

 <div class = "header2">
 <h3>Mrs. Shoobobbisock's Class</h3>


<?php
if($_SESSION["message"] == $_POST["answer"] = $_SESSION["tina"][$_SESSION["counter"]-2]["correctAnswer"]){
    echo "You got the last question right";

} else {
    echo "The last question was incorrect";
}

echo "No more questions! You answered $_SESSION{"results"] out of 10 questions correctly! Your Grade: $_SESSION["results"]* 10;

ech d you like to give it another try?</p>";



?>


        </div>
    </body>
</html>
