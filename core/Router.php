<?php
namespace core;

class Router{
    
    private $controler = 'Site'; // armazena o nome da classe principal
    private $method = 'home'; // armazena o nome da página que eu quero acessar
    private $param = []; // armazena um parâmetro se necessário
    
    public function __construct(){
        $router = $this->url();
        
        if(file_exists('app/controllers/' . ucfirst($router[0]) . '.php')):
            $this->controller = $router[0];
            unset($router[0]); // limpa o array $router
        endif;
        
        $class = "\\app\\controllers\\" . ucfirst($this->controler);
        $object = new $class;
        
        // verifica se o usuário passou alguma informação de método e se o método existe 
        if(isset($router[1]) and method_exists($class, $router[1])):
            $this->method = $router[1]; // atribui o método passado na posição 1 do $router à variável $method
            unset($router[1]); // limpa o array $router
        endif;
        
        // a variável $param recebe o valor do array $router, senão houver nada, retorna um array vazio
        $this->param = $router ? array_values($router) : [];
        
        // chama uma função do usuário fornecida com uma matriz de parâmetros
        call_user_func_array([$object, $this->method], $this->param);
    }
    
    private function url(){
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}
