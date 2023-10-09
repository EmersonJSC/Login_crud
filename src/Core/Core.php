<?php
    class Core {    
        public function start($urlget){

            if(isset($urlget['metodo'])){
                $acao = $urlget['metodo'];
            }else{
                $acao = 'index';
            }
            
            
            
            if(isset($urlget['pagina'])){
                $controller = ucfirst($urlget['pagina'].'Controller');
            }else{
                $controller = 'HomeController';
            }
                        
            // var_dump(!class_exists($controller));
            if(!class_exists($controller)){
                $controller = 'ErroController';
            }
            

            
            call_user_func_array(array(new $controller, $acao), array());
        }
    }

    abstract class Router{
        
    }
        