<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
$N = $_POST["N"];

if ($N < 10) {
    echo "Valor inválido";
} else {
    $i = 10;
    while ($i <= $N) {
        echo $i . "<br>";
        $i++;
    }
}
?>