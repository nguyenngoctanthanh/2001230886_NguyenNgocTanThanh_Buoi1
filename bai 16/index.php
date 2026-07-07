<!DOCTYPE html>
<html>
<head>
    <title>Bài 16</title>
</head>
<body>

<form method="post">
    Nhập N:
    <input type="number" name="n">
    <input type="submit" value="Tính">
</form>

<?php
if(isset($_POST['n'])){

    $n = (int)$_POST['n'];

    $sum = 0;

    for($i=1;$i<=$n;$i++){
        $sum += $i;
    }

    echo "Tổng từ 1 đến $n là: $sum";
}
?>

</body>
</html>