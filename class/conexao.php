<?php
class Conexao
{
    private $host   = 'localhost';
    private $dbName = 'bolaoOIbd';
    private $user   =  'root';
    private $pass   =  '';



    public function conectar()
    {
        try {

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbName",
                "$this->user",
                "$this->pass"
            );

            $conexao->exec('SET CHARACTER SET utf8');
            return $conexao;
        } catch (PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}