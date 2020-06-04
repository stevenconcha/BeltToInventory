<?php

$cakeDescription = __d('cake_dev', 'Administrar Productos');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;

?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<section class="content-header">
    <h1>
        Administrar Ventas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ventas</a></li>
        <li class="active">Administrar Ventas</li>
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
						array('controller' => 'Sales', 'action' => 'add'), 
						array(
						'class'=>'btn btn-sm btn-success',
						'title' => 'Nueva Venta',
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
                                    <th> <?php echo $paginator->sort('id_prod', 'Producto');?> </th>
                                     <th> <?php echo $paginator->sort('user_id', 'Usuario');?> </th>
                                     <th> <?php echo $paginator->sort('fistsname', 'Nombre Comprador');?> </th>
                                     <th> <?php echo $paginator->sort('fecha_venta', 'Fecha Que se Realizo la venta');?> </th>
                                     <th> <?php echo $paginator->sort('cantidad', 'Cantidad');?> </th>
                                                            
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php $start = $paginator->counter(array('format' => '%start%'));
							 foreach ($products as $product) :
							  $product_id = $product['Sale']['id'];
							?>
                                <tr>            
                                    <td><?php echo $product['Product']['nombre_prod']; ?></td>   
                                    <td><?php echo $product['User']['document']; ?></td>   
                                    <td><?php echo $product['User']['firstname']; ?></td>                        
                                    <td><?php echo $product['Sale']['fecha_venta']; ?></td>
                                    <td><?php echo $product['Sale']['cantidad']; ?></td>    
                                    <td>
									<?php 
									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-info-sign')), 
										array('controller' => 'Sales', 'action' => 'view/'.$product_id), 
										array(
										'class'=>'btn btn-sm btn-primary mar_right5',
										'title' => 'Ver Producto',
										'escape' => false), 
									false);

									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')), 
										array('controller' => 'Sales', 'action' => 'edit/'.$product_id), 
										array(
										'class'=>'btn btn-sm btn-success mar_right5',
										'title' => 'Editar Producto',
										'escape' => false), 
									false);

									
									echo $this->Html->link(
										$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove-circle')), 
										'#', 
										array(
										'class'=>'btn btn-sm btn-danger btn-confirm ',
										'title' => 'Eliminar Producto',
										'onclick' => 'deleteModal('.$product_id.')',
										'escape' => false), 
									false);
									?>
                                    </td>
                                </tr>
							<?php $start++;
							endforeach;
							unset($product);
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
                Esta seguro de eliminar La Venta?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="confirmOk">Ok</button>
                <button type="button" class="btn btn-sm btn-danger" id="confirmCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function deleteModal(id)
    {
        $("#ConfirmDelete").modal('show');
        $("#confirmOk").attr('data-product', id);
    }
    $("#confirmOk").click(function () {
        var productId = $("#confirmOk").attr('data-product');
        window.location.href = "<?php echo $this->webroot;?>Sales/delete/" + productId;
    });
    $("#confirmCancel").click(function () {
        $("#ConfirmDelete").modal('hide');
    });
</script>