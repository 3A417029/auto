<?php
    namespace Demo\Hello;

    /*  Someone 內含有一個function ，
        function 需傳變數 $name
        function 功能為print 出 Hello $name ~
    */
    class Someone{
        function __construct($name){
            echo 'Hello '.$name.PHP_EOL;
        }
    }
