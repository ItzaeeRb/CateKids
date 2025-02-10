<?php 
class Grupo{
//Atributos
    private int $idGrupo;
    private int $idNivel;
    private int $idCatequista;
    private int $idHorario;

//Constructor
    public function __construct(int $idGrupo, int $idNivel, int $idCatequista, int $idHorario){

        $this->idGrupo = $idGrupo; 
        $this->idNivel = $idNivel; 
        $this->idCatequista = $idCatequista;
        $this->idHorario = $idHorario;
    }

//Setters
    public function setidNivel(int $idNivel): void{
        $this->idNivel = $idNivel;
    }

    public function setidCatequista(int $idCatequista): void{
        $this->idCatequista = $idCatequista;
    }

    public function setidHorario(int $idHorario): void{
        $this->idHorario = $idHorario;
    }

//Getters
    public function getidNivel(): int{
        return $this->idNivel;
    }

    public function getidCatequista(): int{
        return $this->idCatequista;
    }

    public function getidHorario(): int{
        return $this->idHorario;
    }

    
   
}


?>
