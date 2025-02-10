<?php 
class Nivel{
//Atributos
    private int $idNivel;
    private string $descripcion;
    private string $claveNivel;

//Constructor
    public function __construct(int $idNivel, string $descripcion, string $claveNivel){

        $this->idNivel = $idNivel; 
        $this->descripcion = $descripcion;
        $this->claveNivel = $claveNivel;
    }

//Setters
    public function setDescripcion(string $descripcion): void{
        $this->descripcion = $descripcion;
    }

    public function setClaveNivel(string $claveNivel): void{
        //Establecer la contraseña con el metodo setter y encriptación de la misma
        $this->claveNivel = $claveNivel;
    }

//Getters
    public function getDescripcion(): string{
        return $this->descripcion;
    }

    public function getClaveNivel(): string{
        return $this->claveNivel;
    }
   
}


?>
