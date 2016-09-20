<?php 
// $listy = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', ' seventh');
// 	foreach ($listy as $item) {
// 		if ($item == 'third') {
// 			echo prev($listy);
// 		}
// 	}
$arr = array("jan","feb","mar","apr","mei","jun","jul","agu","sep","okt","nov","des");
foreach($arr as $key => $ar){
    if ($ar == "mar") {
        $prev = $arr[$key-1];
        echo  $prev;
    }
}
?>