<?php 
class Catequista{
//Atributos
    private int $idCatequista;
    private string $nombre;
    private string $apellidoPaterno;
    private string $apellidoMaterno;
    private string $CURP;
    private string $sexo;


//Constructor
    public function __construct(int $idCatequista, string $nombre, string $apellidoPaterno, string $apellidoMaterno, string $CURP, string $sexo){

        $this->idCatequista = $idCatequista; 
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->CURP = $CURP;
        $this->sexo = $sexo;
    }

//Setters
    public function setNombreCompleto(string $nombre, string $apellidoPaterno, string $apellidoMaterno): void{
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function setCURP(string $CURP): void{
        $this->CURP = $CURP;
    }

    public function setFechaNacimiento(string $fechaNacimiento): void{
       $this->fechaNacimiento = $fechaNacimiento; 
    }
    
    public function setSexo(string $sexo): void {
        if (strlen($sexo) === 1) {
            $this->sexo = $sexo;
        } else {
            throw new InvalidArgumentException("El sexo debe ser un carácter único (M/F).");
        }
    }



//Getters
    public function getNombreCompleto(): string{
        return $this->nombre . " " . $this->apellidoPaterno . " " . $this->apellidoMaterno;
    }

    public function getCURP(): string {
        return $this->CURP;
    }

    public function getFechaNacimiento(): string{
        return $this->fechaNacimiento;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

   
}


?>
