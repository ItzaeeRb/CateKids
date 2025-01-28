<?php 
class User{
//Atributos
    private int $idUsuario;
    private string $username;
    private string $password;
    private string $tipoUsuario;

//Constructor
    public function __construct(int $idUsuario, string $username, string $password, string $tipoUsuario){

        $this->idUsuario = $idUsuario; 
        $this->username = $username;
        $this->password = $password;
        $this->tipoUsuario = $tipoUsuario;
    }

//Setters
    public function setUsername(string $username): void{
        $this->username = $username;
    }

    public function setPassword(string $password): void{
        //Establecer la contraseña con el metodo setter y encriptación de la misma
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setTipoUsuario(string $tipoUsuario): void{
        $this->tipoUsuario = $tipoUsuario;
    }

//Getters
    public function getUsername(): string{
        return $this->username;
    }

    public function validatePassword(string $password): bool {
        return password_verify($password, $this->password);
    }

    public function getTipoUsuario(): string{
        return $this->tipoUsuario;
    }
   
}


?>
