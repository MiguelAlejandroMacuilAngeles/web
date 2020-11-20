<!DOCTYPE html>
<html lang="en">


<?=$this->load->view('includes/head','',TRUE);?>
<?=$this->load->view('includes/head2','',TRUE);?>


<body class="animsition">

	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<!-- Sidebar -->
		<?=$this->load->view('includes/menu','',TRUE);?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div class="page-container">

	            <!-- HEADER DESKTOP-->
									<?=$this->load->view('includes/header','',TRUE)?>
	            <!-- HEADER DESKTOP-->

	            <!-- MAIN CONTENT-->
	            <div class="main-content">
	                <div class="section__content section__content--p30">
										<div class="container-fluid">

											<!-- Page Heading -->
											<h1 class="h3 mb-2 text-gray-800">Lista de Ordenes</h1>

											<!-- DataTales Example -->
											<div class="card shadow mb-4">
												<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
													
													<a href="<?=base_url('OrdenSer/nueva_orden')?>" class="btn btn-success btn-icon-split btn-sm">
														<span class="icon text-white-50">
															<i class="fas fa-plus"></i>
														</span>
														<span class="text">Nueva Orden</span>
													</a>

												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
															<thead>
																<tr>
																	<th>Estatus</th>
																	<th>N. Orden</th>
																	<th>Producto</th>
																	<th>Fecha</th>
																	<th>Elaborado Por</th>
																	<th>Empresa</th>
																	<th>Ord. Compra</th>
																	<th>Responsable</th>
																	<th> </th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>Estatus</th>
																	<th>N. Orden</th>
																	<th>Producto</th>
																	<th>Fecha</th>
																	<th>Elaborado Por</th>
																	<th>Empresa</th>
																	<th>Ord. Compra</th>
																	<th>Responsable</th>
																	<th> </th>
																</tr>
															</tfoot>
															<?php foreach ($ords as $key => $ord) { ?>
															<tbody>
																<tr>
																	<td><?=$ord->Estatus?></td>
																	<td><?=$ord->NOrden?></td>
																	<td>
																		<?php foreach ($ord->producto as $keyy => $pr) {
																									echo $pr->Nombre.'. ';
																								}?>
																		<!---- codigo php pa obtener la marca de cada equipo de calibracion listado ---->
																	</td>
																	<td><?=$ord->Fecha?></td>
																	<td><?=$ord->Elaborado_Por?></td>
																	<td><?=$ord->Empresa?></td>
																	<td><?=$ord->OrdCompra?></td>
																	<td><?=$ord->Responsable?></td>
																	<td>
																		<a href="<?=base_url('OrdenSer/editar_orden/'.$ord->NOrden)?>"
																			class="btn btn-success btn-circle btn-sm">
																			<i class="fas fa-sync-alt"></i>
																		</a>
																		<a href="<?=base_url('OrdenSer/eliminar_orden/'.$ord->NOrden)?>"
																			class="btn btn-danger btn-circle btn-sm">
																			<i class="fas fa-trash"></i>
																		</a>
																	</td>
																</tr>
																<?php } ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>

										</div>
	                    </div>
	                </div>
	            </div>
	            <!-- END MAIN CONTENT-->
	            <!-- END PAGE CONTAINER-->

		<!-- End of Content Wrapper -->

	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->

	<!-- Bootstrap core JavaScript-->
	<?=$this->load->view('includes/base_js','',TRUE);?>

</body>

</html>
