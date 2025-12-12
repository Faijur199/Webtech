<?php
$arr = [5, 1, 9, 3, 7];
$asc = $arr;
sort($asc);
echo "Ascending\n: ";
foreach ($asc as $num) {
    echo $num . " ";
}
echo "\n";
$desc = $arr;
rsort($desc);
echo "Descending\n: ";
foreach ($desc as $num) {
    echo $num . " ";
}
?>
