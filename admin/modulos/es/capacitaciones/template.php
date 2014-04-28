				

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
					<h2><strong>Listado</strong> capacitaciones</h2>
					<div class="table-responsive">
						<table class="table table-hover table-striped" data-sortable="" data-sortable-initialized="true">
							<thead>
								<tr>
									<th>Fecha</th>
									<th>Nombre</th>
									<th>Domicilio</th>									
									<th>Email</th>
									<th>Link</th>
									<th data-sortable="false">Opciones</th>
								</tr>
							</thead>
							
							<tbody>

								<?php 

									$sql=mysqli_query("SELECT * FROM ".$sec."  ORDER BY id DESC");
									if (mysql_num_rows($sql) != 0) {
										while ($row=mysql_fetch_assoc($sql)) { ?>
											
											<tr>
												<td><?=$row["fecha"]?></td>
												<td><?=$row["nombre"]?></td>
												<td><?=$row["domicilio"]?></td>
												<td><a href="mailto:<?=$row["email"]?>"><?=$row["email"]?></a></td>
												<td><a href="<?=$row["link"]?>" target="_blank"><?=$row["link"]?></a></td>

												<td>
													<div class="btn-group btn-group-xs">
														<a class="btn btn-default" href="<?=$conf["url"]?>?sec=<?=$page?>&subsec=editar&id=<?=$row["id"]?>" title="" data-toggle="tooltip" data-original-title="Editar"><i class="fa fa-edit"></i></a>
														<a class="btn btn-default" href="<?=$conf["url"]?>?sec=<?=$page?>&subsec=borrar&id=<?=$row["id"]?>" title="" data-toggle="tooltip" data-original-title="Eliminar"><i class="fa fa-power-off"></i></a>
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
