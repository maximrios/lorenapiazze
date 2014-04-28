<?php 
    
    $enviado=false;
    if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {
            $mensajes= array();

            if (!empty($_POST["nombre"])  && !empty($_POST["email"]) && !empty($_POST["empresa"]) && !empty($_POST["dni"]) && !empty($_POST["direccion"]) && !empty($_POST["tel_fijo"]) && !empty($_POST["tel_movil"]) && !empty($_POST["contrasena"]))  {
                
                $sql=mysqli_query("SELECT * FROM  usuarios WHERE email LIKE '".$_POST["email"]."' LIMIT 1");
                if (mysql_num_rows($sql) != 0) {
                    array_push($mensajes, "Ya existe una cuenta registrada con ese email.");
                }else{

                    
                      require_once('class.phpmailer.php');
   
                      $title ="Solicitud de registo en ImpresosColectivos.com.ar recibida";

                      $mail             = new PHPMailer(); 

                      $search  = array('{nombre}','{fecha}', '{hora}');
                      $replace = array($_POST["nombre"], date("d-m-Y"), date("H:m:s"));

                      $body             = str_replace($search, $replace, file_get_contents('emails/registro.html'));
                      $body = utf8_decode($body);
                     
                      //$mail->AddReplyTo($_POST["InputEmail"], $_POST["InputName"]);
                      $mail->SetFrom("noreply@impresoscolectivos.com.ar", "Impresos Colectivos");

                      $mail->AddAddress($_POST["email"], $_POST["nombre"]);

                      $mail->Subject    = $title;

                      $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

                      $mail->MsgHTML($body);

                      if($mail->Send()) {
                           mysqli_query("INSERT INTO `usuarios` (`id`, `nombre`, `empresa`, `dni`, `direccion`, `tel_fijo`, `tel_movil`, `email`, `estado`, `admin`, `contrasena`, `fecha`) VALUES (NULL, '".$_POST["nombre"]."', '".$_POST["empresa"]."', '".$_POST["dni"]."', '".$_POST["direccion"]."', '".$_POST["tel_fijo"]."', '".$_POST["tel_movil"]."  ', '".$_POST["email"]."', '0', '0', '".$_POST["contrasena"]."', CURDATE());");                  
                           $enviado=true;
                           array_push($mensajes, "Registro exitoso, se te avisara por telefono cuando tu cuenta sea activada.");
                      } else {
                        array_push($mensajes, "No logramos enviarte el email, vuelve a intentar en un momento.");
                      }

                  

                }
                
            
            }else{
                array_push($mensajes, "Debe completar todos los campos.");
            }

        }

?>