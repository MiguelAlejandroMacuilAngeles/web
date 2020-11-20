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
												<!-- Begin Page Content -->
												<div class="container-fluid">

													<!-- Page Heading -->
													<h1 class="h3 mb-2 text-gray-800">Lista de compras</h1>
													<!-- DataTales Example -->
													<div class="card shadow mb-4">
														<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
													
															<a href="<?=base_url('Compras/nueva_compra')?>" class="btn btn-success btn-icon-split btn-sm">
																<span class="icon text-white-50">
																	<i class="fas fa-plus"></i>
																</span>
																<span class="text">Nueva Compra</span>
															</a>

														</div>
														<div class="card-body">
															<div class="table-responsive">
																<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																	<thead>
																		<tr>
																			<th>Número de compra</th>
																			<th>Proveedor</th>
																			<th>Contacto</th>
																			<th>Catalogo en línea</th>

																			<th> </th>
																		</tr>
																	</thead>

																	<tbody>
																		<?php foreach ($comp as $key => $compr) { ?>
																			<tr>
																				<td><?=$compr->IDCompra?></td>
																				<td><?=$compr->proveedorNombre?></td>

																				<td><?=$compr->contactoNombre?></td>
																				<td><?=$compr->URL?></td>

																				<?php //debug($compr->IDCompra, true); ?>

																				<td>
																					<a href="<?=base_url('Compras/editar_compra/'.$compr->IDCompra)?>"
																						class="btn btn-success btn-circle btn-sm">
																						<i class="fas fa-sync-alt"></i>
																					</a>
																					<a href="<?=base_url('Compras/eliminar_compra/'.$compr->IDCompra)?>"
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
												<!-- /.container-fluid -->

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
