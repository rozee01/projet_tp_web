<?php

class client
{
    private ?int $idclient = null;
    private ?string $username = null;
    private ?string $password = null;
    private ?string $email = null;


    public function __construct($id = null,$u, $m, $p)
    {
        $this->idclient = $id;
        $this->username = $u;
        $this->password = $p;
        $this->email = $m;
    }
    public function getusername()
    {
        return $this->username;
    }

    public function setusername($lname)
    {
        $this->userame = $lname;

        return $this;
    }

    public function getpassword()
    {
        return $this->password;
    }

   
    public function setpassword($password)
    {
        $this->password = $password;

        return $this;
    }

    
    public function getemail()
    {
        return $this->mail;
    }

    
    public function setemail($mail)
    {
        $this->email = $mail;

        return $this;
    }


}
