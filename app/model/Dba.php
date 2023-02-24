<?php

namespace App\Model;


class Dba{
    public function create(Noticia $noticia){
        $sql = 'INSERT INTO noticias (titulo, descricao, categoria, imagem) VALUES (?, ?, ?, ?)';
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->bindValue(1, $noticia->getTitulo());
        $stmt->bindValue(2, $noticia->getDescricao());
        $stmt->bindValue(3, $noticia->getCategoria());
        $stmt->bindValue(4, $noticia->getImagem());
        
        $stmt->execute();
    }
}