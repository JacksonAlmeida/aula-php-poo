<?php

class Login
{
    private $email;
    private $senha;

    public function  getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function logar(){
        if($this->email == "test@gmail.com" and $this->senha == "123456"){
            echo "Logado com sucesso";
        }
        else{
            echo "Dados inválidos";
        }
    }
}

$logar = new Login();
$logar->setEmail("test@gmail.com");
$logar->setSenha("123456");
$logar->logar();
echo "<pre>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();