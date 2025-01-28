<?php 
class Horario{
//Atributos
    private int $idHorario;
    private string $horarioEntrada;
    private string $horarioSalida;
    private string $salon;
    private string $diaReunion;


//Constructor
    public function __construct(int $idHorario, string $horarioEntrada, string $horarioSalida, string $salon, string $diaReunion){

        $this->idHorario = $idHorario; 
        $this->horarioEntrada = $horarioEntrada;
        $this->horarioSalida = $horarioSalida;
        $this->salon = $salon;
        $this->diaReunion = $diaReunion;
    }

//Setters
    public function setHorarioEntrada(string $horarioEntrada): void{
        $this->horarioEntrada = $horarioEntrada;
    }

    public function setHorarioSalida(string $horarioSalida): void{
        $this->horarioSalida = $horarioSalida;
    }

    public function setSalon(string $salon): void{
        $this->salon = $salon;
    }

    public function setDiaReunion(string $diaReunion): void{
        $this->diaReunion = $diaReunion;
    }


//Getters
    public function getHorarioEntrada(): string{
        return $this->horarioEntrada;
    }

    public function getHorarioSalida(): string{
        return $this->horarioSalida;
    }

    public function getSalon(): string{
        return $this->salon;
    }

    public function getDiaReunion(): string{
        return $this->diaReunion;
    }

   
}


?>
