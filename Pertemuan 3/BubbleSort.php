<!DOCTYPE html>
<html>
<head>
    <title>Quiz 1</title>
</head>
<body>
    <?php
        $array =[[23, 32, 54, 112],
                [24, 61, 12, 87],
                [49, 60, 90, 75]];

        $new = [];
        while($item = array_shift($array)){
            array_Push($new, ...$item);
        }

        $sortedArr = bubbleSortDesc($new);
        print_r($new);
        echo ("Satu Dimensi<br>");
        print_r($sortedArr);
        echo ("Bubble Sort in descending Order<br>");

        function bubbleSortDesc(array $new) {
            $sorted = false;
            while (false === $sorted) {
                $sorted = true;
                for ($i = 0; $i < count($new)-1; ++$i) {
                    $current = $new[$i];
                    $next    = $new[$i+1];
                    if ($next > $current) {
                        $new[$i]   = $next;
                        $new[$i+1] = $current;
                        $sorted    = false;
                    }
                }
            }
            return $new; 
        }
    ?>
    
</body>
</html>