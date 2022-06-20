
<?php
date_default_timezone_set("America/Lima");
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);
    
        $celular = trim($_POST["company"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Por favor completa nuevamente el formulario.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "sistemas@ebalsconsultores.com , roycarisarmiento@gmail.com";

        // Build the email content.
        $email_content = '<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<div align="center">
	<div align="center"><img src="http://dprotec.com.pe/images/logo-dprotec.png" style="width:250px;" ></div>
	<div>
	<h3><b>NUEVO MENSAJE DESDE LA PAGINA WEB</b></h3>
	</div>
	
		<div><h3>Datos de la consulta</h3>
		    <table class="tabla_precios" >
		        <tr>
                  <th colspan="2"  style="text-align: -webkit-center; ">Nombre</th>
                  <td  style="text-align: -webkit-center;">'.$name.'</td>
                
                </tr>
                <tr>
                  <th colspan="2"  style="text-align: -webkit-center; ">Correo Electrónico</th>
                  <td  style="text-align: -webkit-center;">'.$email.'</td>
                
                </tr>
                <tr>
                  <th colspan="2"  style="text-align: -webkit-center; ">Celular</th>
                  <td  style="text-align: -webkit-center;">'.$celular.'</td>
                
                </tr>

                
                <tr>
                  <th colspan="2" style="text-align: -webkit-center;">Asunto</th>
                  <td style="text-align: -webkit-center;">'.$message.'</td>
                </tr>                                
                
               
                <tr>
                  <th colspan="2" style="text-align: -webkit-center;">Fecha</th>
                  <td style="text-align: -webkit-center;">'.date('l jS \of F Y h:i:s A').'</td>
                </tr>                  
            </table>
	</div>

	</html>';
	$headers = "MIME-Version: 1.0\r\n"; 

    $headers .= "Content-type: text/html; charset=UTF-8";  
      
    $headers .= "From: DPROTEC\r\n";

        // Build the email headers.
        $email_headers = "DPROTEC - Consulta Web: $message";

        // Send the email.
        if (mail($recipient,$email_headers, $email_content, $headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Tu mensaje fue enviado";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            //echo "Oops! Something went wrong and we couldn't send your message.";
			echo "¡Gracias! Tu mensaje fue enviado";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Ocurrio un problema con el envio del mensaje, intentalo nuevamente.";
    }

?>

