<?php
$t1_response=$_GET['t1_response'];
$t2_response=$_GET['t2_response'];
$t3_response=$_GET['t3_response'];

if ($t1_response == "diff") {
    $t1_correct=1;
} else {
    $t1_correct=0;
}
if ($t2_response == "diff") {
    $t2_correct=1;
} else {
    $t2_correct=0;
}
if ($t3_response == "same") {
    $t3_correct=1;
} else {
    $t3_correct=0;
}

$accuracy=($t1_correct+$t2_correct+$t3_correct)/3;


$t1_rt=$_GET['t1_rt'];
$t2_rt=$_GET['t2_rt'];
$t3_rt=$_GET['t3_rt'];

$avg_rt=($t1_rt+$t2_rt+$t3_rt)/3;

echo "Your accuracy is \"$accuracy\"<br>";
echo "Your average reaction time is \"$avg_rt\" ms";

?>

