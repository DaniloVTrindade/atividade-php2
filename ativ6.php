<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
if(isset($_POST["n"])){
    $n = $_POST["n"];

    if($n > 50){
        echo "Maior que 50";
    } elseif($n < 50){
        echo "Menor que 50";
    } else {
        echo "Igual a 50";
    }
}
?>