<?php

$data = array(
    10000 => 15000,
    15000 => 20000,
    "salary" => 30000
);

foreach ($data as &$value) {
    // $value = $value * 2;
    // echo $value;
    $salary = $value;
    if ($salary < 10000) {
        $salary = $salary + 200;
    } elseif ($salary < 11000) {
        $salary +=  200;
    } elseif ($salary < 12000) {
        $salary +=  300;
    }

    echo 'Salary: ' . $salary;
    echo '<br>';
}
echo '<br>';


$marks =array( 
    "mohammad"=>array(
        "physics"=>35, 
        "maths"=>30,
        "chemistry"=>39 
    ),
     "qadir"=>array(
        "maths"=>32,
        "physics"=>30, 
        "chemistry"=>29
    ), 
    "zara"=>array(
    
        "physics"=>31, 
        "maths"=>22, 
        "chemistry"=>39
    ) 
);
echo $marks["mohammad"]["physics"];
echo sizeof($marks);

echo '<br>';
foreach ($marks as &$value) {
    // print_r($value);

    foreach ($value as &$valueT) {
        echo $valueT;
        echo '&nbsp;';
    }
    // echo '<br>';
}
