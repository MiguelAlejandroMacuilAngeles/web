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
											<h1 class="h3 mb-2 text-gray-800">Lista de Usuarios</h1>

											<!-- DataTales Example -->
											<div class="card shadow mb-4">
												<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
													
													<a href="<?=base_url('Usuarios/nuevo_usuario')?>"
														class="btn btn-success btn-icon-split btn-sm">
														<span class="icon text-white-50">
															<i class="fas fa-plus"></i>
														</span>
														<span class="text">Nuevo usuario</span>
													</a>

												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
															<thead>
																<tr>
																	<th>Nombre</th>
																	<th>Apellido Paterno</th>
																	<th>Apellido Materno</th>
																	<th>Area</th>
																	<th>Puesto</th>
																	<th>Correo</th>
																	<th></th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>Nombre</th>
																	<th>Apellido Paterno</th>
																	<th>Apellido Materno</th>
																	<th>Area</th>
																	<th>Puesto</th>
																	<th>Correo</th>
																	<th></th>
																</tr>
															</tfoot>
															<?php foreach ($usuario as $key => $usu) { ?>
															<tbody>
																<tr>
																	<td><?=$usu->Nombre?></td>
																	<td><?=$usu->apellidoPaterno?></td>
																	<td><?=$usu->apellidoMaterno?></td>
																	<td><?=$usu->Area?></td>
																	<td><?=$usu->Puesto?></td>
																	<td><?=$usu->correo?></td>
																	</td>
																	<td>
																		<a href="<?=base_url('Usuarios/editar_usuarios/'.$usu->IDUsuario)?>"
																			class="btn btn-success btn-circle btn-sm">
																			<i class="fas fa-sync-alt"></i>
																		</a>
																		<a href="<?=base_url('Usuarios/eliminar_usuario/'.$usu->IDUsuario)?>"
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
