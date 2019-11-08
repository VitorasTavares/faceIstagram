<?php
include_once "Conexao.php";
class Post extends Conexao {

    public function criarPost($image, $descricao){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO posts (img, descricao) values(?,?)");
        return $query->execute([$image, $descricao]);
    }

}