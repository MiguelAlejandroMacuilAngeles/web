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
                      <h1 class="h3 mb-2 text-gray-800">Lista de garantias</h1>

                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">



                            </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Venta</th>
                                  <th>Fecha de expedicion</th>
                                  <th>Costo</th>
                                  <th> </th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>Venta</th>
                                  <th>Fecha de expedicion</th>
                                  <th>Costo</th>
                                  <th> </th>
                                </tr>
                              </tfoot>
                              <?php foreach ($garantias as $key => $gar) { ?>
                              <tbody>
                                <tr>
                                  <td><?=$gar->Venta?></td>
                                  <td><?=$gar->Fecha?></td>
                                  <td><?=$gar->Costo?></td>
                                  <td>
                                    <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#Garantias">
                                      <span class="icon text-white-50">
                                        <i class="fas fa-eye"></i>
                                      </span>
                                    <span class="text">Visualizar</span>


                                    <!-- Codigo Modal Devoluciones  =================================================================== -->
                            <?=$this->load->view('garantias/Base_jsmodal','',TRUE);?>
                            <button id="modalBox" type="button" style="display: none;" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">MODAL - LARGE SIZE</button>
                            <div class="modal fade" id="Garantias" tabindex="-1" role="dialog">
                               <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <p align="right">

                                     </p>
                                    </div>
                                    <!-- Page Heading -->
                                      <h1 class="h3 mb-2 text-gray-800">G A R A N T I A</h1>
                                 <div class="modal-body">


                  <div class="container-fluid">
                    <div class="row justify-content-center">
                      <div class="col-12">

                        <!-- ========== CONTENIDO ========== -->



                            <!-- MAIN CONTENT
                            ================================================== -->
                            <div class="main-content">




                                        <!-- Menu -->
                                        <div class="dropdown-menu dropdown-menu-card">
                                          <div class="card-body">

                                            <!-- List group -->
                                            <div class="list-group list-group-flush list my-n3">
                                              <a href="team-overview.html" class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                  <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar">
                                                      <img src="./assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                                    </div>

                                                  </div>
                                                </div> <!-- / .row -->
                                              </a>
                                              <a href="team-overview.html" class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                  <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar">
                                                      <img src="./assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                                    </div>

                                                  </div>

                                                </div> <!-- / .row -->
                                              </a>
                                              <a href="project-overview.html" class="list-group-item px-0">

                                                <div class="row align-items-center">
                                                  <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-4by3">
                                                      <img src="./assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                                    </div>
                                                  </div>
                                                </div> <!-- / .row -->

                                              </a>
                                              <a href="project-overview.html" class="list-group-item px-0">

                                                <div class="row align-items-center">
                                                  <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-4by3">
                                                      <img src="./assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                                    </div>

                                                  </div>
                                                </div> <!-- / .row -->

                                              </a>
                                              <a href="project-overview.html" class="list-group-item px-0">

                                                <div class="row align-items-center">
                                                  <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-4by3">
                                                      <img src="./assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                                    </div>
                                                  </div>
                                                </div> <!-- / .row -->

                                              </a>
                                              <a href="profile-posts.html" class="list-group-item px-0">

                                                <div class="row align-items-center">

                                                </div> <!-- / .row -->

                                              </a>
                                              <a href="profile-posts.html" class="list-group-item px-0">

                                                <div class="row align-items-center">

                                                </div> <!-- / .row -->

                                              </a>
                                            </div>

                                          </div>
                                        </div> <!-- / .dropdown-menu -->

                                      </div>
                                    </form>



                              <div class="container-fluid">
                                <div class="row justify-content-center">
                                  <div class="col-12 col-lg-10 col-xl-8">

                                    <!-- Header -->
                                    <div class="header mt-md-5">
                                      <div class="header-body">
                                        <div class="row align-items-center">
                                          <div class="col">



                                            <!-- Title -->
                                            <h1 class="header-title">
                                              Expedicion De Garantia  <!-- <?php echo $garantias->Venta; ?> -->
                                            </h1>

                                          </div>
                                          <div class="col-auto">



                                          </div>
                                        </div> <!-- / .row -->
                                      </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card card-body p-5">
                                      <div class="row">
                                        <div class="col text-right">

                                          <!-- Badge -->
                                          <div class="badge badge-danger">

                                            <script type="text/javascript">
                                                var myDate = new Date();
                                                var myDay = myDate.getDay();
                                                var weekday = ['Sunday', 'Monday', 'Tuesday','Wednesday', 'Thursday', 'Friday', 'Saturday'];
                                                document.write(weekday[myDay]);
                                                var hours = myDate.getHours();
                                                var ampm = hours >= 12 ? 'P. M.' : 'A. M.';
                                                hours = hours % 12;
                                                hours = hours ? hours : 12;
                                                var minutes = myDate.getMinutes();
                                                minutes = minutes < 10 ? '0' + minutes : minutes;
                                                var myTime = hours + " : " + minutes + " " + ampm ;
                                                document.write(" " + myTime);
                                            </script>

                                          </div>


                                        </div>
                                      </div> <!-- / .row -->
                                      <div class="row">
                                        <div class="col text-center">

                                          <!-- Logo -->
                                          <img src="http://[::1]/finaljavi/assets/img/mecatec2.png" alt="..." class="img-fluid mb-4" style="max-width: 2.5rem;">

                                          <!-- Title -->
                                          <h2 class="mb-2">
                                            Detalles
                                          </h2>

                                          <!-- Text -->
                                          <p align="justify" >
                                            <!--Registro w2#<?php echo $garantias->id_venta; ?>-->
                            Compromiso con la calidad
                            Nuestros técnicos y asesores están comprometidos con la calidad en el servicio, nuestros procesos pasan por listas de chequeo preestablecidos con la finalidad de evitar los errores de mano de obra.

                            No estamos exentos a que un componente instalado falle sin embargo si esto sucede nosotros y nuestra cadena de proveedores estamos para darte soporte sobre los componentes instalados y la mano de obra.

                            Garantía por tipo de servicio
                            Nuestra póliza de garantía cubre desde:

                            reparaciones mecánicas
                            eléctricas
                            suspensión y dirección
                            reparaciones generales de motor o transmisión
                            y mas.
                            Reparaciones de componentes mecánicos y servicios preventivos
                            Las reparaciones de componentes mecánicos, afinaciones y frenos estás cubiertas por nuestra póliza de garantía por 30 días o 2,000 kilómetros lo que suceda primero.

                            Reparaciones de sistema eléctrico
                            Cuantas veces has escuchado que “en piezas eléctricas no hay garantía”, en Automotriz MAVER el sistema eléctrico también esta cubierto.

                            Las refacciones instaladas tanto la mano de obra de alguna reparación de sistema eléctrico esta cubierta por 30 días o 2,000 kilómetros.
                                          </p>

                                        </div>
                                      </div> <!-- / .row -->
                                      <div class="row">
                                        <div class="col-12 col-md-6">



                                          <p class="text-muted mb-4">

                                          <!-- Title -->
                                          <h6 class="text-uppercase">
                                            Mecatec&reg;
                                          </h6>



                                        </div>
                                      </div> <!-- / .row -->
                                    </div>

                                  </div>
                                </div> <!-- / .row -->
                              </div>

                            </div> <!-- / .main-content -->






                                 </div>


                                 <div class="modal-footer">
                                 </div>
                                </div>
                              </div>
                            </div>


                            <!-- Codigo Modal Devoluciones fin =================================================================== -->




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
                  <!-- End of Main Content -->
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
