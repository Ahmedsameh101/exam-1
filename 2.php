 <?php
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($s = 1; $s <= 5 - $i; $s++) echo " ";
    for ($j = 1; $j <= $i; $j++) echo "* ";
    echo "\n";
}
for ($i = 4; $i >= 1; $i--) {
    for ($s = 1; $s <= 5 - $i; $s++) echo " ";
    for ($j = 1; $j <= $i; $j++) echo "* ";
    echo "\n";
}
echo "</pre>";

 



echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) echo "* ";
    echo "\n";
}
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) echo "* ";
    echo "\n";
}
echo "</pre>";






echo "<pre>";
for ($i = 1; $i <= 5; $i += 2) {
    for ($j = 1; $j <= $i; $j++) echo "* ";
    echo "\n";
}
for ($i = 3; $i >= 1; $i -= 2) {
    for ($j = 1; $j <= $i; $j++) echo "* ";
    echo "\n";
}
echo "</pre>";