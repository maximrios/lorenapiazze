                <div class="box-info full">
                        <!-- Contact form validator -->
                        <div class="box-info">
                        <h2><strong>Agregar</strong></h2>

                        <form data-toggle="validator"  enctype="multipart/form-data" id="myForm" method="POST" action="" role="form">

                                <div class="form-group">
                                    <label for="empresa">Nombre</label>
                                    <input type="text" name="nombre"  id="nombre" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dni">Email</label>
                                    <input type="text"  name="texto" id="texto" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>


                            <!--    <div class="form-group">
                                    <label for="images">Agregar imagenes</label>
                                     <div>
                                        <input type="file" title="Seleccionar " class="btn-primary btn-sm"  multiple="multiple" name="images[]" id="images" >
                                    </div>
                                </div> -->
         
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                              </div>
                              <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                        </form>

                        </div><!-- End div .box-info -->
                    </div>
