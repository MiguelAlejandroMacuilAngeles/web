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
											<h1 class="h3 mb-2 text-gray-800">Nuevo usuario</h1>

											<!-- DataTales Example -->

											<!-- /.container-fluid -->
											<?=form_open('Usuarios/nuevo_usuario')?>
											<div class="row">
												<div class="col-lg-6">
													<div class="card shadow">
														<div class="card-header py-3">
														</div>
														<!-- Custom Text Color Utilities -->
														<div class="form-group col-md-12">
															<label>Nombre</label>
															<input type="text" name="nombre" class="form-control" placeholder="Nombre">
															<?=form_error('nombre')?>
														</div>

														<div class="form-group col-md-12">
															<label>Apellido paterno</label>
															<input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido Paterno">
															<?=form_error('apellido_paterno')?>
														</div>

														<div class="form-group col-md-12">
															<label>Apellido materno</label>
															<input type="text" name="apellido_materno" class="form-control" placeholder="Apellido Materno>">
															<?=form_error('apellido_materno')?>
														</div>


														<div class="col-12 col-md-6">
															<div class="form-group">
																<label>
																	Area
																</label>
																<select name="area" class="form-control m-b">
																	<option selected="Selecciona una opción..."></option>
																	<option>administrativa</option>
																	<option>mantenimiento</option>
																</select>
																<?=form_error('area')?>
															</div>
														</div>
														<div class="col-12 col-md-6">
															<div class="form-group">
																<label>
																	Puesto
																</label>
																<select name="puesto" class="form-control m-b">
																	<option selected="Selecciona una opción..."></option>
																	<option>gerente</option>
																	<option>tecnico</option>
																	<option>empleado</option>
																</select>
																<?=form_error('puesto')?>
															</div>
														</div>

													</div>
												</div>
												<div class="col-lg-6">
													<!-- Background Gradient Utilities -->
													<div class="card shadow">
														<div class="card-header py-3">
														</div>
														<div class="form-group col-md-12">
															<label>Tipo de usuario</label>
															<select name="tipoUsuario" class="form-control m-b">
																<option selected=""></option>
																<option>pro</option>
																<option>normal</option>
															</select>
															<?=form_error('tipoUsuario')?>
														</div>
														<div class="form-group col-md-12">
															<label>Grupo de trabajo</label>
															<select name="grupoTrabajo" class="form-control m-b">
																<option selected=""></option>
																<option>grupo 1</option>
																<option>grupo 2</option>
																<option>grupo 3</option>
															</select>
															<?=form_error('grupoTrabajo')?>
														</div>
														<div class="form-group col-md-12">
															<label>Correo</label>
															<input type="email" name="correo" class="form-control"
																placeholder="example@gmail.com"> <?=form_error('Correo')?>
														</div>
														<div class="form-group col-md-12">
															<label>Contraseña</label>
															<input type="password" name="contrasena" class="form-control">
															<?=form_error('contrasena')?>
														</div>
													</div>
													<div class="my-2"></div>
													<div class="form-group">
														<div class="col-md-6">
															<a href="<?=base_url('Usuarios')?>" class="btn btn-danger btn-icon-split">
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
