<?php


$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
      <h1>
        Vista <?php echo $role['Role']['nombre'];?>'s Información:
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/users/index">Roles</a></li>
        <li class="active">Vista <?php echo $role['Role']['nombre'];?>'s Información</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table table-striped">	
									<tr>
										<td>Id: <?php echo $role['Role']['nombre'];?></td>
									</tr>
									<tr>
										<td>Nombres: <?php echo $role['Role']['nombre'];?></td>
									</tr>
									<tr>
										<td>Descripción: <?php echo $role['Role']['descripcion'];?></td>
									</tr>					
								</table>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>			
