<?php


$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
      <h1>
        Vista <?php echo $user['User']['firstname'];?>'s Información:
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/users/index">Usuarios</a></li>
        <li class="active">Vista <?php echo $user['User']['firstname'];?>'s Información</li>
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
										<td>Nombres: <?php echo $user['User']['firstname'];?></td>
									</tr>
									<tr>
										<td>Apellidos: <?php echo $user['User']['lastname'];?></td>
									</tr>
									<tr>
										<td>Email: <?php echo $user['User']['email'];?></td>
									</tr>
									
									<tr>
										<td>Genero: <?php echo $user['User']['gender'];?></td>
									</tr>
									<tr>
										<td>Dirección: <?php echo $user['User']['address'];?></td>
									</tr>
									<tr>
										<td>Pais: <?php echo $countries[$user['User']['country']];?></td>
									</tr>
									<tr>
										<td>Estado: <?php echo $states[$user['User']['state']];?></td>
									</tr>
									<tr>
										<td>Ciudad: <?php echo $cities[$user['User']['city']];?></td>
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
