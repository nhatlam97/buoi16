<?php 
	// $a = 1;
	// $b =-3;
	// $c =2;
	// $delta = $b*$b -4*$a*$c;
	// $sqrt = sqrt($delta);
	// if ($a=0) {
	// 	echo "đây không là pt bậc 2";
	// }
	// else {
	// 	if ($delta>=0) {
	// 		echo "pt có nghiêm<br>";
	// 	}
	// 	else{
	// 		echo "vo nghiem";
	// 	}
	// }
	$a =4;
	$b =4;
	$c = 5;
	$tb = ($a*10+$b*40+$c*50)/100;
	$dihoc=5;
	if ($a>1 && $b>1 && $c>1) {
		if ($dihoc>=5) {
			if ($tb>=4) {
				echo "qua môn và điểm tổng kết là : $tb";
			}
			else{
				echo "không qua môn vì điểm tb dưới 4";
			}
		}
		else{
			echo "bị cấm thi";
		}
	}
	else{
		echo "bị cấm thi";
	}
 ?>
