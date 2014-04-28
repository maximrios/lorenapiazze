               <?php       

                        if(isset($_GET["msj"])){

                           
                            echo '<div class="alert alert-info fade in">
                                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    Imagen eliminada.
                                </div>';
                            }

                ?>

                <div class="box-info full">
                        <!-- Contact form validator -->
                        <div class="box-info">
                        <h2><strong>Editar noticia:</strong> <?=$row["titulo"]?></h2>

                        <form data-toggle="validator"  enctype="multipart/form-data" id="myForm" method="POST" action="" role="form">

                                <div class="form-group">
                                    <label for="categoria">Ubicacion:</label>
    
                                        <?php 

                                            $sql2=mysqli_query("SELECT * FROM ".$sec."_categorias ORDER BY nombre ASC");
                                            while ($rew=mysql_fetch_assoc($sql2)) {

                                                $checked= ($row["ub".$rew["id"]] == 1) ? 'checked="checked"' : '';
                                               echo '<br><input type="checkbox" name="ub'.$rew["id"].'" value="1" '.$checked.'> '.$rew["nombre"].'';
                                            }


                                        ?>
    
                                </div>
                                <div class="form-group">
                                    <label for="empresa">Titulo</label>
                                    <input type="text" name="titulo" value="<?=$row["titulo"]; ?>" id="titulo" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dni">Epigrafe</label>
                                    <input type="text"  name="epigrafe" value="<?=$row["epigrafe"]; ?>" id="epigrafe" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="texto">Texto</label>
                                    <textarea  name="texto" id="texto" class="form-control text-input ckeditor"><?=$row["texto"]; ?></textarea>
                                </div>


                                    <?php

                                            $sql=mysqli_query("SELECT * FROM ".$sec."_imagenes WHERE idr =".$row["id"]);
                                            if (mysql_num_rows($sql) != 0) { 

                                    ?>

                                <div class="form-group">
                                    <label for="images">Imagenes</label>
                                     <div>
                                        <ol class="images">

                                            <?php
                                                while ($raw=mysql_fetch_assoc($sql)) {
                                                    echo '<li><a target="_blank" class="btn btn-primary btn-xs" href="'.$conf["uploadDir"].$raw["imagen"].'">'.$raw["imagen"].'</a> <a class="link-danger" href="'.$conf["url"].'?sec='.$page.'&subsec=borrarimg&id='.$raw["id"].'">Borrar</a></li>';
                                                }
                                            ?>


                                        </ol>
                                    </div>
                                </div>

                                    <?php  
                                            }

                                    ?>

                                <div class="form-group">
                                    <label for="images">Agregar imagenes</label>
                                     <div>
                                        <input type="file" title="Seleccionar " class="btn-primary btn-sm"  multiple="multiple" name="images[]" id="images" >
                                    </div>
                                </div>

                                



                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                              </div>
                              <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                        </form>

                        </div><!-- End div .box-info -->
                    </div>