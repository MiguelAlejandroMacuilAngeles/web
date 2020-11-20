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
                      <h1 class="h3 mb-2 text-gray-800">Lista de Ordenes de Compra</h1>

                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                              
                              <a href="<?=base_url('OrdenCompra/agregar_orden')?>" class="btn btn-success btn-icon-split btn-sm">
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
                                  <th>IDOrden</th>
                                  <th>Referencia</th>
                                  <th>Total</th>
                                  <th>Fecha</th>
                                  <th>Estatus</th>
                                  <th>Elaboro</th>
                                  <th>Proveedor</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>IDOrden</th>
                                  <th>Referencia</th>
                                  <th>Total</th>
                                  <th>Fecha</th>
                                  <th>Estatus</th>
                                  <th>Elaboro</th>
                                  <th>Proveedor</th>
                                  <th></th>
                                </tr>
                              </tfoot>
                              <?php foreach ($ordcomp as $key => $ordc) { ?>
                              <tbody>
                                <tr>
                                  <td><?=$ordc->IDOrdenC?></td>
                                  <td><?=$ordc->Referencia?></td>
                                  <td><?=$ordc->Total?></td>
                                  <td><?=$ordc->Fecha?></td>
                                  <td><?=$ordc->Estatus?></td>
                                  <td><?=$ordc->Elaboro?></td>
                                  <td><?=$ordc->Proovedor?></td>
                                  </td>
                                  <td>
                                    <a href="<?=base_url('OrdenCompra/editar_ordenc/'.$ordc->IDOrdenC)?>" class="btn btn-success btn-circle btn-sm">
                                      <i class="fas fa-sync-alt"></i>
                                    </a>
                                    <a href="<?=base_url('OrdenCompra/eliminar_orden/'.$ordc->IDOrdenC)?>" class="btn btn-danger btn-circle btn-sm">
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
