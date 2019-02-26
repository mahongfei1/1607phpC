<?php 

function sheng($n,$m){
	$arr=range(1,$n);
	$len=count($arr);
	$k=0;
	while (count($arr)>1) {
		for ($i=0; $i <$len ; $i++) { 
			if(!isset($arr[$i])){
				continue;
			}
			$k++;
			if($k==$m){
				unset($arr[$i]);
				$k=0;
			}
		}
	}
	return array_pop($arr);
}
print_r(sheng(6,3));













 ?>