<?php
if (isset($_POST['submit'])) {
    
	$name = $_POST["name"];
	$email = $_POST["email"];
	$asunto = $_POST["asunto"];
	$message = $_POST["message"];
    
	$errorEmpty = false;
	$errorEmail = false;

	if (empty($name) || empty($email) || empty($message))  {
		echo "<span class='form-error'>¡Completa todos los campos!</span>";
		$errorEmpty = true;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class='form-error'>Email incorrecto.</span>";
		$errorEmail = true; 
	}
	else {
            $dest = "info@test.cat"; //Email de destino
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto']; //Asunto
            $message = $_POST['message']; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $name <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

            if(mail($dest,$asunto,$message,$headers)){
                echo "<span class='form-success'>Se ha enviado correctamente</span>";
                $_POST['name'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['message'] = '';

            }else{
                echo "Hubo un error al enviar el mensaje.";
            }
	   }

}  
?>

<script>
    $("#mail-name, #mail-email, #mail-asunto, #mail-message").removeClass("input-error")

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if (errorEmpty == true) {
        $("#mail-name, #mail-email, #mail-asunto, #mail-message").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#mail-email").addClass("input-error");
    }

    if (errorEmpty == false && errorEmail == false) {
        $("#mail-name, #mail-email, #mail-message,").val('');
    }
</script>