<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 12/01/2016
 * Time: 11:45
 */
//$juice = 'apple';
//echo "i drank some $juice juice<br />";
//echo 'i drank some $juice juice <br />';

//$a = 0;
//$b = &$a;
//$b++;
//echo '$a == ', $a, '<br />';

//$arr = array('one','two','three','four','stop','five');
//while (list(, $val) = each($arr)){
//    if ($val == 'stop'){
//        break 1;
//    }
//    echo "$val<br />\n";
//}

$days_of_week = array(
    "monday", "tuesday", "wednesday", "thursday",
    "friday", "saturday", "sunday"
);

function shortenString($array){
    foreach($array as $i){
        echo substr($i,0,3);
    }
}

shortenString($days_of_week);