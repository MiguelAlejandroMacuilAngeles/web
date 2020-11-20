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
						<h1 class="h3 mb-2 text-gray-800">Editar compra</h1>
						<!-- DataTales Example -->
						<!-- /.container-fluid -->
						<?=form_open('Compras/editar_compra/'.$compra->IDCompra)?>
						<div class="row">
							<div class="col-lg-6">
								<div class="card shadow">
									<div class="card-header py-3">
									</div>
									<!-- Custom Text Color Utilities -->
									<div class="form-group col-md-12">
										<label>Proveedor</label>
										<select class="form-control" data-tooggle="select"  name="id_proveedor" <?=form_error('id_proveedor')?>>
												<?php foreach ($proveedor as $key => $prov) { ?>}
													<option 
														<?php if($compra->IDProveedor == $prov->IDProveedor){echo "selected";} ?> 
														value="<?=$prov->IDProveedor?>"
													> 
														<?=$prov->Nombre?> <?=$prov->ApellidoPaterno?> <?=$prov->ApellidoMaterno?>
													</option>
												<?php } ?>
										</select>
									</div>

									<div class="form-group col-md-12">
										<label>Contacto</label>
										<select class="form-control" data-tooggle="select"  name="id_contacto" <?=form_error('id_contacto')?>>
												<?php foreach ($contacto as $key => $con) { ?>}
														<option
															<?php if($compra->IDContacto == $con->IDContacto){echo "selected";} ?>
															value="<?=$con->IDContacto?>"
														> 
															<?=$con->Nombre?>  <?=$con->ApellidoPaterno?> <?=$con->ApellidoMaterno?>
														</option>
												<?php } ?>
										</select>
									</div>

								</div>
							</div>
							<div class="col-lg-6">
								<!-- Background Gradient Utilities -->
								<div class="card shadow">
									<div class="card-header py-3">
									</div>
									<div class="form-group col-md-12">
										<label>Direccion</label>
										<select class="form-control" data-tooggle="select"  name="id_direccion" <?=form_error('id_direccion')?>>
												<?php foreach ($catalogoDir as $key => $dire) { ?>}
														<option 
															<?php if($compra->id_Direccion == $dire->id_Direccion){echo "selected";} ?>
															value="<?=$dire->id_Direccion?>"
														> 
															<?=$dire->Calle?>, <?=$dire->Colonia?>, <?=$dire->Localidad?> 
														</option>
												<?php } ?>
										</select>
									</div>
									<div class="form-group col-md-12">
										<label>Cátalogo</label>
										<select class="form-control" data-tooggle="select"  name="id_catalogo" <?=form_error('id_catalogo')?>>
												<?php foreach ($catalogoLin as $key => $cata) { ?>}
														<option 
															<?php if($compra->id_CatalogoLinea == $cata->id_CatalogoLinea){echo "selected";} ?>
															value="<?=$cata->id_CatalogoLinea?>"
														>
															<?=$cata->URL?>
														</option>
												<?php } ?>
										</select>
									</div>

								</div>
								<div class="my-2"></div>
								<div class="form-group">
									<div class="col-md-6">
										<a href="<?=base_url('Compras')?>" class="btn btn-danger btn-icon-split">
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
