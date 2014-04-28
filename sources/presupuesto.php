<?php 
    
    $enviado=false;
    if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {
            $mensajes= array();

            if (!empty($_POST["nombre"])  && !empty($_POST["email"]) && !empty($_POST["empresa"]) && !empty($_POST["dni"]) && !empty($_POST["direccion"]) && !empty($_POST["tel_fijo"]) && !empty($_POST["tel_movil"]) && !empty($_POST["mensaje"]))  {
                

                    //mysqli_query("INSERT INTO `usuarios` (`id`, `nombre`, `empresa`, `dni`, `direccion`, `tel_fijo`, `tel_movil`, `email`, `estado`, `admin`, `contrasena`, `fecha`) VALUES (NULL, '".$_POST["nombre"]."', '".$_POST["empresa"]."', '".$_POST["dni"]."', '".$_POST["direccion"]."', '".$_POST["tel_fijo"]."', '".$_POST["tel_movil"]."  ', '".$_POST["email"]."', '0', '0', '".$_POST["contrasena"]."', CURDATE());"); 
                    $enviado = true;
                    array_push($mensajes, "Presupuesto solicitado.");

                   /* 

                      require_once('class.phpmailer.php');
   
                      $title ="Tu contraseña para ".$conf["name"];

                      $mail             = new PHPMailer(); 

                      $search  = array('{email}','{contrasena}', '{contrasena}', '{sitio}');
                      $replace = array($row["email"], $row["contrasena"], $conf["sitio"],);

                      $body             = str_replace($search, $replace, file_get_contents('emails/recuperar-contrasena.html'));
                      $body             = eregi_replace("[\]",'',$body);

                      //$mail->AddReplyTo($_POST["InputEmail"], $_POST["InputName"]);
                      //$mail->SetFrom($_POST["InputEmail"], $_POST["InputName"]);

                      $mail->AddAddress($row["email"], $row["nombre"]);

                      $mail->Subject    = $title;

                      $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

                      $mail->MsgHTML($body);

                      if(!$mail->Send()) {
                            $enviado=true;
                            array_push($mensajes, "Se envio la contraseña a tu email.");
                      } else {
                        array_push($mensajes, "No logramos enviarte el email, vuelve a intentar en un momento.");
                      }

                    */
               
            
            }else{
                array_push($mensajes, "Debe completar todos los campos.");
            }

        }

?>