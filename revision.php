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

//$days_of_week = array(
//    "monday", "tuesday", "wednesday", "thursday",
//    "friday", "saturday", "sunday"
//);

//function shortenString($array){
//    foreach($array as $i){
//        echo substr($i,0,3);
//    }
//}

//shortenString($days_of_week);


//if (!isset($_COOKIE['count'])){
//    $cookie = 1;
//    setcookie('count',$cookie);
//}
//else{
//    $cookie = ++$_COOKIE['count'];
//    setcookie('count',$cookie);
//}

//echo $_COOKIE['count'];

$x = 1;
if($x==1.0)
    echo "True <br />";
else
    echo "False <br />";
$x = 1.0;
if($x===1)
    echo "True <br />";
else
    echo "False <br />";

function name_of_coins($cents){
    static $coins_of_usa = array(
        1=>"penny", 5=>"nickel", 10=>"dime",
        25=>"quarter", 50=>"half dollar", 100=>"dollar"
    );
    foreach($coins_of_usa as $i){
        if($cents == $i)
            $cents = $i;
    }
}

$input = 5;

name_of_coins($input);

echo $input;