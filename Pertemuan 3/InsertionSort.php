<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz 2</title>
</head>
<body>
    <?php
$arr =
        [[23, 32, 54,112] ,
        [24, 61, 12, 87],
        [49, 60, 90, 75]];
$new = [];
    while($item = array_shift($arr)){
    array_Push($new, ...$item);
}
function insertion_sort($new)
{
    for ($i = 0; $i < count($new); $i++) {
        $val = $new[$i];
        $j = $i-1;
        while($j>=0 && $new[$j] < $val){
            $new[$j+1] = $new[$j];
            $j--;
        }
        $new[$j+1] = $val;
    }
    return $new;
}
$sorted_arr = insertion_sort($new);
print_r($new);
echo ("Satu Dimensi<br>");
for($i = 0; $i < 12; $i++) 
echo $sorted_arr[$i]." ";
echo "Insertion Sort in descending Order: \n"; 
?>
</body>
</html>