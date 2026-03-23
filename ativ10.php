<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
$N = $_POST["N"];

if ($N < 30) {
    echo "Baixo";
} elseif ($N <= 70) {
    echo "Médio";
} else {
    echo "Alto";
}
?>