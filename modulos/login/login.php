<?php 

    if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {
            $errores= array();

            if (empty($_POST["email"]) || empty($_POST["contrasena"]))  {
                array_push($errores, "Debe completar su <strong>Email</strong> y <strong>Contraseña</strong>");
            }else{
                $sql=mysqli_query("SELECT * FROM  usuarios WHERE email LIKE '".$_POST["email"]."' AND contrasena LIKE '".$_POST["contrasena"]."' LIMIT 1");
                if (mysql_num_rows($sql) == 0) {
                    array_push($errores, "Combinacion de email y contraseña incorrecta.");
                }else{
                    $row=mysql_fetch_assoc($sql);
                    if ($row["estado"] == 0) {
                        array_push($errores, "Su usuario se encuentra pendiente de activacion.");
                    }else{

                        $_SESSION["uid"] = $row["id"];
                        $_SESSION["nombre"] = $row["nombre"];
                        $_SESSION["empresa"] = $row["empresa"];
                        $_SESSION["dni"] = $row["dni"];
                        $_SESSION["direccion"] = $row["direccion"];
                        $_SESSION["tel_fijo"] = $row["tel_fijo"];
                        $_SESSION["tel_movil"] = $row["tel_movil"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["admin"] = $row["admin"];
                        header("location: ".$conf['url']);

                    }

                }
                
            }
        }

?>