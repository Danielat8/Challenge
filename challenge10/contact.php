<?php
// Task 1
$name = "Kathrin";

if ($name == "Kathrin") {
    echo "Hello Kathrin";
} else {
    echo "Nice name";
}
echo "<hr/>";
// Task 1-2

$rating = 9;

if ($rating  >= 1 && $rating <= 10) {
    echo "Thank you for rating";
} else {
    echo "Invalid rating, only numbers between 1 and 10.";
}

echo '<hr/>';

// Task 2
$currenthour = date("H");
echo $currenthour;
echo "<br>";
if ($currenthour < 12) {
    echo "Good morning Kathrin";
} elseif ($currenthour >= 12 && $currenthour < 19) {
    echo "Good afternoon Kathrin";
} elseif ($currenthour >= 19) {
    echo "Good evening Kathrin";
}
echo "<br/>";

$rated = true;
if (is_int($rating) && ($rating >= 1 && $rating <= 10) && ($rated)) {
    echo "You already voted";
} else {
    echo "Thanks for voting";
}

echo "<hr/>";


// task3
$voters =  [
    'Marija' => [false, 5],
    'Nikola' => [true, 8],
    'Jovan' => [true, 3],
    'Ivan' => [false, 18],
    'Eva' => [false, 55],
    'Maja' => [true, 7],
    'Angela' => [false, 90],
    'Eva' => [false, 33],
    'Iva' => [false, 77],
    'Ela' => [true, 6],
];



foreach ($voters as $voterName => $voterrated) {
    list($voted, $rating) = $voterrated;
    if ($currenthour < 12) {
        echo "Good morning $voterName, ";
    } elseif ($currenthour >= 12 && $currenthour < 19) {
        echo "Good afternoon $voterName, ";
    } elseif ($currenthour >= 19) {
        echo "Good evening $voterName, ";
    }
    if ($voted) {
        echo "You already voted with  $rating. <br>";
    } elseif ($rating >= 1 && $rating <= 10) {
        echo "Thanks for voting with  $rating. <br>";
    } else {
        echo "Invalid rating, only numbers between 1 and 10.<br>";
    }
}
