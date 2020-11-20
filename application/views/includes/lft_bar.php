  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <div class="sidebar-heading">
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('inicio')?>">
            <img src="<?=base_url('assets/img/mecatec2.png')?>" width="90" height="80" >
          </a>
        </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('inicio')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Heading -->
      <div class="sidebar-heading">
        Modulos
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-shopping-basket"></i>
          <span>Punto de Venta</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opción</h6>
            <a class="collapse-item" href="<?=base_url('PuntoVenta')?>">Vender</a>
            <a class="collapse-item" href="<?=base_url('PuntoVenta/Corte')?>">Corte de Caja</a>
          </div>
        </div>
      </li>

      <!-- Modulo Ordenes de Servicio ----->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrdenes" aria-expanded="true" aria-controls="collapseOrdenes">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Ordenes de Servicio</span>
        </a>
        <div id="collapseOrdenes" class="collapse" aria-labelledby="headingOrdenes" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ordenes de Servicio</h6>
            <a class="collapse-item" href="<?=base_url('OrdenSer/index')?>">Listar Ordenes de Servicio</a>
            <a class="collapse-item" href="<?=base_url('OrdenSer/nueva_orden')?>">Nueva Orden de Servicio</a>
          </div>
        </div>
      </li>
      <!-- Modulo Ordenes de Servicio ----->
      <!-- Modulo Gestión de usuarios ----->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUsuarios">
          <i class="fas fa-fw fa-users"></i>
          <span>Gestión de usuarios</span>
        </a>
        <div id="collapseUsuarios" class="collapse" aria-labelledby="headingUsuarios" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="<?=base_url('Usuarios/index')?>">Listado de usuarios</a>
          </div>
        </div>
      </li>
      <!-- Modulo Gestión de usuarios ----->
	  <!-- Modulo Inventario ----->
	  <li class="nav-item">
		  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventario" aria-expanded="true" aria-controls="collapseInventario">
			  <i class="fas fa-fw fa-clipboard-list"></i>
			  <span>Inventario</span>
		  </a>
		  <div id="collapseInventario" class="collapse" aria-labelledby="headingInventario" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				  <h6 class="collapse-header">Inventario</h6>
				  <a class="collapse-item" href="<?=base_url('CInventario/index')?>">Listar Inventario</a>
				  <a class="collapse-item" href="<?=base_url('CInventario/nuevo_producto')?>">Agregar Inventario</a>
			  </div>
		  </div>
	  </li>
	  <!-- Modulo inventario ----->

      <!-- Modulo Ordenes de Compra ----->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrdenesC" aria-expanded="true" aria-controls="collapseOrdenesC">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Ordenes de Compra </span>
        </a>
        <div id="collapseOrdenesC" class="collapse" aria-labelledby="headingOrdenes" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ordenes de Compra</h6>
            <a class="collapse-item" href="<?=base_url('OrdenCompra/index')?>">Listar Ordenes de Compra</a>
            <a class="collapse-item" href="<?=base_url('OrdenCompra/agregar_orden')?>">Nueva Orden de Compra</a>
          </div>
        </div>
      </li>
      <!-- Modulo Ordenes de Compra ----->

      <!-- /Modulo Garantias ----->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGarantias" aria-expanded="true" aria-controls="collapseGarantias">
        <i class="fas fa-shield-alt"></i>
          <span>Garantias</span>
        </a>
        <div id="collapseGarantias" class="collapse" aria-labelledby="headingOrdenes" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Garantias</h6>
            <a class="collapse-item" href="<?=base_url('Garantias/index')?>">Listar Garantias</a>
          </div>
        </div>
      </li>
      <!-- Modulo Garantias/ ----->
      <!-- Modulo de compras ----->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompras" aria-expanded="true" aria-controls="collapseCompras">
          <i class="fas fa-shopping-bag"></i>
          <span>Compras</span>
        </a>
        <div id="collapseCompras" class="collapse" aria-labelledby="headingCompras" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="<?=base_url('Compras/index')?>">Listado de compras</a>
            <a class="collapse-item" href="<?=base_url('Proveedor/index')?>">Proveedores</a>
          </div>
        </div>
      </li>
      <!-- Modulo de compras ----->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
