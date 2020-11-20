<!DOCTYPE html>
<html lang="en">


<?=$this->load->view('includes/head','',TRUE);?>
<?=$this->load->view('includes/head2','',TRUE);?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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







                                          <div class="card mb-4 py-3 border-bottom-danger">
                                           <div class="card-body">
                                          <!-- Page Heading -->
                                            <h1 class="h3 mb-2 text-gray-800">Devolución</h1>
                                            <p class="mb-4">Llena los siguientes datos</a></p>
                                          </div>
                                        </div>

                                       <div class="card mb-4 py-3 border-left-danger">
                                         <div class="card-body">
                                           <div class="row">
                                             <div class="col-lg-7">
                                                 <form method="post" class="user">
                                                 <div class="form-group row">
                                                   <div class="col-sm-6 mb-3 mb-sm-0">
                                                     <input type="text" class="form-control form-control-user" name="CodVenta" id="idventa" placeholder="ID VENTA">
                                                   </div>
                                                   <div class="col-sm-6">
                                                     <input type="text" class="form-control form-control-user" name="CodProducto" id="idproducto" placeholder="CODIGO PRODUCTO">
                                                   </div>
                                                 </div>
                                                   <div class="form-group row">
                                                     <div class="col-sm-6 mb-3 mb-sm-0">
                                                       <input type="text" class="form-control form-control-user" name="Cantidad" id="cantidad" placeholder="CANTIDAD">
                                                     </div>
                                                     <div class="col-sm-6">
                                                       <input type="text" class="form-control form-control-user" name="Autoriza" id="autoriza" placeholder="Autoriza (Nombre de tu supervisor)">
                                                     </div>
                                                   </div>
                                                   <div class="form-group">
                                                     <input type="text" class="form-control form-control-user" name="Motivo" id="motivo" placeholder="MOTIVO">
                                                   </div>
                                 <button type="submit" class="btn btn-success">Devolver</button>
                                                 </form>
                                             </div>
                                             <p align="right">
                                               <a href="#" class="btn btn-danger btn-icon-split">
                                                 <span class="icon text-white-50">
                                                   <i class="fas fa-info-circle"></i>
                                                 </span>
                                                 <span class="text">Devolver</span>
                                               </a>
                                             </p>
                                           </div>
                                         </div>
                                       </div>





                                    <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                      <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Historial de Devoluciones</h6>
                                      </div>
                                      <div class="card-body">
                                        <div class="table-responsive">
                                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                              <tr>
                                                <th>ID VENTA</th>
                                                <th>CODIGO PRODUCTO</th>
                                                <th>CANTIDAD</th>
                                                <th>AUTORIZO</th>
                                                <th>FECHA</th>
                                                <th>MOTIVO</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>00123</td>
                                                <td>SACOM8244561</td>
                                                <td>1</td>
                                                <td>Javier Saucedo</td>
                                                <td>12-07-2020</td>
                                                <td>Prod. Caducado</td>
                                              </tr>
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


    <script type="text/javascript">
  	  $('form').submit(function(e) {
  		  e.preventDefault();


  		  var CodVenta = $("input[name='CodVenta']").val();
  		  var CodProducto = $("input[name='CodProducto']").val();
  		  var Cantidad = $("input[name='Cantidad']").val();
  		  var Autoriza = $("input[name='Autoriza']").val();
  		  var Motivo = $("input[name='Motivo']").val();


  		  $.ajax({
  			  url: 'ajaxRequestPostDevolucion',
  			  type: 'POST',
  			  data: {CodVenta: CodVenta, CodProducto: CodProducto, Cantidad: Cantidad, Motivo: Motivo, Autoriza: Autoriza},
  			  error: function() {
  				  alert('Something is wrong');
  			  },
  			  success: function(data) {
  				  alert("Record added successfully");
  			  }
  		  });


  	  });


    </script>

	<!-- Bootstrap core JavaScript-->
	<?=$this->load->view('includes/base_js','',TRUE);?>

</body>

</html>
