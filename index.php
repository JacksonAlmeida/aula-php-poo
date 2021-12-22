<?php

class Login
{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function  getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function logar()
    {
        if ($this->email == "test@gmail.com" and $this->senha == "123456") {
            echo "Logado com sucesso";
        } else {
            echo "Dados inválidos";
        }
    }
}

$logar = new Login("test@gmail.com", "123456", "Jackson Almeida");
$logar->logar();
echo "<pre>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
echo $logar->getNome();
