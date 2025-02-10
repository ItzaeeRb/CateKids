<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmar datos</title>
	<link rel="stylesheet" href="Templates/css/style_index.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>
<body class="body">
<div class="encabezado">
		<h2><b>Confirmación de datos</b></h2>
</div>

<form name="f1" method="POST" id="form" action="confirmacionDatos.php">
	<div class="encabezado_section">
		<h3><b>1. Datos del niño</b></h3>
	</div>
	
	<div class="sheet floaty">
		<legend><b><span class="glyphicon glyphicon-user"></span> Datos personales</b></legend>
        <?php
        $nombre = $_POST['nombre']; 
        $paterno = $_POST['apellido_paterno'];
        $materno = $_POST['apellido_materno'];
        $CURP = $_POST['CURP'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $sexo = $_POST['sexo'];

        $paterno_tutor = $_POST['paterno_tutor'];
        $materno_tutor = $_POST['materno_tutor'];
        $nombre_tutor = $_POST['nombre_tutor'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $calle = $_POST['calle_numero'];
        $colonia = $_POST['colonia'];
        $codigo_postal = $_POST['codigo_postal'];
        $pais = $_POST['pais_domicilio'];
        $estado = $_POST['estado'];
        $ciudad = $_POST['ciudad'];

        ?>

		<div class="multi_input_line">
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Apellido paterno:</label>
                <label><?php echo $paterno; ?></label>
				<input type="hidden" name="apellido_paterno"  required>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Apellido materno:</label>
                <label><?php echo $materno; ?></label>
				<input type="hidden" name="apellido_materno"  required>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Nombre (s):</label>
                <label><?php echo $nombre; ?></label>
				<input type="hidden" name="nombre"  required>
			</fieldset>
		</div>

		<div class="multi_input_line">
		<fieldset class="two_line_labeled_input">
			<label class="is-required">Fecha de nacimiento:</label>
            <label><?php echo $fechaNacimiento; ?></label>
			<input type="hidden" name="fechaNacimiento" required>
		</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Sexo:</label>
                <label><?php echo $sexo; ?></label>
				<input type="hidden" name="sexo" required>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">CURP:</label>
                <label><?php echo $CURP; ?></label>
				<input type="hidden" name="CURP" required>
			</fieldset>
		</div>
	</div>

	

	<div class="encabezado_section">
		<h3><b>2. Datos del tutor legal</b></h3>
	</div>

	<div id="content" style="display: block" class="sheet floaty">
		<legend><b><span class="glyphicon glyphicon-user"></span> Datos personales</b></legend>

		<div class="multi_input_line">
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Apellido paterno:</label>
				<input type="hidden" name="paterno_tutor">
                <label><?php echo $paterno_tutor; ?></label>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Apellido materno:</label>
				<input type="hidden" name="materno_tutor">
                <label><?php echo $materno_tutor; ?></label>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Nombre (s):</label>
				<input type="hidden" name="nombre_tutor">
                <label><?php echo $nombre_tutor; ?></label>
			</fieldset>
		</div>


	
		<legend><b><span class="glyphicon glyphicon-phone"></span> Contacto</b></legend>

		<div class="multi_input_line">
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Correo electrónico:</label>
                <label><?php echo $email; ?></label>
				<input type="hidden" name="email" required>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Teléfono celular:</label>
                <label><?php echo $telefono; ?></label>
				<input id="phone" type="hidden" name="phone" required/>
			</fieldset>
		</div>

		<legend><b><span class="glyphicon glyphicon-map-marker"></span> Domicilio actual</b></legend>

		<div class="multi_input_line">
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Calle y número:</label>
				<input type="hidden" name="calle_numero" required>
                <?php echo $calle; ?>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Colonia:</label>
				<input type="hidden" name="colonia" required>
                <?php echo $colonia; ?>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Código postal:</label>
				<input type="hidden" name="codigo_postal" required>
                <?php echo $codigo_postal; ?>
			</fieldset>
		</div>

		<div class="multi_input_line">
		<fieldset class="two_line_labeled_input">
			<label class="is-required">País de nacionalidad:</label>
            <input type="hidden" name="pais_domicilio" required>
            <?php echo $pais; ?>
		</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Estado:</label>
                <input type="hidden" name="estado" required>
                <?php echo $estado; ?>
			</fieldset>
			<fieldset class="two_line_labeled_input">
				<label class="is-required">Ciudad:</label>
				<input type="hidden" name="ciudad" required>
                <?php echo $ciudad; ?>
			</fieldset>
		</div>
	</div>

    
    <div class="encabezado_section">
		<h3><b>3. Subir Documentación</b></h3>
	</div>


	<div class="sheet floaty">
		<legend><b>Documentos</b></legend>
        <label style="text-align:justify; color:#24a3f8;">Es necesario cargar la documentación para confirmar el proceso de inscripción.
            <br>Estos documentos serán validados y en caso de que exista algún problema le notificaremos vía email.<br><br>

            Requerimientos: Documentos originales escaneados en formato PDF.
        </label>
        <br><br>

        <label style="color:#6a9cd4; font-size:18px;" class="is-required"> Acta de nacimiento del niño</label><br>
                <input type="file" name="1" required accept=".pdf">
                <br><label style="color:#6a9cd4; font-size:18px;" class="is-required"> Fe de bautizmo del niño</label><br>
                <input type="file" name="2" required accept=".pdf">
                <br><label style="color:#6a9cd4; font-size:18px;" class="is-required"> Credencial de elector del Padre / tutor</label><br>
                <input type="file" name="3" required accept=".pdf">
                <br>			
	</div>


	
<br>
<div style="text-align:center;">
    <input id="agregar" type="submit" name="verificar" value="Enviar formulario de registro"/>
</div>
<br><br>
</form>


    
</body>
</html>
