<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login PPDB Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 align="center"><b>Login PPDB Online</b></h2>

    <form action="hasil-captcha.php" method="post">
    <table border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
        <td>Username</td>
        <td><input name="username" value=""></td>
        </tr>

        <tr>
        <td>Password</td>
        <td><input type="password" name="password" value ="" minlength="8"></td>
        </tr>
        
        <tr>
        <td>Captcha</td>

        <td><img src="captcha.php" alt="gambar" /> </td>
        </tr>

        <td>Isikan captcha </td>
        <td><input name="kodecaptcha" value="" maxlength="5"/></td>
        
        <tr>
        <td><input id="submit" type ="submit" value="Login"></td>
        </tr>
    </table>
    </form>

    <?php
        session_start();
        function acakCaptcha() {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        
        $pass = array(); 
        
            $panjangAlpha = strlen($alphabet) - 2; 
            for ($i = 0; $i < 5; $i++) {
                $n = rand(0, $panjangAlpha);
                $pass[] = $alphabet[$n];
            }
        
            return implode($pass); 
        }
        
        $code = acakCaptcha();
        $_SESSION["code"] = $code;
        
        $wh = imagecreatetruecolor(173, 50);
        
        $bgc = imagecolorallocate($wh, 22, 86, 165);
        
        $fc = imagecolorallocate($wh, 223, 230, 233);
        imagefill($wh, 0, 0, $bgc);
        
        imagestring($wh, 10, 50, 15,  $code, $fc);
        
        header('content-type: image/jpg');
        imagejpeg($wh);
        imagedestroy($wh);
    ?>
</body>
</html>