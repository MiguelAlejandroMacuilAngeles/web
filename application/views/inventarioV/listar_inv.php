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
<h1 class="h2 mb-2 text-gray-800" align="center">Inventario</h1>
<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
													
<a href="<?php echo site_url('CInventario/create');?>" class="btn btn-success btn-icon-split btn-sm">
<span class="icon text-white-50">
<i class="fas fa-plus"></i>
</span>
<span class="text">Agregar al inventario</span>
</a>
</div>
<!-- INICIO DE TABLA -->
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="200%" cellspacing="0">

<thead class="thead-dark">
<tr>
<th scope="col">Codigo</th>
<th scope="col">Nombre</th>
<th scope="col">Marca</th>
<th scope="col">Modelo</th>
<th scope="col">Serie</th>
<th scope="col">Descripcion</th>
<th scope="col">Estatus</th>
<th scope="col">Fecha</th>
<th scope="col">Editar</th>
<th scope="col">Eliminar</th>
</tr>
</thead>

<tbody>
<?php foreach($result as $row) {?>
<tr>
<th scope="row"><?php echo $row->codproducto; ?></th>
<td><?php echo $row->nombre; ?></td>
<td><?php echo $row->marca; ?></td>
<td><?php echo $row->modelo; ?></td>
<td><?php echo $row->num_serie; ?></td>
<td><?php echo $row->descripcion; ?></td>
<td><?php echo $row->estatus; ?></td>
<td><?php echo $row->fecharegistro; ?></td>
<td> 
<a href="<?php echo site_url('CInventario/edit');?>/<?php echo $row->codproducto;?>" class="btn btn-success btn-circle btn-sm">
<i class="fas fa-sync-alt" align="center"></i>
</a> 
</td>

<td>
<a href="<?php echo site_url('CInventario/delete');?>/<?php echo $row->codproducto;?>" align="center" class="btn btn-danger btn-circle btn-sm">
<i class="fas fa-trash"></i>
</a> 
</td>
</tr>
<?php } ?>

</tbody>														
</table>
<!-- FIN DE TABLA -->
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
