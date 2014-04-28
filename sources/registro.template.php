                    
                    <?php 

                    if (isset($mensajes) && !empty($mensajes)) {
                        foreach ($mensajes as $key => $value) {
                            
                            $class= $enviado ? 'info' : 'warning';
                            echo '<div class="alert alert-'.$class.' fade in">
                                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                  '.$value.'
                                </div>';
                        }
                    }

                    if (!$enviado) { ?>
                   
                        <div class="box-info">
                        <h2 class="text-center">Registrarme en el sistema</h2>

                            <form role="form" action="" method="POST">

                                <div class="form-group login-input">
                                <i class="fa fa-user overlay"></i>
                                <input type="text" value="<?php if(isset($_POST["nombre"])) echo $_POST["nombre"]; ?>" name="nombre" class="form-control text-input" placeholder="Nombre">
                                </div>

                                <div class="form-group login-input">
                                <i class="fa fa-envelope overlay"></i>
                                <input type="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" name="email" class="form-control text-input" placeholder="Email">
                                </div>

                                <div class="form-group login-input">
                                <i class="fa fa-sign-in overlay"></i>
                                <input type="text" value="<?php if(isset($_POST["empresa"])) echo $_POST["empresa"]; ?>" name="empresa" class="form-control text-input" placeholder="Empresa">
                                </div>

                                <div class="form-group login-input">
                                <i class="fa fa-sign-in overlay"></i>
                                <input type="text" value="<?php if(isset($_POST["dni"])) echo $_POST["dni"]; ?>" name="dni" class="form-control text-input" placeholder="DNI">
                                </div>

                                <div class="form-group login-input">
                                <i class="fa fa-sign-in overlay"></i>
                                <input type="text" value="<?php if(isset($_POST["direccion"])) echo $_POST["direccion"]; ?>" name="direccion" class="form-control text-input" placeholder="Dirección">
                                </div>

                                <div class="form-group login-input">
                                <i class="fa fa-sign-in overlay"></i>
                                <input type="text" value="<?php if(isset($_POST["tel_fijo"])) echo $_POST["tel_fijo"]; ?>" name="tel_fijo" class="form-control text-input" placeholder="Teléfono fijo">
                                </div>

                                <div class="form-group login-input">
                                <i class="fa fa-sign-in overlay"></i>
                                <input type="text" value="<?php if(isset($_POST["tel_movil"])) echo $_POST["tel_movil"]; ?>" name="tel_movil" class="form-control text-input" placeholder="Telefono móvil">
                                </div>
                                
                                <div class="form-group login-input">
                                <i class="fa fa-key overlay"></i>
                                <input type="password" value="<?php if(isset($_POST["contrasena"])) echo $_POST["contrasena"]; ?>" name="contrasena" class="form-control text-input" placeholder="Contraseña">
                                </div>

                                <button type="submit" class="btn btn-success btn-block"><i class="fa fa-rocket"></i> Registrarme</button>

                                <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                            </form>

                        </div>
                        <?php } ?>
                
                        <p class="text-center"><a href="<?=$conf['url']?>?sec=login"><i class="fa fa-sign-in"></i> Ya estas registrado?</a></p>

                        
                    