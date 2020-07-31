<?php
$salary = 10000;
if($salary < 10000){
    $salary = $salary + 200;
}elseif($salary < 11000){
    $salary +=  200;
}elseif($salary < 12000){
    $salary +=  300;
}

echo 'Salary: ' .$salary;
echo '<br>';

$bath = 100;
echo($bath ==300?"300":"200");
echo '<br>';

$score = 9 ;$age=10;
echo "Your Score is : ". $score > 10 ? ($age > 10 ? "Average": "Exceptional"): ($age > 10 ? "Horrible": "Average");