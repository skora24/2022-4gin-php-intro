<?php
$ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium turpis vel nisi dapibus, eget gravida urna maximus. Vivamus faucibus accumsan orci. Ut pulvinar aliquam lorem quis suscipit. Nunc est velit, condimentum sed nisi ac, egestas rhoncus nulla. Cras nec nisi nec neque ultrices vestibulum. Morbi eu libero gravida, aliquet sapien id, mollis nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin risus metus, feugiat quis felis quis, laoreet imperdiet turpis. Proin vulputate ultricies sem, vel tincidunt libero porttitor at. Nam eu mattis sapien, ac malesuada nisi. Aliquam condimentum, velit semper auctor interdum, enim.";


$wyszukiwanie = "b";


function sortandsearch($text, $look){
   
    
$S = explode(" ", $text);

sort($S, SORT_NATURAL | SORT_FLAG_CASE);

foreach($S as $slowo){
    if(preg_match("/\b(\w*$look\w*)\b/", $slowo, $match) == true){
    echo "$match[0] </br>";
    }
}

};

sortandsearch($ipsum, $wyszukiwanie);

function renderHTMLTable($ilosc, $tak){ 
    $S = explode(" ", $tak);
$liczba = 1;
echo '<table>';
foreach ($S as $wyraz){
    if ($liczba <= $ilosc){
        if($liczba % $ilosc == 1){
            echo "<tr><th>".$wyraz."</th>";
        }
        else if ($liczba % $ilosc == 0){
            echo "<th>".$wyraz."</th></tr>";
        }
        else {
            echo "<th>".$wyraz."</th>";
        }
     } else {
            if($liczba % $ilosc == 1){
                echo "<tr><td>".$wyraz."</td>";
            }
            else if ($liczba % $ilosc == 0){
                echo "<td>".$wyraz."</td></tr>";
            }
            else {
                echo "<td>".$wyraz."</td>";
            }
        }
        $liczba++;
    }
    echo "</table>";
}
$kolumna = "4";
renderHTMLTable ($kolumna, $ipsum);
?> 