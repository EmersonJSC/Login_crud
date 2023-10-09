<?php

class RegistroController{
    public function index(){
        try{
            $loader = new \Twig\Loader\FilesystemLoader('src/View');
            $twig = new \Twig\Environment($loader);
    
            echo $twig->render('Registro.html',['error'=>false]);
            
            $login = Login::SelecionarUsuario('Emerson', '123');
            // var_dump($Login);
           } catch(Exception $error){
                echo $error->getMessage();
           }
    }

    public function insert()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaconf = $_POST['senhaconf'];

        if($senha == $senhaconf){
            $registro = Login::InserirUsuario($nome, $email, $senha);
            if($registro==201){
                echo "Registrou";
            }else{
                echo $registro;
            }

        }else{
            return 409;
        }
        
        // $registro = Login::InserirUsuario()
    }
}