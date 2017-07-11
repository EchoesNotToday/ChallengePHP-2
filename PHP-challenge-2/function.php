<?php 

function print_the_range (Int $start, Int $end){
$range = "<ul>";
while($start <= $end){
	if(($start % 2 == 0) && (fmod(sqrt($start), 1) ==0)){
		$range .= "<div class =\"perfect_square_pair\">$start</div>";
	}
	elseif($start % 2 ==0){
		$range .= "<div class =\"pair\">$start</div>";
	}
	elseif(($start % 2 > 0) && (fmod(sqrt($start), 1) ==0)){
		$range .= "<div class =\"perfect_square_impair\">$start</div>";
	}
	else{
		$range .= "<div class =\"impair\">$start</div>";
	}
	$start++;
}
$range .= "</ul>";
return $range;
}

function biggest_gap(Array $tab){
	$result = [];
	for($i=0; $i < count($tab) ; $i++){
		if($tab[$i] > $tab[$i+1]){
			$subtraction = $tab[$i] - $tab[$i+1];
			array_push($result, $subtraction);
		}
		
		elseif($tab[$i] < $tab[$i+1]){
			$subtraction = $tab[$i+1] - $tab[$i];
			array_push($result, $subtraction);
		}
		//$i++;
		return $result;
}
}






function forkgame($try){
	$nb_to_guess = rand(1, 3);
	$tries = '';

	$i = 0;
	while ($i < 8){
		if ($tries < $nb_to_guess){
			echo "nombre donné trop petit.";
			$i++;
		}
		elseif ($tries > $nb_to_guess){
			echo "nombre donné trop grand.";
			$i++;
		}
		elseif ($tries = $nb_to_guess){
			echo "bravo, vous avez trouvé en ".$i." essais.";
		}
		break;
		if($i == 8){
			echo "désolé, le nombre était ".$nb_to_guess.".";
		}
	}
}





 ?>