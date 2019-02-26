<?php 
function bank($a_time,$p_time){
	$windows=[];
	$wait=0;
	$num=count($a_time);
	for ($i=0; $i <$num ; $i++) { 
		if(count($windows)<4){
			$windows[]=$a_time[$i]+$p_time[$i];
			continue;
		}
		sort($windows);
		$min=array_shift($windows);
		if($min>$a_time[$i]){
			$wait+=$min-$a_time[$i];
			$now=$min+$p_time[$i];
		}else{
			$now=$a_time[$i]+$p_time[$i];
		}
		$windows[]=$now;
	}
	return $wait/$num;
}
print_r(bank([9.01,9.10,9.20,9.21,9.22],[0.30,0.18,0.22,0.47,0.11]));














 ?>