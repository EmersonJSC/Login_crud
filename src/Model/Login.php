<?php

class Login{
    public static function SelecionatTodos(){
        $conexao = new PDO('mysql: host-localhost; bdname=crud;', 'root', '');
        var_dump($conexao);
    }
}