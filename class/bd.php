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

    public function pesquisaPaises()
    {
        $query = "select id, nome, medalhaOuro, medalhaPrata, medalhaBronze, url_imagem from paises  order by nome";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function pesquisaPodio()
    {
        $query = "select nome from tb_jogadores group by email LIMIT 5";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function pesquisaJogadores()
    {
        $query = "select * from tb_jogadores";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function pesquisaEmail()
    {
        $query = "select email from tb_jogadores where email = :email";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $this->palpite->__get('email'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function inserir()
    {
        $query = " insert into tb_jogadores (nome, email, id_pais, aposta_ouro, aposta_prata, aposta_bronze) 
        values  ( :nome , :email , :id_pais , :aposta_ouro , :aposta_prata, :aposta_bronze),
                ( :segundo_nome , :segundo_email , :segundo_id_pais , :segundo_aposta_ouro , :segundo_aposta_prata, :segundo_aposta_bronze),
                ( :terceiro_nome , :terceiro_email , :terceiro_id_pais , :terceiro_aposta_ouro , :terceiro_aposta_prata, :terceiro_aposta_bronze)  ";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->palpite->__get('nome'));
        $stmt->bindValue(':email', $this->palpite->__get('email'));
        $stmt->bindValue(':id_pais', $this->palpite->__get('idPrimeiroPais'));
        $stmt->bindValue(':aposta_ouro', $this->palpite->__get('primeroOuro'));
        $stmt->bindValue(':aposta_prata', $this->palpite->__get('primeiraPrata'));
        $stmt->bindValue(':aposta_bronze', $this->palpite->__get('primeiroBronze'));

        $stmt->bindValue(':segundo_nome', $this->palpite->__get('nome'));
        $stmt->bindValue(':segundo_email', $this->palpite->__get('email'));
        $stmt->bindValue(':segundo_id_pais', $this->palpite->__get('idSegundoPais'));
        $stmt->bindValue(':segundo_aposta_ouro', $this->palpite->__get('segundoOuro'));
        $stmt->bindValue(':segundo_aposta_prata', $this->palpite->__get('segundaPrata'));
        $stmt->bindValue(':segundo_aposta_bronze', $this->palpite->__get('segundoBronze'));

        $stmt->bindValue(':terceiro_nome', $this->palpite->__get('nome'));
        $stmt->bindValue(':terceiro_email', $this->palpite->__get('email'));
        $stmt->bindValue(':terceiro_id_pais', $this->palpite->__get('idTerceiroPais'));
        $stmt->bindValue(':terceiro_aposta_ouro', $this->palpite->__get('terceiroOuro'));
        $stmt->bindValue(':terceiro_aposta_prata', $this->palpite->__get('terceiraPrata'));
        $stmt->bindValue(':terceiro_aposta_bronze', $this->palpite->__get('terceiroBronze'));

        $stmt->execute();
    }

    public function inseriPontuacao()
    {
        $query = "update tb_jogadores set pontuacao_geral = :totalPontos where email = :email and id = :id ";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':totalPontos', $this->palpite->__get('pontuacaoGeral'));
        $stmt->bindValue(':email', $this->palpite->__get('email'));
        $stmt->bindValue(':id', $this->palpite->__get('id'));
        $stmt->execute();
    }
}
