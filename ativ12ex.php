<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_POST["n"])){

    $n = $_POST["n"];
    $contador = 1;
    $total = 0;

    while($contador <= $n){
        $total = $total + $contador;
        $contador++;
    }

    if($n > 0){
        $resultado = $total / $n;
        echo "A média de 1 até $n é: " . $resultado;
    } else {
        echo "Digite um número válido";
    }

}
?>