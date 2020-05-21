<?php 

    $user = $this->Session->read('usuarios');
    $roles = $this->Session->read('roles');
   if($roles != null){
?>
<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo WEB_ROOT;?>" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>B</b>TI</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>BeltTo</b>Invetory</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			
			<!-- Notifications: style can be found in dropdown.less -->
		
			<!-- Tasks: style can be found in dropdown.less -->
			
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="<?php echo WEB_ROOT;?>/dist/img/BeltToInventory2.png" class="user-image" alt="User Image">
				<span class="hidden-xs"> 
				<?php foreach ($roles as $value): ?>
				            <?php $rol =  $value['descripcion'];
				               ?>
				        <?php endforeach; 
				        echo $rol;?>
				</span>
				</a>
				<ul class="dropdown-menu">
				<!-- User image -->
				<li class="user-header">
					<img src="<?php echo WEB_ROOT;?>/dist/img/BeltToInventory2.png" class="img-circle" alt="User Image">

					<p>
	              <h2><?php    echo $user['User']['firstname'] . " " . $user['User']['lastname']?> </h2>
					</p>
				</li>
				<!-- Menu Body -->
			
				<!-- Menu Footer-->
				<li class="user-footer">
				
					<div class="pull-right">
				
				<button onclick="window.location.href='<?php echo Router::url(array('controller'=>'users', 'action'=>'logout'))?>'">Cerrar sesion</button>

					</div>
				</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
			</ul>
		</div>
		</nav>
	</header>

<?php
}
?>