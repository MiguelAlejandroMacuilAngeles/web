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
											<h1 class="h3 mb-2 text-gray-800">Editar proveedor</h1>

											<!-- DataTales Example -->

											<!-- /.container-fluid -->
											<?=form_open('Proveedor/editar_proveedor/'. $prov->IDProveedor)?>
											<div class="row">
												<div class="col-lg-6">
													<div class="card shadow">
														<div class="card-header py-3">
														</div>
														<!-- Custom Text Color Utilities -->
														<div class="form-group col-md-12">
															<label>Nombre</label>
															<input type="text" name="nombre" class="form-control" placeholder=""
																value="<?php echo $prov->Nombre;?>" <?=form_error('nombre')?>>
														</div>
														<div class="form-group col-md-12">
															<label>Apellido paterno</label>
															<input type="text" name="apellido_paterno" class="form-control"
																value="<?php echo $prov->ApellidoPaterno;?>"
																<?=form_error('apellido_paterno')?>>
														</div>
														<div class="form-group col-md-12">
															<label>Apellido materno</label>
															<input type="text" name="apellido_materno" class="form-control"
																value="<?php echo $prov->ApellidoMaterno;?>"
																<?=form_error('apellido_materno')?>>
														</div>
														<div class="form-group col-md-12">
															<div class="form-group">
																<label>
																	RFC
																</label>
																<input type="text" class="form-control" name="rfc" <?=form_error('rfc')?>
																	value="<?php echo $prov->RFC;?>">
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="card shadow">
														<div class="card-header py-3">
														</div>
														<div class="form-group col-md-12">
															<label>
																Fax
															</label>
															<input type="text" class="form-control" name="fax" value="<?php echo $prov->Fax;?>"
																<?=form_error('fax')?>>
														</div>
														<div class="form-group col-md-12">
															<label>Telefono</label>
															<input type="text" name="telefono" class="form-control"
																value="<?php echo $prov->Telefono;?>" <?=form_error('telefono')?>>
														</div>
														<div class="form-group col-md-12">
															<label>Correo</label>
															<input type="text" name="correo" class="form-control"
																value="<?php echo $prov->Correo;?>" <?=form_error('correo')?>>
														</div>
													</div>
													<div class="my-2"></div>
													<div class="form-group">
														<div class="col-md-6">
															<a href="<?=base_url('Proveedor')?>" class="btn btn-danger btn-icon-split">
																<span class="icon text-white-50">
																	<i class="fas fa-trash"></i>
																</span>
																<span class="text">Descartar</span>
															</a>
															<a type="submit" class="btn btn-success btn-icon-split">
																<span class="icon text-white-50">
																	<i class="fas fa-check"></i>
																</span>
																<button type="submit" class="btn btn-success btn-icon-split">
																	Guardar
																</button>
															</a>
													</div>
													<?=form_close()?>
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
