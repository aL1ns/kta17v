<?php 

include 'functions.php';

back_home();

// array(workdays)
$myarr = array ('Esmaspaev','Teisipaev','Kolmapaev','Neljapaev','Reede'); // 

/*$myarr = array ('esm'=>'Esmaspaev',  // делаем свой индекс
                'tsp'=>'Teisipaev',
                'klm'=>'Kolmapaev',
                'nlp'=>'Neljapaev',
                'rd'=>'Reede');
*/
$day = "reede";

echo strtoupper($day)."<br>";

//var_dump($myarr);
# echo count($myarr);

for($i = 0; $i < count($myarr); $i++){     // заставляем считать массив "for($i = 0; $i < 5; $i++){ если знаем сколько"
    if (strtoupper($myarr[$i]) == strtoupper($day)){
    echo "<strong>".$myarr[$i]." is is a work day</strong><br>";
    }elseif ($day == 'Laupaev' || $day == 'Puhapaev'){
        echo "$day is weekend";
         die;
    } //else {echo "Not a week day";}
}
$mat = "Matemaatika";
$kem = "Keemia";
$fys = "Fuusika";

$grades = array("Peeter"=>array($mat => 5, $kem =>3, $fys => 3),
               "Tiit"=>array($mat => 4, $kem =>4, $fys => 3),
                "Agness"=>array($mat => 5, $kem =>5, $fys => 4));
echo "Peetri hinne aines ".$mat." on ".$grades['Peeter'][$mat];

echo "<br>";
//echo count($grades);
$grades_id = array_keys($grades);
print_r($grades_id);

for ($i = 0; $i <count($grades_id); $i++){
    echo $grades_id[$i]."<br>";
    foreach($grades[$grades_id[$i]] as $predmet => $grade){
        echo $predmet." : ".$grade."<br>";
    }
}


?>