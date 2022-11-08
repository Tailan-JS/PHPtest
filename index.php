<?php

//função 1 -> obter o século a partir de um ano dado
function seculoAno(int $ano){
	return ($ano%100 == 0?(int)(($ano/100)):(int)(($ano/100)+1)) ;
}

//obter o primeiro número primo anterior a um número dado
function primoAnterior(int $numero){

	$primo = ($numero-1);
	while($primo >= 2){
		$i;
		$div = 0;
		for($i = 2; $i<=($primo/2); $i++){
			if(($primo%$i)==0)
			$div++;
		}
		if($div==0){
		return $primo;
		}
		else{
		$primo--;
		continue;
		}
	}

}

//obter o segundo maior número de um array multidimensional
function segundoMaior(array $arr){
	$maior = 0;
	$segundoMaior = 0;
	foreach($arr as $arrValue){
		foreach($arrValue as $num){
			if($num > $segundoMaior)
				$segundoMaior = $num;
				if($segundoMaior > $maior){
					$aux = $maior;
					$maior = $segundoMaior;
					$segundoMaior = $aux;
				}
		}
	}
	return $segundoMaior;
}


$arrayTest = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
  );


//verificar se é possível ordenar um vetor com a remção de apenas um número.
$array2 = [1, 2, 8, 6,5];
function sequenciaCrescente(array $arr){
	$flag = 0;
	for($i = 0; $i < count($arr) -1 ; $i ++){
		if($arr[$i]>$arr[$i + 1])
			$flag++;
	}
	return $flag>=2?false:true;
}
echo(sequenciaCrescente($array2));
echo(segundoMaior($arrayTest));
echo(seculoAno(1810));
echo(primoAnterior(28));
?>
