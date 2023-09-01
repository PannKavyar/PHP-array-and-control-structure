<?php
include 'list.php';
$status=false;
$field='priority';
$filter=array();
foreach ($list as $originalKey => $item){
    if($status === 'all' || $item['complete'] == $status){
        if (isset($field) && isset($item[$field])){
            $filter [$originalKey] =$item[$field];
        }else{
        $filter[$originalKey] = $item['priority']+12;
        }
    }
    // echo $key . ' = ' . $item['title'] . "<br />\n";
}
/*asort($filter);
echo '<pre>';
var_dump($filter);*/
// var_dump($status, boolval('all'),$status === 'all');
echo '</pre>';

// echo '<pre>';
//         var_dump($filter,$list);
//         echo '</pre>';

echo '<table>';
echo  '<tr>';
echo  '<th>Title</th>';
echo  '<th>Priority</th>';
echo  '<th>Due Date</th>';
echo  '<th>Complete</th>';
foreach($filter as $id => $value){
    // if ($item['complete']){
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . "</td>\n";
    echo '<td>' . $list[$id]['priority'] . "</td>\n";
    echo '<td>' . $list[$id]['due'] . "</td>\n";
    echo '<td>' . $list[$id]['complete'];
    if ($list[$id]['complete']){
        echo 'Yes';
    }else{
        echo 'No';
    }
        echo "</td>\n";
        echo '</tr>';
}
    
// }
echo '</table>';
//var_dump($list);
?>