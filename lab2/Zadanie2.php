<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function checkVar()
{
    return isset($_POST['liczba1']) && isset($_POST['liczba2']);
}
function checkVar2(){
    return isset($_POST['liczba3']);
}
function checkNumeric()
{
    return is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2']);
}
function checkNumeric2()
{
    return is_numeric($_POST['liczba3']);
}
$liczba1 = '';
$liczba2 = '';
$liczba3 = '';
if (checkVar())
{
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
}
if(checkVar2()){
    $liczba3 = $_POST['liczba3'];
}
?>
<h1>KALKULATOR PROSTY</h1>
<FORM name="pierwszy" method="POST">
    <TABLE>
        <TR>
            <TD>Pierwsza liczba:</TD>
            <TD><INPUT name="liczba1" value='<?php echo $liczba1?>'></TD>
        </TR>
        <TR>
            <TD>Druga liczba:</TD>
            <TD><INPUT name="liczba2" value='<?php echo $liczba2?>'></TD>
        </TR>
        <TR>
            <TD>Działanie:</TD>
            <TD><SELECT name="dzialanie">
                    <option value="Dodawanie" <?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'Dodawanie') echo ' selected'; ?>>Dodawanie</option>
                    <option value="Odejmowanie" <?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'Odejmowanie') echo ' selected'; ?>>Odejmowanie</option>
                    <option value="Mnożenie" <?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'Mnożenie') echo ' selected'; ?>>Mnożenie</option>
                    <option value="Dzielenie" <?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'Dzielenie') echo ' selected'; ?>>Dzielenie</option>
            </TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" name="submit" value="Wyślij"></TD>
        </TR>
    </TABLE>
</FORM>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['submit'])) {
        if (checkVar()) {
            if (checkNumeric()) {
                echo "W formularzu podano liczby {$_POST['liczba1']} oraz
                    {$_POST['liczba2']}.<BR>";
                echo "Wyniki działań:<BR>";
                if ($_POST['dzialanie'] == 'Dodawanie') {
                    echo "{$_POST['liczba1']} + {$_POST['liczba2']} = ";
                    echo $_POST['liczba1'] + $_POST['liczba2'];

                }
                if ($_POST['dzialanie'] == 'Odejmowanie') {
                    echo "{$_POST['liczba1']} - {$_POST['liczba2']} = ";
                    echo $_POST['liczba1'] - $_POST['liczba2'];

                }
                if ($_POST['dzialanie'] == 'Mnożenie') {
                    echo "{$_POST['liczba1']} * {$_POST['liczba2']} = ";
                    echo $_POST['liczba1'] * $_POST['liczba2'];

                }
                if ($_POST['dzialanie'] == 'Dzielenie') {
                    echo "{$_POST['liczba1']} / {$_POST['liczba2']} = ";
                    echo $_POST['liczba1'] / $_POST['liczba2'];

                }
                echo "<BR>";
            } else {
                echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
            }
        } else {
            echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
        }
    }
}

?>
<h1>KALKULATOR ZAAWANSOWANY</h1>
<FORM name="drugi" method="POST">
    <TABLE>
        <TR>
            <TD>Liczba:</TD>
            <TD><INPUT name="liczba3" value='<?php echo $liczba3?>'></TD>
        </TR>
        <TR>
            <TD>Działanie:</TD>
            <TD><SELECT name="dzialanie">
                    <option value="cos"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'cos') echo ' selected'; ?>>Cosinus</option>
                    <option value="sin"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'sin') echo ' selected'; ?>>Sinus</option>
                    <option value="tg"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'tg') echo ' selected'; ?>>Tangens</option>
                    <option value="bd"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'bd') echo ' selected'; ?>>BIN -> DEC</option>
                    <option value="db"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'db') echo ' selected'; ?>>DEC -> BIN</option>
                    <option value="dh"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'dh') echo ' selected'; ?>>DEC -> HEX</option>
                    <option value="hd"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'hd') echo ' selected'; ?>>HEX -> DEC</option>
                    <option value="dr"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'dr') echo ' selected'; ?>>DEG -> RAD</option>
                    <option value="rd"<?php if(isset($_POST['dzialanie']) && $_POST['dzialanie'] == 'rd') echo ' selected'; ?>>RAD -> DEG</option>

            </TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT type="submit" name="submit2" value="Wyślij"></TD>
        </TR>
    </TABLE>
</FORM>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['submit2'])) {
        if (checkVar2()) {
            if (checkNumeric2()) {
                echo "W formularzu podano liczbę {$_POST['liczba3']}.<BR>";
                echo "Wyniki działań:<BR>";
                if ($_POST['dzialanie'] == 'cos') {
                    echo "cos({$_POST['liczba3']}) = ";
                    echo cos($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'sin') {
                    echo "sin({$_POST['liczba3']}) = ";
                    echo sin($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'tg') {
                    echo "tg({$_POST['liczba3']}) = ";
                    echo tan($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'bd') {
                    echo "BIN({$_POST['liczba3']}) TO DEC = ";
                    echo bindec($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'db') {
                    echo "DEC({$_POST['liczba3']}) TO BIN = ";
                    echo decbin($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'dh') {
                    echo "DEC({$_POST['liczba3']}) TO HEX = ";
                    echo dechex($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'hd') {
                    echo "HEX({$_POST['liczba3']}) TO DEC = ";
                    echo hexdec($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'dr') {
                    echo "deg({$_POST['liczba3']}) = ";
                    echo deg2rad($_POST['liczba3']);
                }
                if ($_POST['dzialanie'] == 'rd') {
                    echo "rad({$_POST['liczba3']}) = ";
                    echo rad2deg($_POST['liczba3']);
                }
                echo "<BR>";
            } else {
                echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
            }
        } else {
            echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
        }
    }
}
?>
</body>
</html>
