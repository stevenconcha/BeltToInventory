<?php

App::import("Helper", "Menu"); ?>
<?php 
    $user = $this->Session->read('usuarios');
    $roles = $this->Session->read('roles');
   if($roles != null){
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo WEB_ROOT;?>/dist/img/BeltToInventory2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
			  <?php  echo $user['User']['firstname'] . " " . $user['User']['lastname']?> <br />
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!--	<form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                        </button>
                                </span>
                        </div>
                </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"> Navegación Principal</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo WEB_ROOT;?>/users/add"><i class="fa fa-circle-o"></i> Agregar Usuarios</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>/users/index"><i class="fa fa-circle-o"></i> Gestionar Usuarios</a></li> 
                    <li><a href="<?php echo WEB_ROOT;?>/roles/index"><i class="fa fa-circle-o"></i> Gestionar Roles</a></li>
                </ul>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Productos</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">                   
                    <li><a href="<?php echo WEB_ROOT;?>/Products"><i class="fa fa-circle-o"></i> Gestionar Productos</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Ventas</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">                   
                    <li><a href="<?php echo WEB_ROOT;?>/Sales"><i class="fa fa-circle-o"></i> Gestionar Ventas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span>Bodegas</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">                   
                    <li><a href="<?php echo WEB_ROOT;?>/Stores"><i class="fa fa-circle-o"></i> Gestionar Bodegas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-archive"></i>
                    <span>Reclamos</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">                   
                    <li><a href="<?php echo WEB_ROOT;?>/Pqrs"><i class="fa fa-circle-o"></i> Gestionar PQRS</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
	<?php
}
	?>