<?php
namespace app\controllers;

use app\models\Crud;

class Site extends Crud{
    
    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }
    
    public function galeria($foto){
        $photo = $foto;
        require_once __DIR__ . '/../views/galeria.php';
    }
    
    public function cadastro(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cadastro = $this->create();
        }
        
        require_once __DIR__ . '/../views/cadastro.php';
    }
    
    public function consulta(){
        $consulta = $this->read();
        require_once __DIR__ . '/../views/consulta.php';
    }
    
    public function editar(){
        $editarForm = $this->editForm();
        
        require_once __DIR__ . '/../views/editar.php';
    }
    
    public function alterar(){
        $alterar = $this->update();
        header("Location: ?router=Site/consulta/");
    }
    
    public function confirmaDelete(){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . '/../views/confirmaDelete.php';
    }
    
    public function deletar(){
        $deletar = $this->delete();
        header("Location: ?router=Site/consulta/");
    }
    
}

