<?php

/*Домашнее задание1: повторить задание для Exel на языке php
(расчет параметров памяти для 2500 фото и налогов с продажи) */


$spisok=fopen("users.txt","r");
//php.su fopen
$users=Array();
/*---===== перегонка строк из файла в массив =====---*/
do{
	$userSTR=fgets($spisok); // fgets считывает одну строку из файла
	//echo $userSTR; // вывести строку
	$users[]=explode(" ",$userSTR); // $users[][0] - имя, $users[][1] - Фамилия, $users[][2] - исиукоод
}while(!feof($spisok));

fclose ($spisok); // закрыть файл

/*----===== расшифровка даты рождения из песонального когда для каждого пользователя =====----*/
$dnirozdenija=Array();
foreach ($users as $kljuch => $strokaIzMassiva){
	//теперь $strokaIzMassiva[0] - имя, $strokaIzMassiva[1] - Фамилия, $strokaIzMassiva[2] - исиукоод
	$god=substr($strokaIzMassiva[2],1,2); // вырезать из строки строку
	if (substr($strokaIzMassiva[2],0,1)==3 || substr($strokaIzMassiva[2],0,1)==4){
		//$god+=19; во боих случиях нельзя прибовлять
		//$god+=1900;
		$god="19".$god;
	}elseif(substr($strokaIzMassiva[2],0,1)==5 || substr($strokaIzMassiva[2],0,1)==6){
		$god="20".$god;
	}else {$god="18".$god;
	}
	$mesjac=substr($strokaIzMassiva[2],3,2);
	$denj=substr($strokaIzMassiva[2],5,2);
	$users [$kljuch][3]=$denj;
	$users [$kljuch][4]=$mesjac;
	$users [$kljuch][5]=$god;
	$dnirozdenija [$kljuch]=$god.$mesjac.$denj;
}
//sort($dnirozdenija);
//asort($dnirozdenija);
$arhichnij=min($dnirozdenija); // поиск самого раннего дня рождения
$zelenyj=max($dnirozdenija); // поиск самого позднего дня рождения
$ktoArhichnij=array_search($arhichnij,$dnirozdenija);
$ktoZelenyj=array_search($zelenyj,$dnirozdenija);

echo '<h3>Самый опытный </h3>';
print_r($users[$ktoArhichnij]);
echo '<h3>Самый перспективный </h3>';
print_r($users[$ktoZelenyj]);

/*Домашнее задание2: Решить проблему если будут один. дни рожд
вывксти всех людей если у них одинаковый самый ранний или самый поздний день рождения

*/


print_r($users);

//
//$users[0]=Array();


//-----------Задание: Вывести все имена по 1 разу ------------
$nameList=Array();
foreach($users as $index => $userInfo){ // перебираем по пользователям
	$indexOfName=array_search($userInfo[0],$nameList); // ищем
	if ($indexOfName===FALSE){ // если не нашли, то добавляем имя нового человека
		$nameList[]=$userInfo[0];
		}
}

echo '<h2>Неповторяющийся список имен</h2>';
print_r($nameList);
/* Домашнее задание3: Вывести список только тех имен, которые не повторяются */


?>