<?php
$diff = [];
$intersect = [];
$ListError = '';
$ListError1 = '';
$ListError2 = '';
$ListNoError = '';
$listDuplicate = '';
$listNoDuplicate = '';
if (isset($_POST['listA'])) {

    $number1 = $_POST['listA'];
} else {
    $number1 = "";
}
if (isset($_POST['listB'])) {

    $numberFil1 = $_POST['listB'];
} else {
    $numberFil1 = "";
}
if ((!empty($number1)) && (!empty($numberFil1))) {


    $number1 = str_replace(',', "", $number1);
    $number1 = str_replace('.', "", $number1);
    $number1 = preg_replace("/[^0-9,.]/", "", $number1);
    $number1 = preg_replace('/\s+/', '', $number1);
    $numberFil1 = str_replace(',', "", $numberFil1);
    $numberFil1 = str_replace('.', "", $numberFil1);
    $numberFil1 = preg_replace("/[^0-9,.]/", "", $numberFil1);
    $numberFil1 = preg_replace('/\s+/', '', $numberFil1);
    $firstCharacter1 = $number1[0];
    $firstCharacterFil1 = $numberFil1[0];
    if (($firstCharacter1 == '8') && ($firstCharacterFil1 == '8')) {
        $ArrayNumber1 = str_split($number1, 12);
        for ($i = 0; $i < count($ArrayNumber1); $i++) {
            $ArrayNumber1[$i] = ltrim($ArrayNumber1[$i], 84);
        }
        $ArrayNumber1Fil = str_split($numberFil1, 12);
        for ($i = 0; $i < count($ArrayNumber1Fil); $i++) {
            $ArrayNumber1Fil[$i] = ltrim($ArrayNumber1Fil[$i], 84);
        }
        $diff = array_diff($ArrayNumber1, $ArrayNumber1Fil);
        $intersect = array_merge($ArrayNumber1, $ArrayNumber1Fil);
    } elseif (($firstCharacter1 == '0') && ($firstCharacterFil1 == '0')) {
        $ArrayNumber1 = str_split($number1, 11);
        for ($i = 0; $i < count($ArrayNumber1); $i++) {
            $ArrayNumber1[$i] = ltrim($ArrayNumber1[$i], 84);
        }
        $ArrayNumber1Fil = str_split($numberFil1, 11);
        for ($i = 0; $i < count($ArrayNumber1Fil); $i++) {
            $ArrayNumber1Fil[$i] = ltrim($ArrayNumber1Fil[$i], 84);
        }
        $diff = array_diff($ArrayNumber1, $ArrayNumber1Fil);
        $intersect = array_merge($ArrayNumber1, $ArrayNumber1Fil);
    } elseif (($firstCharacter1 == '2') && ($firstCharacterFil1 == '2')) {
        $ArrayNumber1 = str_split($number1, 10);
        for ($i = 0; $i < count($ArrayNumber1); $i++) {
            $ArrayNumber1[$i] = ltrim($ArrayNumber1[$i], 84);
        }
        $ArrayNumber1Fil = str_split($numberFil1, 10);
        for ($i = 0; $i < count($ArrayNumber1Fil); $i++) {
            $ArrayNumber1Fil[$i] = ltrim($ArrayNumber1Fil[$i], 84);
        }
        $diff = array_diff($ArrayNumber1, $ArrayNumber1Fil);
        $intersect = array_merge($ArrayNumber1, $ArrayNumber1Fil);
    }

    for ($j = 0; $j < count($diff); $j++) {
        $listNoDuplicate .= "84" . $diff[$j] . ","; //dãy đã lọc
    }

    for ($j = 0; $j < count($ArrayNumber1Fil); $j++) {
        $ListError1 .= "84" . $ArrayNumber1Fil[$j] . ","; // dãy để lọc
    }

    for ($j = 0; $j < count($ArrayNumber1); $j++) {
        $ListError2 .= "84" . $ArrayNumber1[$j] . ","; //dãy được lọc
    }


    $duplicateValues = [];
    $valueCounts = [];
    foreach ($intersect as $value) {
        if (!isset($valueCounts[$value])) {
            $valueCounts[$value] = 1;
        } else {
            $valueCounts[$value]++;
            if ($valueCounts[$value] >= 2) {
                $duplicateValues[] = $value;
            }
        }
    }
    for ($j = 0; $j < count($duplicateValues); $j++) {
        $listDuplicate .= "84" . $duplicateValues[$j] . ","; // dãy trùng 
    }
}
