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
<h1 class="h3 mb-2 text-gray-800" align="center">Agregar inventario</h1>
<br>

<!-- /.container-fluid -->

<div class="row">
<div class="col-lg-6">
<div class="card shadow">
<form method="post" action="<?php echo site_url('CInventario/new')?>">
<div class="card-header py-3">
</div>

<!-- Custom Text Color Utilities -->
<div class="form-group col-md-12">
<label>Codigo de producto</label>
<input type="text" name="CodigoProducto" class="form-control" placeholder="Debe contener letras y numeros (al menos 5 caracteres)" required>

</div>

<div class="form-group col-md-12">
<label>Estatus</label>
<select class="custom-select" id="validationDefault04" name="estatus" required>
<option selected disabled value="">Elija...</option>
<option value="En existencia">En existencia</option>
<option value="Inexistente">Inexistente</option>
</select>
</div>

<div class="form-group col-md-12">
<label>Stock</label>
<input type="text" name="stock" class="form-control" placeholder="Ej. 20" required>
</div>

<div class="form-group col-md-12">
<label>Precio</label>
<input type="text" name="Precio" class="form-control" placeholder="Ej. 100" required>
</div>

<div class="form-group col-md-6">
<label>Fecha de Ingreso</label>
<input type="date" class="form-control" name="Fecha" value="01-06-2020" data-date-format="dd-mm-yyyy" required>
</div>

<div class="form-group col-md-12">
<label>Nombre del Equipo</label>
<input type="text" name="NombreEquipo" class="form-control" placeholder="Nombre" required>
</div>

</div>
</div>

<div class="col-lg-6">
<div class="card shadow">
<div class="card-header py-3">
</div>

<div class="form-group col-md-12">
<label>Marca</label>
<input type="text" name="Marca" class="form-control" placeholder="Ej. Mazda" required>
</div>

<div class="form-group col-md-12">
<label>Modelo</label>
<input type="text" name="Modelo" class="form-control" placeholder="Ej. h4250" required>
</div>

<div class="form-group col-md-12">
<label>Numero de serie</label>
<input type="text" name="NumSerie" class="form-control" placeholder="Ej. 1234567889" required>
</div>

<div class="form-group col-md-12">
<label>Descripcion</label>
<textarea name="Descripcion" class="form-control" placeholder="Es un carro rojo" required></textarea>
</div>

<div class="form-group col-md-12">
<label>Categoria</label>
<input type="text" name="Categoria" class="form-control" placeholder="Ej. Volante" required>
</div>

</div>

<div class="my-2"></div>
<div class="form-group">

<button type="submit" class="btn btn-primary" value="save">Guardar</button>
<a href="<?php echo site_url('CInventario')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>

</div>
</div>
</form>

</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->

<!-- Bootstrap core JavaScript-->
<?=$this->load->view('includes/base_js','',TRUE);?>

</body>
</html>
