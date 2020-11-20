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
                      <h1 class="h3 mb-2 text-gray-800">Nueva Orden</h1>

                    <!-- /.container-fluid -->
                  <?=form_open('OrdenSer/nueva_orden')?>
                    <div class="row">
                      <div class="col-lg-6">
                          <div class="card shadow">
                            <div class="card-header py-3">
                                      </div>
                          <!-- Custom Text Color Utilities -->
                                    <div class="form-group col-md-12">
                                      <label>Estatus</label>
                                      <select name="Status" class="form-control m-b">
                                      <option>Activo</option>
                                      <option>Inactivo</option>
                                    </select>
                                    <?=form_error('Status')?>
                                  </div>

                                    <!-----<div class="form-group col-md-12">
                                      <label>Productos</label>
                                      <select name="Productos" class="form-control m-b" multiple="">
                                      <?php foreach ($producto as $key => $prod) { ?>
                                        <option value="<?=$prod->CodProducto?>"><?=$prod->Nombre?></option>
                                      <?php } ?>
                                    </select>
                                    </div>----->
                                    <div class="form-group col-md-12">
                                    <label >Elige un producto:</label>
                                      <select name="Productos[]" class="form-control m-b"  multiple>
                                        <?php foreach ($producto as $key => $prod) { ?>
                                        <option value="<?=$prod->CodProducto?>"><?=$prod->Nombre?></option>
                                      <?php } ?>
                                    </select>
                                  </div>

                                    <div class="form-group col-md-4">
                                      <label>Fecha</label>
                                      <input type="date" class="form-control" name="Fecha" value="01-06-2020" data-date-format="dd-mm-yyyy">
                                      <?=form_error('Fecha')?>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label>Quien Elaboro</label>
                                      <input type="text" name="Elaboro" class="form-control" placeholder="Nombre Completo">
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
                                      <label>Empresa</label>
                                      <input type="text" name="Empresa" class="form-control" placeholder="Nombre de la Empresa">
                                      <?=form_error('Empresa')?>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label>Orden Servicio</label>
                                      <input type="text" name="Orden" class="form-control" placeholder="Ej: 12354">
                                      <?=form_error('Orden')?>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label>Responsable</label>
                                      <input type="text" name="Responsable" class="form-control" placeholder="Nombre Completo">
                                      <?=form_error('Responsable')?>
                                    </div>
                                </div>
                                <div class="my-2"></div>
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <a href="<?=base_url('OrdenSer')?>" class="btn btn-danger btn-icon-split">
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
