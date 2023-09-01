<?php
// $learn = array('Conditionals','Arrays','Loops');
// $learn[]='Build something awesome!';
// //like stack,add the elements at the end of the array
// array_push($learn,'Functions','Forms','Objects');
// //add the elements at the start of the array
// array_unshift($learn,'HTML','CSS');
// echo 'you removed' . array_pop($learn);
// echo 'you removed' . array_shift($learn);
// unset($learn[1],$learn[2]);//can remove more than one
// $learn=array_values($learn);
// unset($learn);
// //PHP automatically add square bracket[] to the array element
// var_dump($learn);
// //echo $learn[1];
// //echo $learn;
// // echo implode("\n",$learn);

$learn = array('Conditionals','Arrays','Loops');
$learn[]='Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');
asort($learn);
sort($learn);
rsort($learn);
// echo 'you removed' . array_pop($learn);
// echo 'you removed' . array_shift($learn);
shuffle($learn);
echo $learn[0];
unset($learn[1],$learn[2]);
$learn=array_values($learn);
$learn[0]='Email';//overwrite 

// var_dump($learn);
?>