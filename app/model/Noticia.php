<?php

namespace App\Model;

class Noticia {
    private $id, $titulo, $categoria, $descricao, $imagem;

    /* Getters and Setters */
    public function getId(){
        return $this->id;
    }


    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

   
}