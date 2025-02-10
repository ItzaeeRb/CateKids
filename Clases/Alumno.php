<?php 
class Alumno{
//Atributos
    private int $idAlumno;
    private string $nombre;
    private string $apellidoPaterno;
    private string $apellidoMaterno;
    private string $CURP;
    private string $fechaNacimiento;
    private string $sexo;
    private int $idPadreTutor;


//Constructor
    public function __construct(int $idAlumno, string $nombre, string $apellidoPaterno, string $apellidoMaterno, string $CURP, string $fechaNacimiento, string $sexo, int $idPadreTutor){

        $this->idAlumno = $idAlumno; 
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->CURP = $CURP;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->sexo = $sexo;
        $this->idPadreTutor = $idPadreTutor;

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

    public function setIdPadreTutor(int $idPadreTutor): void{
        $this->idPadreTutor = $idPadreTutor;
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

    public function getIdPadreTutor(): int {
        return $this->idPadreTutor;
    }


   
}


?>
