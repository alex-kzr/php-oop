<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo 'classes:' . '<br>';

    class Weather {
        
        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFarenheit($c){
            return $c * 9 / 5 + 32;
        }

        public static function determineTempConditions($f){
            if($f < 40){
                return self::$tempConditions[0];
            }else if($f < 70){
                return self::$tempConditions[1];
            }else{
                return self::$tempConditions[2];
            }
        }
    }

    print_r(Weather::$tempConditions);
    echo Weather::celsiusToFarenheit(20) . '<br>';
    echo Weather::determineTempConditions(56);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>