<?php
$hoofdstad = array("Japan" => "Tokyo", "Mexico" => "Mexico-city", "USA" => "Washington D.C.", "India" => "New Delhi", "Zuid-Korea" => "Seoul", "China" => "Peking", "Nigeria" => "Abuja", "Argentina" => "Buenos Aires", "Egypt" => "Cairo", "UK" => "London");
echo "hoeveel landen wil je toevoegen?";
$koekje = readline();

for($i = 1; $i <= $koekje; $i++){
echo "Welk land wil je toevoegen?";
$land2 = readline();
echo "Wat is de hoofdstad van $land2";
$land3 = readline();
$totaal[$land2]=$land3;
array_push($hoofdstad, $totaal);
}

foreach($hoofdstad as $land => $boo){
    echo "wat is de hoofdstad van " .$land.PHP_EOL; 
    $stad = readline();
    if($stad == $boo){
        echo "dat klopt ga maar door" .PHP_EOL;
    }else{
        echo "Helaas $stad is niet de hoofdstad van $land";
        exit;
    }
}
?>
