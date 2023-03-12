<?php
function zadanie3($zdanie){
    $cenzura = array("qwe", "asd", "qwerty");
    foreach($cenzura as $value){
        $zdanie = preg_replace('/\b' . preg_quote($value) . '\b/i', str_repeat('*', strlen($value)), $zdanie);
    }
    echo $zdanie;
}
zadanie3("asd test");
?>