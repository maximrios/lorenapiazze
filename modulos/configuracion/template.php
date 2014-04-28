
                <?php       

                        if(isset($_GET["msj"])){

                            $class= $conf['msj'][$mensajes[$_GET["msj"]][0]] ;
                            echo '<div class="alert alert-'.$class.' fade in">
                                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                  '.$mensajes[$_GET["msj"]][1].'
                                </div>';
                            }

                ?>


                <div class="box-info full">
                        <!-- Contact form validator -->
                        <div class="box-info">
                        <h2><strong>Configuracion :</strong><?=$_SESSION["nombre"]?></h2>

                        <form data-toggle="validator" id="myForm" method="POST" action="" role="form">

                                <div class="form-group">
                                    <label for="empresa">Nombre</label>
                                    <input type="text" name="nombre" value="<?=$row["nombre"]; ?>" id="nombre" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dni">Email</label>
                                    <input type="email"  name="email" value="<?=$row["email"]; ?>" id="email" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dni">Contraseña</label>
                                    <input type="password"  name="contrasena" value="<?=$row["contrasena"]; ?>" id="contrasena" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

         
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                              </div>
                              <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                        </form>

                        </div><!-- End div .box-info -->
                    </div>