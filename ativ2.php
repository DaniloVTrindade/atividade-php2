<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
if(isset($_POST["n"])){
    $n = $_POST["n"];

    $i = 1;
    while($i <= $n){
        if($i > 5){
            echo $i . " ";
        }
        $i++;
    }
}
?>