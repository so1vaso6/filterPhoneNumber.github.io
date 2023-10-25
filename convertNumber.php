<meta charset="UTF-8">
<?php

if (isset($_POST['listA'])) {

    $number = $_POST['listA'];
} else {
    $number = "";
}
if (isset($_POST['listB'])) {

    $numberFil = $_POST['listB'];
} else {
    $numberFil = "";
}

// print_r($number);die;
$number = str_replace(',', "", $number); //tìm kiếm dấu phẩy trong chuỗi $number và xóa nó
$number = str_replace('.', "", $number); //tìm kiếm dấu chấm trong chuỗi $number và xóa nó
$number = preg_replace("/[^0-9,.]/", "", $number); //tìm kiếm các ký tự khác chữ số, dấu phẩy, dấu chấm và xóa chúng
$number = preg_replace('/\s+/', '', $number); //tìm kiếm kí tự dấu cách hoặc nhiều dấu cách và xóa 
$checksip = $number[0] . $number[1];
$checksip2 = $number[0] . $number[1] . $number[2];
$checksip3 = $number[0];
if (($checksip == "02") || ($checksip3 == "2") || ($checksip2 == "842")) {

    $firstCharacter = $number[0];
    if ($firstCharacter == '8') {
        $ListNumber = "";
        $ListNumberSend = "";
        $ListNumberStock = "";
        $ArrayNumberFinal = [];
        $ArrayNumber = str_split($number, 12); //chuyển dữ liệu dạng chuỗi thành dạng mảng, tối đa 12 ký tự
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ArrayNumber[$i] = ltrim($ArrayNumber[$i], 84); //loại bỏ khoảng trắng và ký tự 84
        }
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ListNumber .= "84" . $ArrayNumber[$i] . ","; //nối chuỗi vừa trim xong với đầu 84
            $ListNumberSend .= "84" . $ArrayNumber[$i] . "\n";
            $ArrayNumberFinal[] = "84" . $ArrayNumber[$i];
            $ListNumberStock .= $ArrayNumber[$i] . "\n";
        }
        $ListNumber = rtrim($ListNumber, ","); //loại bỏ dấu phẩy trong list số có đầu 84
        $ListNumberSend = rtrim($ListNumberSend, "\n");
        $ListNumberStock = rtrim($ListNumberStock, "\n");
    } elseif ($firstCharacter == '0') {
        $ListNumber = "";
        $ListNumberSend = "";
        $ListNumberStock = "";
        $ArrayNumberFinal = [];
        $ArrayNumber = str_split($number, 11); //chuyển dữ liệu thành dạng mảng,tối đa 11 ký tự
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ArrayNumber[$i] = ltrim($ArrayNumber[$i], $ArrayNumber[$i][0]); //loại bỏ số 0 ở đầu mỗi phần tử
        }
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ListNumber .= "84" . $ArrayNumber[$i] . ",";
            $ListNumberSend .= "84" . $ArrayNumber[$i] . "\n";
            $ListNumberStock .= $ArrayNumber[$i] . "\n";
            $ArrayNumberFinal[] = "84" . $ArrayNumber[$i];
        }
        $ListNumber = rtrim($ListNumber, ",");
        $ListNumberSend = rtrim($ListNumberSend, "\n");
        $ListNumberStock = rtrim($ListNumberStock, "\n");
    } elseif ($firstCharacter == '2') {
        $ListNumber = "";
        $ListNumberSend = "";
        $ListNumberStock = "";
        $ArrayNumberFinal = [];
        $ArrayNumber = str_split($number, 10); //chuyển chuỗi thành mảng, tối đa 10 ký tự/phần tử
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ArrayNumber[$i] = ltrim($ArrayNumber[$i], 84); //loại bỏ khoảng trắng và ký tự 84
        }
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ListNumber .= "84" . $ArrayNumber[$i] . ",";
            $ListNumberSend .= "84" . $ArrayNumber[$i] . "\n";
            $ArrayNumberFinal[] = "84" . $ArrayNumber[$i];
            $ListNumberStock .= $ArrayNumber[$i] . "\n";
        }
        $ListNumber = rtrim($ListNumber, ",");
        $ListNumberSend = rtrim($ListNumberSend, "\n");
        $ListNumberStock = rtrim($ListNumberStock, "\n");
    }
} else {
    // print_r(strlen($number));die;
    $firstCharacter = $number[0];
    $firstCharacter2 = $number[0] . $number[1];
    if ($firstCharacter2 == '84') {
        $ListNumber = "";
        $ListNumberSend = "";
        $ListNumberStock = "";
        $ArrayNumberFinal = [];
        $ArrayNumber = str_split($number, 11); //chuyển chuỗi thành mảng tối đa 11 ký tự/phần tử
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ArrayNumber[$i] = ltrim($ArrayNumber[$i], 84); //loại bỏ khoảng trắng và đầu 84 
        }
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ListNumber .= "84" . $ArrayNumber[$i] . ",";
            $ListNumberSend .= "84" . $ArrayNumber[$i] . "\n";
            $ArrayNumberFinal[] = "84" . $ArrayNumber[$i];
            $ListNumberStock .= $ArrayNumber[$i] . "\n";
        }
        $ListNumber = rtrim($ListNumber, ",");
        $ListNumberSend = rtrim($ListNumberSend, "\n");
        $ListNumberStock = rtrim($ListNumberStock, "\n");
    } elseif ($firstCharacter == '0') {
        $ListNumber = "";
        $ListNumberSend = "";
        $ListNumberStock = "";
        $ArrayNumberFinal = [];
        $ArrayNumber = str_split($number, 10);
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ArrayNumber[$i] = ltrim($ArrayNumber[$i], $ArrayNumber[$i][0]);
        }
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ListNumber .= "84" . $ArrayNumber[$i] . ",";
            $ListNumberSend .= "84" . $ArrayNumber[$i] . "\n";
            $ListNumberStock .= $ArrayNumber[$i] . "\n";
            $ArrayNumberFinal[] = "84" . $ArrayNumber[$i];
        }
        $ListNumber = rtrim($ListNumber, ",");
        $ListNumberSend = rtrim($ListNumberSend, "\n");
        $ListNumberStock = rtrim($ListNumberStock, "\n");
    } elseif (($firstCharacter != '0') && ($firstCharacter2 != '84')) {
        $ListNumber = "";
        $ListNumberSend = "";
        $ListNumberStock = "";
        $ArrayNumberFinal = [];
        $ArrayNumber = str_split($number, 9);
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ArrayNumber[$i] = ltrim($ArrayNumber[$i], 84);
        }
        for ($i = 0; $i < count($ArrayNumber); $i++) {
            $ListNumber .= "84" . $ArrayNumber[$i] . ",\n";
            $ListNumberSend .= "84" . $ArrayNumber[$i] . "\n";
            $ArrayNumberFinal[] = "84" . $ArrayNumber[$i];
            $ListNumberStock .= $ArrayNumber[$i] . "\n";
        }
        $ListNumber = rtrim($ListNumber, ",");
        $ListNumber = str_replace('\n', "", $ListNumber);
        $ListNumber = str_replace(" ", "", $ListNumber);
        $ListNumberSend = rtrim($ListNumberSend, "\n");
        $ListNumberStock = rtrim($ListNumberStock, "\n");
    }
}
