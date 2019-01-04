
$numOne = rand(1,100);
$numTwo = rand(1,100);

if (isset $_REQUEST["correctAnswer"])) {
$studentAnswer = $_REQUEST["studentAnswer"];
$firstNum = $_REQUEST["numOne"];
$secondNum = $_REQUEST["numTwo"];
$addBoth = $numOne + $numTwo;

if($addBoth == $studentAnswer) {
echo "Woo hoo!  You got it right!";
} else {
echo "Uh, oh.  Wrong answer.  Better luck with the next one.";
}

?>

/*

input type=hidden name="numOne" value=<?php echo $firstNum; ?>
input type=hidden name="numOne" value=<?php echo $secondNum; ?>

//counter

$counter = 1;
while ($counter <= 10) {
echo $counter;
$counter++;
}
