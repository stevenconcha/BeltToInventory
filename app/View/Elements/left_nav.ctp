<?php

App::import("Helper", "Menu"); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo WEB_ROOT;?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo WEB_ROOT;?>/users/add"><i class="fa fa-circle-o"></i> Agregar Usuarios</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>/users/index"><i class="fa fa-circle-o"></i> Gestionar Usuarios</a></li> 
                    <li><a href="<?php echo WEB_ROOT;?>/roles/index"><i class="fa fa-circle-o"></i> Gestionar Roles</a></li>

                </ul>
            </li>
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
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>