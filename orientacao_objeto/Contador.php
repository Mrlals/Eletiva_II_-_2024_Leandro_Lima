<?php

class Contador{

    public static $contador = 0;

    public static function incremento(){
        self::$contador++;
    }

    public static function incremento2(){
        self::$contador++;
    }

    public static function decremento(){
        self::$contador--;
    }
}

Contador::incremento();
Contador::incremento2();
Contador::decremento();
echo Contador::$contador;