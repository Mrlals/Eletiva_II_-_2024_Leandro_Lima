<?php

    //include "Usuario.php";
    //include "dados/Usuario.php";

    use Usuario as UsuarioRaiz; 
    use orientacao_objeto\dados\Usuario as UsuarioDados;

    $obj = new UsuarioRaiz();
    var_dump($obj);
    $obj2 = new UsuarioDados();