<?php

class Login{
    public static function SelecionatTodos(){
        $conexao = Conexao::getCon();

        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
        $sql = $conexao->prepare($sql);
        $sql->execute();

        $resultado = array();

        while($row = $sql->fetchObject('Login')){
            $resultado[] = $row;
        }

        if(!$resultado){
            throw new Exception("Não há nenhum usuario");
        }
        return $resultado;
        
    }

    public static function SelecionarUsuario($usuario, $senha){
        try{
            $conexao = Conexao::getCon();

            $sql = "SELECT * FROM usuarios WHERE nome='$usuario' and senha='$senha'  ORDER BY id DESC";
            $sql = $conexao->prepare($sql);
            $sql->execute();
    
          if(!$sql->fetch(PDO::FETCH_OBJ)) 
            {
               return "204";
            }
            else
            {
                return "200";
            }
        }catch(error){
            throw new Exception("400");
        }
       
        // var_dump($conexao);
        // var_dump($sql->fetchAll());
    }
    public static function InserirUsuario($usuario, $email, $senha){
        try{
            $conexao = Conexao::getCon();

            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$usuario', '$email', '$senha')";
            $sql = $conexao->prepare($sql);
            $sql->execute();

            return 201;
        }catch(error){
            throw new Exception("400");
        }
    }
}