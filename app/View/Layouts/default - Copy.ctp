<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('dashboard');
		echo $this->Html->css('app');
		echo $this->Html->css('jquery-ui');
		echo $this->Html->css('font-awesome.min');
		echo $this->fetch('script');
		echo $this->Html->script('jquery-1.12.4.min');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('bootstrap.min');		
	?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="row">
			<div class="col-xs-6 col-sm-2 col-md-2">
				<!-- Sidebar menu -->
				<ul class="sidebar-menu">
					<!-- Open menu item -->
					<li class="sidebar-menu-item open">
						<a href="#" class="sidebar-menu-button">Users</a>

						<!-- Submenu -->
						<ul class="sidebar-submenu">
							<li class="sidebar-menu-item active">
										<?php 
										echo $this->Html->link(
											'Add User', array('controller' => 'Users', 'action' => 'add')
										);
										?>
							</li>
							<li class="sidebar-menu-item">
								<a href="#" class="sidebar-menu-button">Manage Users</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		</div>	
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
