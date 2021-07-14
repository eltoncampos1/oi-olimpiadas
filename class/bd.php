<?php
require_once 'class/conexao.php';


class BD
{
    private $conexao;
    private $palpite;

    public function __construct(Conexao $conexao, Palpite $palpite)
    {
        $this->conexao = $conexao->conectar();
        $this->palpite = $palpite;
    }

    public function recuperar(){
        $query = "select nome, url_imagem  from paises";
        $stmt = $this->conexao->prepare($query);        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function inserir(){

    }
}