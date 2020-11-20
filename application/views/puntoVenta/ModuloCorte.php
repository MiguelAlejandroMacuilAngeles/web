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
                      <div class="card mb-4 py-3 border-bottom-info">
                        <div class="card-body">
                          <!-- Page Heading -->
                          <h1 class="h3 mb-2 text-gray-800">Historial de venta</h1>
                          <p class="mb-4">Utiliza los calendarios para realizar busquedas por rangos de fecha.</a></p>
                          <p align="right">
                            <a href="<?=base_url('PuntoVenta/Devolcion')?>" class="btn btn-danger btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                              </span>
                              <span class="text">Devoluciones</span>
                            </a>
                          </p>
                        </div>
                      </div>







                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Corte de Caja</h6>
                          <p>
                            <div class="form-group row">
                            <div class="col-sm-3  ">
                              <a href="#" class="btn btn-primary btn-icon-split">
                                <input type="date" class="form-control"  name="input_fecha1" value="<?php echo date("Y-m-d");?>">
                              </a>
                            </div>
                            <a href="#" class="btn btn-primary btn-icon-split" >
                              <input type="date" class="form-control"  name="input_fecha2" value="<?php echo date("Y-m-d");?>">
                            </a>
                          </div>
                        </p>
                        </div>



                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>ID Venta</th>
                                  <th>Fecha</th>
                                  <th>Total</th>
                                  <th>Ver</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($venta as $venta_item): ?>
                                <tr>
                                  <td><?php echo $venta_item['CodVenta']; ?></td>
                                  <td><?php echo $venta_item['Fecha']; ?></td>
                                  <td><?php echo $venta_item['Cantidad']; ?></td>

                                  <td>
                                    <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal"  data-target="#Detalle">
                                      <i class="fas fa-eye"></i>
                                    </a>
                                  </td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>



                            <!-- Codigo Modal Detalle=================================================================== -->
                                 <?=$this->load->view('puntoventa/Base_jsmodal','',TRUE);?>
                                 <button id="modalBox" type="button" style="display: none;" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">MODAL - LARGE SIZE</button>
                                 <div class="modal fade" id="Detalle" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <p align="right">
                                            <button type="button" class="btn btn-danger btn-circle btn-sm modal-action modal-close waves-effect" data-dismiss="modal">X</button>
                                          </p>
                                         </div>
                                      <div class="modal-body">
                                        <div class="card mb-4 py-3 border-bottom-success">
                                          <div class="card-body">
                                            <!-- Page Heading -->
                                            <h1 class="h3 mb-2 text-gray-800">Detalle de venta</h1>
                                         </div>
                                       </div>
                                      </div>
                                      <div class="card mb-4 py-3 border-left-success">
                                        <div class="card-body">
                                          <!-- DataTales Example -->
                                          <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                              <h6 class="m-0 font-weight-bold text-primary">Venta</h6>

                                              <h6 class="m-0 font-weight-bold text-primary">001</h6>
                                              <h6 class="m-0 font-weight-bold text-primary" align="right">Fecha en que se realizo: <i class="fas fa-calendar"></i>15-05-2020</h6>

                                            </div>
                                            <div class="card-body">
                                              <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                  <thead>
                                                    <tr>
                                                      <th>Codigo</th>
                                                      <th>Nombre</th>
                                                      <th>Descripción</th>
                                                      <th>Cantidad</th>
                                                      <th>Precio Unit.</th>
                                                      <th>Importe</th>
                                                    </tr>
                                                  </thead>

                                                  <tbody>

                                                    <tr>

                                                    </tr>

                                                  </tbody>

                                                </table>
                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <div class="row">
                                                  <div class="form-group">
                                                  <h6 class="m-0 font-weight-bold text-primary">TOTAL.</h6>

                                                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" value="" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <h6 class="m-0 font-weight-bold text-primary">Recibio.</h6>
                                                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="">
                                                </div>
                                                <div class="form-group">
                                                    <h6 class="m-0 font-weight-bold text-primary">Devolvio.</h6>
                                                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="">
                                                </div>

                                        </div>
                                      </div>
                                     </div>
                                   </div>
                                 </div>
                               <!-- Codigo Modal Detelle fin =================================================================== -->


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
