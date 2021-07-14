<?php

class Palpite
{
    private $nome;
    private $email;
    private $primeiroPais;
    private $primeroOuro;
    private $primeiraPrata;
    private $primeiroBronze;
    private $segundoPais;
    private $segundoOuro;
    private $segundaPrata;
    private $segundoBronze;
    private $terceiroPais;
    private $terceiroOuro;
    private $terceiraPrata;
    private $terceiroBronze;


    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    function validaPalpite()
    {
        if (
            empty($this->nome) || empty($this->email) ||
            empty($this->primeiroPais) || empty($this->primeroOuro) || empty($this->primeiraPrata) || empty($this->primeiroBronze) ||
            empty($this->segundoPais) || empty($this->segundoOuro) || empty($this->segundaPrata) || empty($this->segundoBronze) ||
            empty($this->terceiroPais) || empty($this->terceiroOuro) || empty($this->terceiraPrata) || empty($this->terceiroBronze)
        ) {
            return false;
        }
        return true;
    }
}
