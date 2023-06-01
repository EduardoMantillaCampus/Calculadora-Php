<?php 
    function autoload($class){
        require __DIR__.'/entidad/'.$class.'.php';
    }
    //se pasa el nombre del metodo que se ejecutara
    spl_autoload_register('autoload');

    echo User::getUser();  
?>