<?php 
    
    $enviado=false;
    if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {
            $mensajes= array();

            if (empty($_POST["email"]))  {
                array_push($mensajes, "Debe completar su <strong>Email</strong>");
            }else{
                $sql=mysqli_query("SELECT * FROM  usuarios WHERE email LIKE '".$_POST["email"]."' LIMIT 1");
                if (mysql_num_rows($sql) == 0) {
                    array_push($mensajes, "No existe ninguna cuenta registrada con ese email.");
                }else{
                    $row=mysql_fetch_assoc($sql);
      
                      require_once('class.phpmailer.php');

                      $title =utf8_decode("Tu contraseña para ".$conf["name"]);

                      $mail             = new PHPMailer(); 

                      $search  = array('{email}','{contrasena}', '{contrasena}', '{sitio}');
                      $replace = array($row["email"], $row["contrasena"], $conf["sitio"],);

                      $body             = str_replace($search, $replace, file_get_contents('emails/recuperar-contrasena.html'));
                      $body = utf8_decode($body);
                      

                      //$mail->AddReplyTo($_POST["InputEmail"], $_POST["InputName"]);
                      $mail->SetFrom($conf['email'], $conf['name']);

                      $mail->AddAddress($row["email"], $row["nombre"]);

                      $mail->Subject    = $title;

                      $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

                      $mail->MsgHTML($body);

                      if($mail->Send()) {
                            $enviado=true;
                            array_push($mensajes, "Se envio la contraseña a tu email.");
                      } else {
                        array_push($mensajes, "No logramos enviarte el email, vuelve a intentar en un momento.");
                      }

                }
                
            }
        }

?>