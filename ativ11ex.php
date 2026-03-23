<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit" value="Enviar">
</form>

<?php
if(isset($_POST["n"])){

    $n = $_POST["n"];
    $contador = 0;
    $i = 1;

    while($i <= $n){
        $contador++;
        $i++;
    }

    echo "Total de números no intervalo: " . $contador;

}
?>