				

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
					<h2><strong>Listado</strong> noticias</h2>
					<div class="table-responsive">
						<table class="table table-hover table-striped" data-sortable="" data-sortable-initialized="true">
							<thead>
								<tr>
									<th>Fecha</th>
									<th>Unicacion</th>									
									<th>Titulo</th>
									<th>Epigrafe</th>
									<th data-sortable="false">Opciones</th>
								</tr>
							</thead>
							
							<tbody>

								<?php 

									$sql=mysqli_query("SELECT ".$sec.".*, ".$sec."_categorias.nombre FROM ".$sec." INNER JOIN ".$sec."_categorias ON ".$sec."_categorias.id = ".$sec.".categoria ORDER BY id DESC");
									if (mysql_num_rows($sql) != 0) {
										while ($row=mysql_fetch_assoc($sql)) { ?>
											
											<tr>
												<td><?=$row["fecha"]?></td>
												<td><?=$row["nombre"]?></td>
												<td><?=$row["titulo"]?></td>
												<td><?=$row["epigrafe"]?></td>

												<td>
													<div class="btn-group btn-group-xs">
														<a class="btn btn-default" href="<?=$conf["url"]?>?sec=<?=$sec?>&subsec=editar&id=<?=$row["id"]?>" title="" data-toggle="tooltip" data-original-title="Editar"><i class="fa fa-edit"></i></a>
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
