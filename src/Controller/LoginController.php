<?php

class LoginController{
    public function index(){
        // echo 'Login';
       try{
        $loader = new \Twig\Loader\FilesystemLoader('src/View');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('Login.html',['error'=>false]);
        
        $Login = Login::SelecionarUsuario('Emerson', '123');
        // var_dump($Login);
       } catch(Exception $error){
            echo $error->getMessage();
       }
    }

    public function Read(){
        $loader = new \Twig\Loader\FilesystemLoader('src/View');
        $twig = new \Twig\Environment($loader);

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $Login = Login::SelecionarUsuario($nome, $senha);
        if($Login == '200'){
            echo 'Entrou';
        }else{
            // echo 'error';
            echo $twig->render('Login.html',['error'=>true]);
        }
        
        // var_dump($Login);
        // echo 123;
    }
}