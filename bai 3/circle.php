<?php
if (isset($_GET['r']) && is_numeric($_GET['r'])) {

    $r = (float)$_GET['r'];

    $chuvi = 2 * pi() * $r;
    $dientich = pi() * $r * $r;

    echo "<h2>Kết quả</h2>";
    echo "Bán kính: $r <br>";
    echo "Chu vi: " . round($chuvi, 2) . "<br>";
    echo "Diện tích: " . round($dientich, 2);

} else {

    echo "Vui lòng nhập bán kính hợp lệ.";

}
?>