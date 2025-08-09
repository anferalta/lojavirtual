<?php

namespace app\Core;

/**
 * Description of Route
 *
 * @author Administrador
 */

class Route
{
    private array $url = [];
    private string $nomeControlador = 'HomeController';
    private object $controlador;
    private string $namespace = 'app\\Controllers\\';
    private string $metodo = 'index';
    private array $parametros = [];

    public function __construct()
    {
        $this->processarUrl();
        $this->inicializarControlador();
        $this->executarMetodo();
    }
    
    private function  processarUrl(): void
    {
        $url = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_URL);
        $url = urldecode($url);
        $url = trim(rtrim($url, '/'));
        $url = str_ireplace(' ', '', $url);
        $url = explode('/', $url);
        $this->url = array_slice($url, 2);
    }
    
    private function inicializarControlador(): void
    {
        if(!empty($this->url[0])){
            $controlador = ucwords($this->url[0]). 'Controller';
            $controladorCompleto = $this->namespace.$controlador;
        
        if ($this->controladorExiste($controladorCompleto)){
            $this->nomeControlador = $controlador;  
            $this->url = array_values(array_slice($this->url, 1));
        } else {
            $this->paginaNaoEncontrada("O controlador '{$controlador}' não foi encontrado!");
            }
        } 
        
        $reflection = new \ReflectionClass($this->namespace.$this->nomeControlador);
        $this->controlador = $reflection->newInstance();
    }
    
    private function executarMetodo(): void
    {
        if(!empty($this->url[0]) && method_exists($this->controlador, $this->url[0])){
            $this->metodo = $this->url[0];
            $this->url = array_values(array_slice($this->url, 1));
        }
        
        $this->parametros = $this->url;
        
        $reflection = new \ReflectionMethod($this->controlador, $this->metodo);
        echo $reflection->invokeArgs($this->controlador, $this->parametros);
    }


    private function controladorExiste(string $controladorCompleto): bool
    {
        return class_exists($controladorCompleto);
    }
    
    private function paginaNaoEncontrada(string $mensagem = 'Página não encontrada'): void
    {
    http_response_code(404);
    echo $mensagem;
    exit();
    }
}
    