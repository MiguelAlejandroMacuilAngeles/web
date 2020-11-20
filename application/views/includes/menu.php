<!DOCTYPE html>
<html>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="<?php echo base_url();?>assets2/images/icon/logo2.jpeg"  />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="<?=base_url('inicio')?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>Inicio</a>
                </li>
                <li>
                    <a href="<?=base_url('PuntoVenta')?>">
                        <i class="fas fa-fw fa-shopping-basket"></i>Venta</a>
                </li>
                <li>
                    <a href="<?=base_url('PuntoVenta/Corte')?>">
                        <i class="far fa-check-square"></i>Corte de Caja</a>
                </li>
                <li>
                    <a href="<?=base_url('CInventario')?>">
                        <i class="fas fa-fw fa-clipboard-list"></i>Inventario</a>
                </li>
                <li>
                    <a href="<?=base_url('Compras')?>">
                        <i class="fas fa-shopping-bag"></i>Compras</a>
                </li>
                <li>
                    <a href="<?=base_url('Proveedor/index')?>">
                        <i class="fas fa-shopping-bag"></i>Proveedores</a>
                </li>
                <li>
                    <a href="<?=base_url('Usuarios')?>">
                        <i class="fas fa-fw fa-users"></i>Usuarios</a>
                </li>
                <li>
                    <a href="<?=base_url('OrdenSer')?>">
                        <i class="fas fa-fw fa-clipboard-list"></i>Ordenes de Servicio</a>
                </li>
                <li>
                    <a href="<?=base_url('OrdenCompra')?>">
                        <i class="fas fa-fw fa-clipboard-list"></i>Ordenes de Compra</a>
                </li>
                <li>
                    <a href="<?=base_url('Garantias')?>">
                        <i class="fas fa-shield-alt"></i>Garantías</a>
                </li
            </ul>
        </nav>
    </div>
</aside>
</html>
