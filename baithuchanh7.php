<?php
	echo "Câu 1 <br>";
	function soNguyenTo($n){
		if ($n < 2) {
			return false;
		}
	
		for($i = 2; $i < sqrt($n); $i++){
			if($n % $i == 0){
				return false;
			}
		}
		return true;
	}
	$n = 50;
	if(soNguyenTo($n)){
		echo "$n là số nguyên tố";
	}else{
		echo "$n không là số nguyên tố";
	}
	echo "<br>";
	echo "<br>";
	echo "Câu 2 <br>";
	function isNguyenTo($n){
		if ($n < 2) {
			return false;
		}
		for($i = 2; $i < sqrt($n); $i++){
			if ($n % $i == 0) {
				return false;
			}
		}
		return true;
	}
	echo "Các số nguyên tố từ 1 đến 50 là: ";
	for($i = 1; $i <= 50; $i++){
		if(isNguyenTo($i)){
			echo ($i . " ");
		}
	}
	echo "<br>";
	echo "<br>";
	echo "Câu 5 <br>";
	function UCLN($a, $b){
		if ($b == 0) {
			return $a;
		}
		return UCLN($b, $a % $b);
	}
	function BCNN($a, $b){
		return ($a * $b)/UCLN($a, $b);
	}
	$a = 28;
	$b = 67;
	echo ("UCLN của $a và $b là: ".UCLN($a, $b))."<br>";
	echo ("BCNN của $a và $b là: ".BCNN($a, $b));
	echo "<br>";
	echo "<br>";
	echo "Câu 7 <br>";
	echo "Cho phương trình bậc nhất 5x + 6 = 0, tìm x?<br>";
	$a = 5;
	$b = 6;
	echo "Giải <br> Ta có x = ".-$b/$a;
	echo "<br>";
	echo "<br>";
	echo "Câu 3 <br>";
	function soHoanHao($n){
		$sum = 0;
		for($i = 1; $i <= $n/2; $i++){
			if($n % $i == 0){
				$sum += $i;
			}
		}
		if($sum == $n)
			return true;
		return false;
	}
	$n = 496;
	if(soHoanHao($n)){
		echo "$n là số hoàn hảo";
	}else{
		echo "$n không phải số hoàn hảo";
	}
	echo "<br>";
	echo "<br>";
	echo "Câu 4 <br>";
	echo "Các số hoàn hảo từ 1 đến 10000 là: ";
	for($i = 1; $i <= 10000; $i++){
		if (soHoanHao($i)) {
			echo ($i . " ");
		}
	}
	echo "<br>";
	echo "<br>";
	echo "Câu 6 <br>";
	function sumDigit($number){
		$sum = 0;
		while($number > 0){
			$digit = $number % 10;
			$sum = $sum + $digit;
			$number = ($number - $digit) / 10;
		}
		return $sum;
	}
	$result = sumDigit(178958);
	echo "Tổng các chữ số trong số nguyên n là : $result";
	echo "<br>";
	echo "<br>";
	echo "Câu 8 <br>";
?>