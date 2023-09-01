<?php
$currentYear=date('Y');
//$year=$currentYear-25;

/*while(++$year <= $currentYear){
    echo $year . "\n";
    $year++;
}*/
/*do{
    echo $year . "\n";
}while(++ $year <= $currentYear);*/

/*$learn = array('Conditionals','Arrays','Loops');
$learn[]='Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');
asort($learn);
$count=0;


foreach ($learn as $key => $val) {
    if($count < 2){
        echo "$key => $val\n";
        $count ++;
    }else{
        break;
    }
    
}*/
// for ($year = date('Y') - 24; $year <= $currentYear;$year++){
//     echo $year . " \n";

// }

$learn = array('Conditionals','Arrays','Loops');
$learn[]='Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');
asort($learn);
$count=0;

for($i=0; $i< count($learn); $i++){
  echo $learn[$i] . "\n";
}
?>