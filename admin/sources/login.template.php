                    
                    <?php 

                    if (isset($errores) && !empty($errores)) {
                        foreach ($errores as $key => $value) {
                            echo '<div class="alert alert-warning fade in">
                                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                  '.$value.'
                                </div>';
                        }
                    }
                   
                    ?>

                    <div class="box-info">
                        <h2 class="text-center">Ingresar al sistema</h2>

                            <form role="form" action="" method="POST">
                                <div class="form-group login-input">
                                <i class="fa fa-sign-in overlay"></i>
                                <input type="text" name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" class="form-control text-input" placeholder="Email">
                                </div>
                                <div class="form-group login-input">
                                <i class="fa fa-key overlay"></i>
                                <input type="password" name="contrasena" class="form-control text-input" placeholder="Contraseña">
                                </div>

                                <!--<div class="checkbox">
                                <label>
                                    <input type="checkbox"> Recordarme
                                </label>
                                </div>-->
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-unlock"></i> Entrar</button>
                                    </div>
                                    <!--<div class="col-sm-6">
                                    <a href="<?=$conf['url']?>?sec=registro" class="btn btn-default btn-block"><i class="fa fa-rocket"></i> Registrarme</a>
                                    </div> -->
                                </div>
                                <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                            </form>

                        </div>
                
                        <p class="text-center"><a href="<?=$conf['url']?>?sec=recuperar"><i class="fa fa-lock"></i> Olvido la contraseña?</a></p>
                    