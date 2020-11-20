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
											<h1 class="h3 mb-2 text-gray-800">Editar Orden compra</h1>

											<!-- DataTales Example -->

											<!-- /.container-fluid -->
											<?=form_open('OrdenCompra/editar_ordenc/'. $orden->IDOrdenC)?>
											<div class="row">
												<div class="col-lg-6">
													<div class="card shadow">
														<div class="card-header py-3">
														</div>
														<!-- Custom Text Color Utilities -->
														<div class="form-group col-md-12">
															<label>Estatus</label>
															<select name="Status" class="form-control m-b">
																<option selected=""> <?php echo $orden->Estatus; ?> </option>
																<option>Activo</option>
																<option>Inactivo</option>
															</select>
															<?=form_error('Status')?>
														</div>
														<div class="form-group col-md-12">
															<label>Proveedor</label>
															<input type="int" name="Proveedor" class="form-control" placeholder=""
															<?=form_error('Proveedor')?> value="<?php echo $orden->Proovedor; ?>">
														</div>


														<div class="form-group col-md-4">
															<label>Fecha</label>
															<input type="date" class="form-control" name="Fecha" data-date-format="dd-mm-yyyy"
																value="<?php echo $orden->Fecha; ?>">
															<?=form_error('Fecha')?>
														</div>
														<div class="form-group col-md-12">
															<label>Quien Elaboro</label>
															<input type="text" name="Elaboro" class="form-control" placeholder=""
																value="<?php echo $orden->Elaboro; ?>">
															<?=form_error('Elaboro')?>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<!-- Background Gradient Utilities -->
													<div class="card shadow">
														<div class="card-header py-3">
														</div>

														<div class="form-group col-md-12">
															<label>Total</label>
															<input type="text" name="Total" class="form-control" placeholder="Ej: 12354"
																value="<?php echo $orden->Total; ?>">
															<?=form_error('Total')?>
														</div>
														<div class="form-group col-md-12">
															<label>Referencias</label>
															<input type="text" name="Referencia" class="form-control" placeholder="Ej: 12354"
																value="<?php echo $orden->Referencia; ?>">
															<?=form_error('Referencia')?>
														</div>

													</div>
													<div class="my-2"></div>
													<div class="form-group">
														<div class="col-md-6">
															<a href="<?=base_url('OrdenCompra')?>" class="btn btn-danger btn-icon-split">
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
