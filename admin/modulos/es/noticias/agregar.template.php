				<div class="box-info full">
						<!-- Contact form validator -->
						<div class="box-info">
						<h2><strong>Agregar noticia</strong></h2>

						<form data-toggle="validator" enctype="multipart/form-data" id="myForm" method="POST" action="" role="form">

						 		<div class="form-group">
							 		<label for="categoria">Ubicacion:</label>
	
                                        <?php 

                                            $sql=mysqli_query("SELECT * FROM ".$sec."_categorias ORDER BY nombre ASC");
                                            while ($row=mysql_fetch_assoc($sql)) {
                                               echo '<br><input type="checkbox" name="ub'.$row["id"].'" value="1"> '.$row["nombre"].'';
                                            }


                                        ?>
    
                                </div>

                                <div class="form-group">
                                	<label for="empresa">Titulo</label>
                                	<input type="text" name="titulo" id="titulo" class="form-control text-input"  data-error="Campo requerido" required>
    								<div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                	<label for="dni">Epigrafe</label>
                                	<input type="text"  name="epigrafe" id="epigrafe" class="form-control text-input"  data-error="Campo requerido" required>
    								<div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="direccion">Texto</label>
                                    <textarea  name="texto" id="texto" class="form-control text-input ckeditor"></textarea>
                                </div>

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