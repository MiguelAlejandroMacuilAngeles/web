<!DOCTYPE html>
<html lang="en">


<!-- head -->
  <?=$this->load->view('includes/head','',TRUE);?>
<!-- head -->


<body >

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
              <img src="assets2/images/icon/logoC.jpeg" align="center" width="115%">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">BIENVENIDO.</h1>
                  </div>
                  <form action="<?php echo site_url('Login/verify')?>" class="panel-body" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="contrasena" id="contrasena" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordar</label>
                      </div>
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-primary btn-user btn-block">

                </div>
                <!-- Footer -->

                <!-- End of Footer -->
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>



  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
