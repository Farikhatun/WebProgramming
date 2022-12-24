<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz 3</title>
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
print_r($new);
echo ("Satu Dimensi<br>");
$app = new QuicksortDescending();
$app->quicksortDesc($new, 0, count($new));
print_r($new);
echo ("Quick Sort in descending Order<br>");
class QuicksortDescending {

public function partitionDesc(&$new, $left, $right) {
        $l = $left;
        $r = $right;
        $pivot = $new[($right+$left)/2];

        while($l <= $r) {
            while($new[$l] > $pivot) { $l++; }
            while($new[$r] < $pivot) { $r--; }
            if($l <= $r) {// if L and R haven't cross
                $this->swap($new, $l, $r);
                $l ++;
                $r --;
            }
        }
        return $l;
    }


public function quicksortDesc(&$new, $left, $right) {
        $index = $this->partitionDesc($new, $left, $right);
        if($left < $index-1) { //if there is more than 1 element to sort on right subarray
            $this->quicksortDesc($new, $left, $index-1);
        }
        if($index < $right) { //if there is more than 1 element to sort on right subarray
            $this->quicksortDesc($new, $index, $right);
        }
    }

public function swap(&$new, $index1, $index2) {
        $tmp = $new[$index1];
        $new[$index1] = $new[$index2];
        $new[$index2] = $tmp;
    }

}
?>
</body>
</html>