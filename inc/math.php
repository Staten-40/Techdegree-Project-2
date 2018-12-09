<?php
session_start();
$total = 10;
$page = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    if(isset($_POST ['choice'])) {
        $_SESSION['choice'][$page - 1] = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_STRING);
    }
    
// Generate random questions

$questions[] =
    [
        "leftAdder" => 18,
        "rightAdder" => 14,
        "correctAnswer" => 32,
        "firstIncorrectAnswer" => 22,
        "secondIncorrectAnswer" => 33
    ];
$questions[] =
    [
        "leftAdder" => 43,
        "rightAdder" => 32,
        "correctAnswer" => 75,
        "firstIncorrectAnswer" => 85,
        "secondIncorrectAnswer" => 76
    ];
$questions[] =
    [
        "leftAdder" => 54,
        "rightAdder" => 17,
        "correctAnswer" => 71,
        "firstIncorrectAnswer" => 61,
        "secondIncorrectAnswer" => 78
    ];
$questions[] =
    [
        "leftAdder" => 62,
        "rightAdder" => 27,
        "correctAnswer" => 89,
        "firstIncorrectAnswer" => 84,
        "secondIncorrectAnswer" => 94
    ];
$questions[] =
    [
        "leftAdder" => 92,
        "rightAdder" => 15,
        "correctAnswer" => 107,
        "firstIncorrectAnswer" => 97,
        "secondIncorrectAnswer" => 117
    ];
$questions[] =
    [
        "leftAdder" => 17,
        "rightAdder" => 73,
        "correctAnswer" => 90,
        "firstIncorrectAnswer" => 80,
        "secondIncorrectAnswer" => 90
    ];
$questions[] =
    [
        "leftAdder" => 16,
        "rightAdder" => 48,
        "correctAnswer" => 64,
        "firstIncorrectAnswer" => 54 ,
        "secondIncorrectAnswer" => 88
    ];
$questions[] =
    [
        "leftAdder" => 6,
        "rightAdder" => 55 ,
        "correctAnswer" => 61,
        "firstIncorrectAnswer" => 80,
        "secondIncorrectAnswer" => 71
    ];
$questions[] =
    [
        "leftAdder" => 38,
        "rightAdder" => 18,
        "correctAnswer" => 56,
        "firstIncorrectAnswer" => 46,
        "secondIncorrectAnswer" => 54
    ];
$questions[] =
    [
        "leftAdder" => 72,
        "rightAdder" => 19,
        "correctAnswer" => 91,
        "firstIncorrectAnswer" => 81,
        "secondIncorrectAnswer" => 98
    ];


// Loop for required number of questions

shuffle($questions);

foreach ($questions as $test) {
    echo "What is " . $test['leftAdder'] . " + " . $test['rightAdder'] . "  = " . " ?";
    unset($test);

}

// Get random numbers to add

$answer = ['leftAdder'] + ['rightAdder}'] == ['correctAnswer'];



// Calculate correct answer

// Get incorrect answers within 10 numbers either way of correct answer
// Make sure it is a unique answer

// Add question and answer to questions array