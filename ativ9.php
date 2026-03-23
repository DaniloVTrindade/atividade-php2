<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
if(isset($_POST["n"])){
    $n = $_POST["n"];

    $i = 1;
    $soma = 0;

    while($i <= $n){
        if($i > 10){
            $soma += $i;
        }
        $i++;
    }

    echo "Soma: " . $soma;
}
?>