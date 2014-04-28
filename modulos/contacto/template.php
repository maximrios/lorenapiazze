				

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
					<h2><strong>Formulario</strong> contacto</h2>
					<div class="table-responsive">
						<table class="table table-hover table-striped" data-sortable="" data-sortable-initialized="true">
							<thead>
								<tr>
									<th>Fecha</th>
									<th>Nombre</th>									
									<th>Email</th>
									<th>Texto</th>
									<th data-sortable="false">Opciones</th>
								</tr>
							</thead>
							
							<tbody>

								<?php 

									$sql=mysqli_query("SELECT * FROM contacto ORDER BY id DESC");
									if (mysql_num_rows($sql) != 0) {
										while ($row=mysql_fetch_assoc($sql)) { ?>
											
											<tr>
												<td><?=$row["fecha"]?></td>
												<td><?=$row["nombre"]?></td>
												<td><a href="mailto:<?=$row["email"]?>"><?=$row["email"]?></a></td>
												<td><?=$row["texto"]?></td>

												<td>
													<div class="btn-group btn-group-xs">

														<a class="btn btn-default" href="<?=$conf["url"]?>?sec=<?=$sec?>&subsec=borrar&id=<?=$row["id"]?>" title="" data-toggle="tooltip" data-original-title="Eliminar"><i class="fa fa-power-off"></i></a>
													</div>
												</td>
											</tr>

								<?php 
										}
									}

								?>
								
							</tbody>
						</table>
					</div><!-- End div .table-responsive -->
				</div>
