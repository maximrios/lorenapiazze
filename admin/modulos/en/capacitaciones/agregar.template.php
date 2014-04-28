                <div class="box-info full">
                        <!-- Contact form validator -->
                        <div class="box-info">
                        <h2><strong>Agregar capacitacion</strong></h2>

                        <form data-toggle="validator" id="myForm" method="POST" action="" role="form">

                                <div class="form-group">
                                    <label for="empresa">Nombre</label>
                                    <input type="text" name="nombre"  id="nombre" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dni">Domicilio</label>
                                    <input type="text"  name="domicilio" id="domicilio" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="dni">Email</label>
                                    <input type="text"  name="email"  id="email" class="form-control text-input">
     
                                </div>

                                <div class="form-group">
                                    <label for="dni">Link</label>
                                    <input type="text"  name="link" id="link" class="form-control text-input">

                                </div>

         
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                              </div>
                              <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                        </form>

                        </div><!-- End div .box-info -->
                    </div>
