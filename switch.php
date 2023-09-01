<?php
$today=date('l');
$today ='Saturday';
switch ($today){
    case 'Monday':
        echo 'Wash on Monday';
        break;
    case 'Tuesday':
        echo 'Iron on Tuesday';
        break;
    case 'Wednesday':
        echo 'Mend on Wednesday';
        break;
    case 'Thursday':
        echo 'Learn on Thursday';
        break;
    case 'Friday':
        echo 'Clean on Friday';
        break;
    case 'Saturday':
        echo 'Saturday is Weekend.';
    case 'Sunday':
        echo " " .'Rest on Weekend';
        break;
    default:
        echo 'I do not know what day it is';
        break;    
}
?>