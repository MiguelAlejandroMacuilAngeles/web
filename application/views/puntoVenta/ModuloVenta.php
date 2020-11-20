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

                      <div class="card mb-4 py-3 border-bottom-success">
                        <div class="card-body">
                          <!-- Page Heading -->
                          <h1 class="h3 mb-2 text-gray-800">Modulo de venta</h1>
                          <p class="mb-4">Selecciona los productos a vender para generar la venta.</a></p>

<div class="table-responsive">
                                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                         <thead>
                                           <tr>
                                             <th>
                                                <a href="#" class="text-muted sort" data-sort="orders-codigo">
                                                  Código
                                                </a>
                                             </th>
                                             <th>
                                                <a href="#" class="text-muted sort" data-sort="orders-nombre">
                                                  Nombre
                                                </a>
                                             </th>
                                             <th>
                                                <a href="#" class="text-muted sort" data-sort="orders-descripcion">
                                                  Descripción
                                                </a>
                                             </th>
                                             <th>
                                                <a href="#" class="text-muted sort" data-sort="orders-categoria">
                                                  Categoría
                                                </a>
                                             </th>
                                             <th>
                                                <a href="#" class="text-muted sort" data-sort="orders-precio">
                                                  Precio Unit.
                                                </a>
                                             </th>
                                             <th>
                                                <a href="#" class="text-muted sort" data-sort="orders-stock">
                                                  Stock
                                                </a>
                                             </th>
                                           </tr>
                                         </thead>
                                              <tbody class="list">

                                        <!--<?php foreach ($productos as $key => $campo) { ?>-->
                                           <tr>
                                             <td class="orders-codigo CodProducto">
                                                <?=$campo->CodProducto?>
                                             </td>
                                             <td class="orders-nombre Nombre">
                                                <?=$campo->Nombre?>
                                             </td>
                                             <td class="orders-descripcion Descripcion">
                                                <?=$campo->Descripcion?>
                                             </td>
                                             <td class="orders-categoria Categoria">
                                                <?=$campo->Categoria?>
                                             </td>
                                             <td class="orders-precio Precio">
                                                <?=$campo->Precio?>
                                             </td>
                                             <td class="orders-stock Stock">
                                                <?=$campo->Stock?>
                                             </td>
                                             <!----<?php } ?>---->
                              </tbody>
                                       </table>
                                     </div>

                            <!-- Codigo Modal Devoluciones fin =================================================================== -->


                        </div>
                      </div>


                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Ventas</h6>
                          <h6 class="m-0 font-weight-bold text-primary" align="right"><i class="fas fa-calendar"><?php echo date(" d-m-Y");?></i></h6>
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
                             <tbody class="list">

                                        <!--<?php foreach ($ventas as $key => $campo) { ?>-->
                                           <tr>
                                             <td class="orders-codigo CodProducto">
                                                <?=$campo->CodVenta?>
                                             </td>
                                             <td class="orders-nombre Nombre">
                                                <?=$campo->Nombre?>
                                             </td>
                                             <td class="orders-descripcion Descripcion">
                                                <?=$campo->Descripcion?>
                                             </td>
                                             <td class="orders-categoria Categoria">
                                                <?=$campo->Cantidad?>
                                             </td>
                                             <td class="orders-precio Precio">
                                                <?=$campo->Precio?>
                                             </td>
                                             <td class="orders-stock Stock">
                                                <?=$campo->Importe?>
                                             </td>
                                             <!----<?php } ?>---->
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>



                      <div class="card mb-4 py-3 border-bottom-info">
                        <div class="card-body">
                          <!-- ################################################## -->
                          <div class="row">

                            <div class="col-lg-7">
                              <div class="p-5">
								<h2>Informacion de venta</h2>
								  <br>
								  
                                <?= form_open('PuntoVenta/ingresa_ventas')?>
                                  <div class="form-group">
                                    <h6 class="m-0 font-weight-bold text-primary">Codigo.</h6>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese codigo de producto" name="idproducto">
                                  </div>
                                  <div class="form-group">
                                      <h6 class="m-0 font-weight-bold text-primary">Cantidad.</h6>
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="" name="cantidad">
                                  </div>
									 <p align="right">
										 <input type="submit"  name="comprar" class="btn btn-warning" value="comprar">
									  </p>
                                <?= form_close()?>
                              </div>
                            </div>
                          </div>
                         
                          <!-- ################################################## -->
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
