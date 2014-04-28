                    
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
                            <h2 class="text-center">Recuperar contraseña</h2>

                                <form role="form" action="" method="POST">
                                    <div class="form-group login-input">
                                    <i class="fa fa-sign-in overlay"></i>
                                    <input type="text" name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" class="form-control text-input" placeholder="Email">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-rocket"></i> Recuperar</button>

                                    <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                                </form>

                            </div>

                        <?php } ?>
                    
                            <p class="text-center"><a href="<?=$conf['url']?>?sec=login"><i class="fa fa-sign-in"></i> Ya recibiste tu contraseña?</a></p>


                    
                    