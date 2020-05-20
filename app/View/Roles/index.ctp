<?php


$cakeDescription = __d('cake_dev', 'Gestionar Roles');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;
?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>


<section class="content-header">
      <h1>
       Gestionar Roles.
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="#">Roles</a></li>
        <li class="active">Gestionar Roles</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<?php 
					echo $this->Html->link(
						$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-plus')), 
						array('controller' => 'Roles', 'action' => 'add'), 
						array(
						'class'=>'btn btn-sm btn-success',
						'title' => 'Add user',
						'escape' => false), 
					false);
					?>
				</div>
				<div class="box-body">
					<?php echo $this->Flash->render(); ?>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th> <?php echo $paginator->sort('id', 'id');?> </th>
									<th> <?php echo $paginator->sort('nombre', 'Nombre');?> </th>
									<th> <?php echo $paginator->sort('descripcion', 'Descripcion');?> </th>
								
									<th>Accion</th>
								</tr>
							</thead>
							<tbody>
							<?php $start = $paginator->counter(array('format' => '%start%'));
							foreach ($roles as $rol) : 
							$role_id = $rol['Role']['id'];
							?>
							<tr>
								<td><?php echo $start;?></td>
								<td><?php echo $rol['Role']['id'];?></td>
								<td><?php echo $rol['Role']['nombre'];?></td>
								<td><?php echo $rol['Role']['descripcion'];?></td>
								<td>
									<?php 
									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-info-sign')), 
										array('controller' => 'Roles', 'action' => 'view/'.$role_id), 
										array(
										'class'=>'btn btn-sm btn-primary mar_right5',
										'title' => 'Ver Rol',
										'escape' => false), 
									false);

									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')), 
										array('controller' => 'Roles', 'action' => 'edit/'.$role_id), 
										array(
										'class'=>'btn btn-sm btn-success mar_right5',
										'title' => 'Editar Rol',
										'escape' => false), 
									false);

									
									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove-circle')), 
										'#', 
										array(
										'class'=>'btn btn-sm btn-danger btn-confirm ',
										'title' => 'Eliminar Rol',
										'onclick' => 'deleteModal('.$role_id.')',
										'escape' => false), 
									false);
									?>
								</td>
							</tr>
							<?php $start++;
							endforeach;
							unset($rol);
							?>
							</tbody>	
						</table>

						<div class="pagination pagination-large">
							<ul class="pagination">
								<?php
									echo $this->Paginator->prev(__('Prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
									echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
									echo $this->Paginator->next(__('Next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
								?>
							</ul>
						</div>		
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>



<!-- Modal confirm -->
<div class="modal" id="ConfirmDelete" style="display: none; z-index: 1050;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body" id="confirmMessage">
				Esta seguro de eliminar esta fila?.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" id="confirmOk">Si</button>
				<button type="button" class="btn btn-sm btn-danger" id="confirmCancel">Cancelar</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	 function deleteModal(id) 
	 {
		$("#ConfirmDelete").modal('show');	
	 	$("#confirmOk").attr('data-user', id);
	 }
	 $("#confirmOk").click(function() {
	 	var userId = $("#confirmOk").attr('data-user');
	 	window.location.href= "<?php echo $this->webroot;?>Roles/delete/"+userId;
	 });
	 $("#confirmCancel").click(function() {
	 	$("#ConfirmDelete").modal('hide');
	 });
</script>
