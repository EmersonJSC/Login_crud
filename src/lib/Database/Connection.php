<?php

    abstract class Conexao{
        private static $conexao;

        public static function getCon(){
            if(self::$conexao == null){
                self::$conexao = new PDO("mysql:host=localhost;dbname=crud;",'root',''  );
            }
            return self::$conexao;
           
        }
    }

    