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

    public function read(){
        $sql = 'SELECT * FROM noticias';
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Noticia $noticia){
        $sql = "UPDATE noticias SET titulo = ?, descricao = ?, categoria = ? WHERE id = ?";
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->bindValue(1, $noticia->getTitulo());
        $stmt->bindValue(2, $noticia->getDescricao());
        $stmt->bindValue(3, $noticia->getCategoria());
        $stmt->bindValue(4, $noticia->getId());

        $stmt->execute();
    }

    public function delete(Noticia $noticia){
        $sql = "DELETE FROM noticias WHERE id = ?";
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->bindValue(1, $noticia->getId());

        $stmt->execute();
    }
}