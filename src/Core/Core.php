<?php
    class Core {    
        public function start($urlget){
            $controller = ucfirst($urlget['pagina'].'Controller');
            $acao = 'index';
                        
            if(!class_exists($controller)){
                $controller = 'ErroController';
            }

            
            call_user_func_array(array(new $controller, $acao), array());
        }
    }