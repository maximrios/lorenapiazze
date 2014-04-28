				

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
					<h2><strong>Listado</strong> noticias </h2>
					<a style="margin-left:15px; margin-bottom:20px;" href="<?=$conf["url"]?>?sec=noticias&subsec=agregar" class="btn btn-success  btn-sm"><i class="fa fa-plus"></i> Nueva</a>


					<div class="table-responsive">
						<table class="table table-hover" data-sortable="" data-sortable-initialized="true">
							<thead>
								<tr class="active">
									<th>Fecha</th>
									<th>Unicacion</th>									
									<th>Titulo</th>
									<th>Epigrafe</th>
									<th data-sortable="false">Opciones</th>
								</tr>
							</thead>
							
							<tbody>

								<?php 

									$sql=mysqli_query("SELECT ".$sec.".* FROM ".$sec."  ORDER BY id DESC");
									if (mysql_num_rows($sql) != 0) {
										while ($row=mysql_fetch_assoc($sql)) { ?>
											
											<tr  <?php if($row["activo"] == 0 ) echo 'class="warning"' ?>>
												<td><?=$row["fecha"]?></td>
												<td><?php

														$categoria="";

			                                            $sql2=mysqli_query("SELECT * FROM ".$sec."_categorias ORDER BY nombre ASC");
			                                            while ($rew=mysql_fetch_assoc($sql2)) {

			                                            	if($row["ub".$rew["id"]] == 1) $categoria=$categoria.$rew["nombre"].", ";
			                                               
			                                            }

			                                            echo trim($categoria, ", ");


												 ?></td>
												<td><?=$row["titulo"]?></td>
												<td><?=$row["epigrafe"]?></td>

												<td>
													<div class="btn-group btn-group-xs">
														<a class="btn btn-default" href="<?=$conf["url"]?>?sec=<?=$page?>&subsec=editar&id=<?=$row["id"]?>" title="" data-toggle="tooltip" data-original-title="Editar"><i class="fa fa-edit"></i></a>
														<a class="btn btn-default" href="<?=$conf["url"]?>?sec=<?=$page?>&subsec=activo&id=<?=$row["id"]?>" title="" data-toggle="tooltip" <?php if($row["activo"] == 1 ) echo ' data-original-title="Desactivar"><i class="fa  fa-exclamation-triangle"></i>'; else echo 'data-original-title="Activar"><i class="fa fa-check-square "></i>'; ?></a>
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
