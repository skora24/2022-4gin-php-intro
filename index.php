<?php
$ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium turpis vel nisi dapibus, eget gravida urna maximus. Vivamus faucibus accumsan orci. Ut pulvinar aliquam lorem quis suscipit. Nunc est velit, condimentum sed nisi ac, egestas rhoncus nulla. Cras nec nisi nec neque ultrices vestibulum. Morbi eu libero gravida, aliquet sapien id, mollis nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin risus metus, feugiat quis felis quis, laoreet imperdiet turpis. Proin vulputate ultricies sem, vel tincidunt libero porttitor at. Nam eu mattis sapien, ac malesuada nisi. Aliquam condimentum, velit semper auctor interdum, enim.";


$wyszukiwanie = "b";


function sortandsearch($text, $look){
   
    
$S = explode(" ", $text);

sort($S, SORT_NATURAL | SORT_FLAG_CASE);

foreach($S as $slowo){
    if(preg_match("/\b(\w*$look\w*)\b/", $slowo, $match) == true){
    }
}

};

sortandsearch($ipsum, $wyszukiwanie);



function renderCSV($ilosc, $tak){ 
    $S = explode(" ", $tak);
$liczba = 1;
foreach ($S as $wyraz){
    if ($liczba <= $ilosc){
        if($liczba % $ilosc == 1){
            echo "\n".$wyraz."";
        }
        else if ($liczba % $ilosc == 0){
            echo ";".$wyraz."\n";
        }
        else {
            echo ";".$wyraz."";
        }
            if($liczba % $ilosc == 1){
                echo "\n".$wyraz."";
            }
            else if ($liczba % $ilosc == 0){
                echo ";".$wyraz."\n";
            }
            else {
                echo ";".$wyraz."";
            }
        }
        $liczba++;
    }
    
}
$kolumna = "4";
renderCSV ($kolumna, $ipsum);


function renderMD($ilosc, $tak){ 
    $S = explode(" ", $tak);
$liczba = 1;
foreach ($S as $wyraz){
    if ($liczba <= $ilosc){
        if($liczba % $ilosc == 1){
            echo "\n".$wyraz."";
        }
        else if ($liczba % $ilosc == 0){
            echo ";".$wyraz."\n";
        }
        else {
            echo ";".$wyraz."";
        }
     } else {
            if($liczba % $ilosc == 1){
                echo "\n".$wyraz."";
            }
            else if ($liczba % $ilosc == 0){
                echo ";".$wyraz."\n";
            }
            else {
                echo ";".$wyraz."";
            }
        }
        $liczba++;
    }
    
}
$kolumna = "4";
renderMD ($kolumna, $ipsum);



?> 



 

