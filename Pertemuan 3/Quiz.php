<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
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

        arsort($new);
        print_r($new);
    ?>
    
</body>
</html>