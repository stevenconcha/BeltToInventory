<?php

$cakeDescription = __d('cake_dev', 'Administrar Bodegas');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;

?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<section class="content-header">
    <h1>
        Administrar Bodegas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Bodegas</a></li>
        <li class="active">Administrar Bodegas</li>
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
                            array('controller' => 'Stores', 'action' => 'add'), 
                            array(
                            'class'=>'btn btn-sm btn-success',
                            'title' => 'Nueva Bodega',
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
                                    <th> <?php echo $paginator->sort('id', 'ID');?> </th>
                                    <th> <?php echo $paginator->sort('nombre', 'Descripción');?> </th>
                                    <th> <?php echo $paginator->sort('direccion', 'Dirección');?> </th>
                                    <th> <?php echo $paginator->sort('telefono', 'Teléfono');?> </th>                                   
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $start = $paginator->counter(array('format' => '%start%'));
                                 foreach ($stores as $store) :
                                  $store_id = $store['Store']['id'];
                                ?>
                                <tr>                                    
                                    <td><?php echo $store['Store']['id']; ?></td>
                                    <td><?php echo $store['Store']['nombre']; ?></td>
                                    <td><?php echo $store['Store']['direccion']; ?></td>
                                    <td><?php echo $store['Store']['telefono']; ?></td>                                    
                                    <td>
                                        <?php 
                                        echo $this->Html->link(
                                                $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-info-sign')), 
                                                array('controller' => 'Stores', 'action' => 'view/'.$store_id), 
                                                array(
                                                'class'=>'btn btn-sm btn-primary mar_right5',
                                                'title' => 'Ver Bodega',
                                                'escape' => false), 
                                        false);

                                        echo $this->Html->link(
                                                $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')), 
                                                array('controller' => 'Stores', 'action' => 'edit/'.$store_id), 
                                                array(
                                                'class'=>'btn btn-sm btn-success mar_right5',
                                                'title' => 'Editar Bodega',
                                                'escape' => false), 
                                        false);


                                        echo $this->Html->link(
                                                $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove-circle')), 
                                                '#', 
                                                array(
                                                'class'=>'btn btn-sm btn-danger btn-confirm ',
                                                'title' => 'Eliminar Bodega',
                                                'onclick' => 'deleteModal('.$store_id.')',
                                                'escape' => false), 
                                        false);
                                        ?>
                                    </td>
                                </tr>
							<?php $start++;
							endforeach;
							unset($store);
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
                Esta seguro de eliminar la bodega?
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
        $("#confirmOk").attr('data-store', id);
    }
    $("#confirmOk").click(function () {
        var storeId = $("#confirmOk").attr('data-store');
        window.location.href = "<?php echo $this->webroot;?>Stores/delete/" + storeId;
    });
    $("#confirmCancel").click(function () {
        $("#ConfirmDelete").modal('hide');
    });
</script>