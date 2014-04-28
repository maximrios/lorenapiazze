                <div class="box-info full">
                        <!-- Contact form validator -->
                        <div class="box-info">
                        <h2><strong>Agregar agenda</strong></h2>

                        <form data-toggle="validator" id="myForm" method="POST" action="" role="form">

                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input type="text" name="titulo" value="" id="titulo" class="form-control text-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="fecha">Fecha</label>
                                    <input type="text"  name="fecha" value="" id="fecha" class="form-control datepicker-input"  data-error="Campo requerido" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="fecha2">Fecha2 hasta</label>
                                    <input type="text"  name="fecha2" value="" id="fecha2" class="form-control datepicker-input">
                                </div>


                                <div class="form-group">
                                    <label for="desc">Descripcion</label>
                                    <textarea  name="desc" value="" id="desc"  class="form-control text-input"  data-error="Campo requerido" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

         
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" >Enviar</button>
                              </div>
                              <input type="hidden" name="enviado" value="<?=$_SESSION["token"]?>">
                        </form>

                        </div><!-- End div .box-info -->
                    </div>
