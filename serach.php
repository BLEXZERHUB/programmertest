<?php
// txt_list:txt_list,txt_search:txt_search,algor:algor
$arr = $_REQUEST["txt_list"];
$value = $_REQUEST["txt_search"];
$algor = $_REQUEST["algor"];
$toarr = explode(',',$arr);
// echo json_encode($algor,JSON_UNESCAPED_UNICODE);
// $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
// $value = 15;
$res = array();
if($algor == 1){
    echo linearSearch($arr, $value,$res);
}

// echo linearSearch($arr, $value);
// echo "<br>";
// echo "<br>";
// echo binarySearch($arr, $value);
// if(binarySearch($arr, $value)) { 
//     echo $value." Exists"; 
// } 
// else { 
//     echo $value." Doesnt Exist"; 
// } 


function linearSearch($arr, $x,$res) {
    $k = 0;
    for($i = 0; $i < sizeof($arr); $i++) {
        $k = $k +1;
        if($arr[$i] == $x) {
            array_push($res,   "Round : " .$k ." ====> ".$x ." = " .$arr[$i] . " found!!");
            // echo "Round : " .$k ." ====> ".$x ." = " .$arr[$i] . " found!!";
            // $i = $i+sizeof($arr);
            return json_encode($res,JSON_UNESCAPED_UNICODE);
        }else{
            array_push($res,  "Round : " .$k ." ====> ".$x ." != " .$arr[$i]. "<br>");
            // echo "Round : " .$k ." ====> ".$x ." != " .$arr[$i]. "<br>";
        }
    }
    array_push($res,  $x ." Not found in array ");
    // echo $x ." Not found in array " ;
    return json_encode($res,JSON_UNESCAPED_UNICODE);
}



function binarySearch($arr, $x) 
{ 
    $k = 0;
    sort($arr);
    // check for empty array 
    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = count($arr) - 1;  
    while ($low <= $high) { 
        $k = $k +1;  
        // compute middle index 
        $mid = floor(($low + $high) / 2); 
        // element found at mid 
        if($arr[$mid] == $x) { 
            // return true; 
            echo "Round : " .$k ." ====> ".$x ." = " .$arr[$mid] . " found!!";
            return ;
        } 
  
        if ($x < $arr[$mid]) { 
            // search the left side of the array 
            $high = $mid -1; 
            echo "Round : " .$k ." ====> ".$x ." != " .$arr[$mid]. "<br>";
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
            echo "Round : " .$k ." ====> ".$x ." != " .$arr[$mid]. "<br>";
        } 
    } 
      
    // If we reach here element x doesnt exist 
    echo $x ." Not found in array " ;
} 
