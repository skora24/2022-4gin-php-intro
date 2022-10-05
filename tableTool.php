<?php
require_once "tableTool.interface.php";

class tableTool implements tableToolInterface{
    var $nos;
    public function __construct($data){
    $this->nos=$data;   
    }
    private function Sortowanie($szukana)
    {
        sort($this->nos);
        $sortRes=array();
        foreach ($this->nos as $wyrazy) {
            if(preg_match("/{$szukana}/i", $wyrazy)) {
                $sortRes[]= $wyrazy;
            }
        }
        return $sortRes;
    }
        
       
    public function renderHTML($cols, $filterString='')

    {
        $liczba = 1;
        $tableRes = '';
        $tableRes .= '<table>';
        $sortData = $this->Sortowanie($filterString);
        foreach ($sortData as $wyraz) {
            
            if ($liczba <= $cols) {
                if ($liczba % $cols == 1) {
                    $tableRes .= '<tr><th>' . $wyraz . '</th>';
                } else if ($liczba % $cols == 0) {
                    $tableRes .= '<th>' . $wyraz . '</th></tr>';
                } else {
                    $tableRes .= '<th>' . $wyraz . '</th>';
                }
            } else {
                if ($liczba % $cols == 1) {
                    $tableRes .= '<tr><td>' . $wyraz . '</td>';
                } else if ($liczba % $cols == 0) {
                    $tableRes .= '<td>' . $wyraz . '</td></tr>';
                } else {
                    $tableRes .= '<td>' . $wyraz . '</td>';
                }
            }
            $liczba++;
        }
        $tableRes .= '</table>';
        return $tableRes;
    }

}

// NIE DOTYKAĆ KODU PONIŻEJ TEJ LINIJKI

$array = explode(' ', file_get_contents('lorem.txt'));

$table = new tableTool($array);

// Tests
echo $table->renderHTML(3);
echo $table->renderHTML(10);
echo $table->renderHTML(5,'id');
// echo $table->renderCSV(3);
// echo $table->renderCSV(10);
// echo $table->renderCSV(5,'id');
// echo $table->renderMD(3);
// echo $table->renderMD(10);
// echo $table->renderMD(5,'id');