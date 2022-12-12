<?php
error_reporting(E_ALL);

//input arrayi stringe çevir
$string_input=implode(",",$_POST);
//stringi integera çevir
$num_input = intval($string_input);
//değişkenleri ve tiplerini tanımla
$result="";
$responce="";
settype($responce,'string');
settype($result, 'int');
//girilen değerin 3'e bölümünden kalanı bul 
function bolme($p){
    global $result;
    $result = $p%3;

}
bolme(intval($num_input));
//kalanın durumunu kontrol ederek 3'e bölünüp bölünmediğini bildir
if ($string_input!= NULL){
    if($result==0){
        echo "girilen sayı:$num_input <br> 3'e bölünür";
    }elseif($result ==1){
        echo "girilen sayı:$num_input <br> 3'e bölünmez, bölünebilcek ilk sayı:" .$num_input+2;
    }elseif($result==2){
        echo "girilen sayı:$num_input <br> 3'e bölünmez, bölünebilcek ilk sayı:" .$num_input+1;
    }
 }else{
             echo "boş değer girilemez";
      }
    








?>