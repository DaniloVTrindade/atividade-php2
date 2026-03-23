<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit">
</form>
<?php
if(isset($_POST["n"])){
    $n = $_POST["n"];

    $i = $n;
    while($i >= 0){
        echo $i . " ";
        $i--;
    }
}
?>