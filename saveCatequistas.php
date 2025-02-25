<?php
require "Conexion/Conexion.php";



$apellidoPaterno = $_POST['apellido_paterno'];
$apellidoMaterno = $_POST['apellido_materno'];
$nombre = $_POST['nombre']; 

$sexo = $_POST['sexo'];
$CURP = $_POST['CURP'];


$insertSQL_Catequista = "INSERT INTO Catequista(Nombre, apellidoPaterno, apellidoMaterno, CURP, sexo) VALUES('$nombre','$apellidoPaterno', '$apellidoMaterno', '$CURP', '$sexo')";



mysqli_query($con, $insertSQL_Catequista);



echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

if ($insertSQL_Catequista) {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Los datos han sido agregados correctamente.',
        });
    </script>";
} else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se pudieron registrar los datos.',
        });
    </script>";
}
?>