<?php
function checkVar()
{
    return isset($_POST['data']);
}
function checkNumeric()
{
    return is_numeric($_POST['data']);
}
function checkLength(){
    return strlen($_POST['data']) <= 4;
}
$data = '';
$data_length = strlen((string)$data);
if (checkVar())
{
    $data = $_POST['data'];
}
function wielkanoc($data){
    $x=0;
    $y=0;

 if($data > 0  && $data <= 1582){
     $x = 15;
     $y = 6;
    }
    else if($data >= 1583  && $data <= 1699){
        $x = 22;
        $y = 2;
    }
    else if($data >= 1700  && $data <= 1799){
        $x = 23;
        $y = 3;
    }
    else if($data >= 1800  && $data <= 1899){
        $x = 23;
        $y = 4;
    }
    else if($data >= 1900  && $data <= 2099){
        $x = 24;
        $y = 5;
    }
    else if($data >= 2100  && $data <= 2199){
        $x = 24;
        $y = 6;
    }
    else if ($data >= 2200 ){
        echo "Nieprawidłowy rok. Rok ma się mieścić w przedziale od 1 do 2199!";
        return;
    }
    $a = $data%19;
    $b = $data%4;
    $c = $data%7;
    $d = ((19*$a)+$x)%30;
    $f = ((2*$b)+(4*$c)+(6*$d)+$y)%7;
    if($f == 6 && $d == 29){
        echo "Wielkanoc wypada 26 kwietnia.";
    }
    else if($f == 6 && $d == 28 && (((11*$x)+11)%30<19)){
        echo "Wielkanoc wypada 18 kwietnia.";
    }
    else if (($d+$f)<10){
        echo "Wielkanoc wypada " . (22+$d+$f) . " marca.";
    }
    else if (($d+$f)>9){
        echo "Wielkanoc wypada ".($d+$f-9)." kwietnia.";
    }
}
?>
<HTML>
<form method="POST">
    <label>DATA: </label><input type="text" name="data"> <br>
    <input type="submit" value="Prześlij" name="submit">
</form>
</HTML>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        if (checkVar()) {
            if (isset($_POST['data']) && checkNumeric() && checkLength()) {
                echo "Podana data:  {$_POST['data']}.<br>";
                wielkanoc($data);

            } else {
                echo "Błędne dane! Podaj prawidłową datę! <BR>";
            }
        }
    }
}
?>
