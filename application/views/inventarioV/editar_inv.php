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

<form method="post" action="<?php echo site_url('CInventario/update')?>/<?php echo $row->CodProducto; ?>">	
<!-- Page Heading -->

<div class="form-row">
<div class="col">
<h1 class="h3 mb-2 text-gray-800" align="left">Editar inventario</h1>
</div>

<div class="col">
<h1 class="h3 mb-2 text-gray-800" align="right">Codigo: <?php echo $row->CodProducto; ?></h1>  
</div>
</div>

<br>

<!-- /.container-fluid -->

<div class="row">
<div class="col-lg-6">
<div class="card shadow">
<div class="card-header py-3">
</div>

<!-- Custom Text Color Utilities -->
<div class="form-group col-md-12">
<label>Estatus</label>
<select name="estatus" class="form-control m-b">
<option selected="<?php echo $row->Estatus; ?>">  </option>
<option>En existencia</option>
<option>Inexistente</option>
</select>

</div>

<div class="form-group col-md-4">
<label>Stock</label>
<input type="text" class="form-control" name="stock" placeholder="" value="<?php echo $row->Stock; ?>">

<label>Codigo</label>
<input type="text" class="form-control" name="CodProducto" placeholder="" value="<?php echo $row->CodProducto; ?>">
</div>

<div class="form-group col-md-4">
<label>Precio</label>
<input type="text" class="form-control" name="Precio" placeholder="" value="<?php echo $row->Precio; ?>">
</div>

<div class="form-group col-md-6">
<label>Fecha de ingreso</label>
<input type="date" class="form-control" name="Fecha" data-date-format="dd-mm-yyyy" value="<?php echo $row->FechaRegistro; ?>">
</div>

<div class="form-group col-md-12">
<label>Nombre del equipo</label>
<input type="text" name="NombreEquipo" class="form-control" placeholder="" value="<?php echo $row->Nombre; ?>">
</div>

</div>
</div>

<div class="col-lg-6">
<!-- Background Gradient Utilities -->
<div class="card shadow">
<div class="card-header py-3">
</div>

<div class="form-group col-md-12">
<label>Marca</label>
<input type="text" name="Marca" class="form-control" placeholder="" value="<?php echo $row->Marca; ?>">
</div>

<div class="form-group col-md-12">
<label>Modelo</label>
<input type="text" name="Modelo" class="form-control" placeholder="" value="<?php echo $row->Modelo; ?>">
</div>

<div class="form-group col-md-12">
<label>Numero de serie</label>
<input type="text" name="NumSerie" class="form-control" placeholder="" value="<?php echo $row->Num_Serie; ?>">
</div>

<div class="form-group col-md-12">
<label>Descripcion</label>
<input type="text" name="Descripcion" class="form-control" placeholder="" value="<?php echo $row->Descripcion; ?>">
</div>

<div class="form-group col-md-12">
<label>Categoria</label>
<input type="text" name="Categoria" class="form-control" placeholder="" value="<?php echo $row->Categoria; ?>">
</div>
</div>

<div class="my-2"></div>
<div class="form-group">


<button type="submit" class="btn btn-primary" value="save">Enviar</button>
<a href="<?php echo site_url('CInventario')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>

</div>
</div>
</div>
</form> 
 
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->

<!-- End of Content Wrapper -->
<!-- Bootstrap core JavaScript-->
<?=$this->load->view('includes/base_js','',TRUE);?>
</body>

</html>
