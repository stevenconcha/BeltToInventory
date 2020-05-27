<?php

$cakeDescription = __d('cake_dev', 'Administrar PQRS');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;

//echo "<pre>";
//print_r( $_SESSION["usuarios"]['User']);die;

?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<section class="content-header">
    <h1>
        <?php echo ($rol=="Comprador") ? "Mis" : "Administrar" ;?>  PQRS
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">PQRS</a></li>
        <li class="active"><?php echo ($rol=="Comprador") ? "Mis" : "Administrar" ;?> PQRS</li>
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
                            array('controller' => 'Pqrs', 'action' => 'add'), 
                            array(
                            'class'=>'btn btn-sm btn-success',
                            'title' => 'Nueva Pqr',
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
                                    <th> <?php echo $paginator->sort('descripcion', 'Descripción');?> </th>
                                    <th> <?php echo $paginator->sort('nombre_completo', 'Usuario');?> </th>
                                    <th> <?php echo $paginator->sort('telefono', 'Teléfono');?> </th>   
                                    <th> <?php echo $paginator->sort('fecha_solicitud', 'Fecha Solicitud');?> </th>   
                                    <th> <?php echo $paginator->sort('estado', 'Estado');?> </th>  
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $start = $paginator->counter(array('format' => '%start%'));
                                 foreach ($pqrs as $pqr) :
                                  $pqr_id = $pqr['Pqr']['id'];
                                ?>
                                <tr>                                    
                                    <td><?php echo $pqr['Pqr']['id']; ?></td>
                                    <td><?php echo substr($pqr['Pqr']['descripcion'],0, 50).".."; ?></td>
                                    <td><?php echo $pqr['Pqr']['nombre_completo']; ?></td>
                                    <td><?php echo $pqr['Pqr']['telefono']; ?></td>   
                                    <td><?php echo $pqr['Pqr']['fecha_solicitud']; ?></td>  
                                    <td><?php echo $pqr['Pqr']['estado']; ?></td>  
                                    <td>
                                        <?php 
                                        
                                        echo $this->Html->link(
                                                $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-info-sign')), 
                                                array('controller' => 'Pqrs', 'action' => 'view/'.$pqr_id), 
                                                array(
                                                'class'=>'btn btn-sm btn-primary mar_right5',
                                                'title' => 'Ver Pqr',
                                                'escape' => false), 
                                        false);

                                        if($rol != "Comprador"){
                                            echo $this->Html->link(
                                                    $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')), 
                                                    array('controller' => 'Pqrs', 'action' => 'edit/'.$pqr_id), 
                                                    array(
                                                    'class'=>'btn btn-sm btn-success mar_right5',
                                                    'title' => 'Gestionar Pqr',
                                                    'escape' => false), 
                                            false);


                                            echo $this->Html->link(
                                                    $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove-circle')), 
                                                    '#', 
                                                    array(
                                                    'class'=>'btn btn-sm btn-danger btn-confirm ',
                                                    'title' => 'Eliminar Pqr',
                                                    'onclick' => 'deleteModal('.$pqr_id.')',
                                                    'escape' => false), 
                                            false);                                        
                                        }
                                        ?>
                                    </td>
                                </tr>
							<?php $start++;
							endforeach;
							unset($pqr);
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
                Esta seguro de eliminar la Pqr?
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
        $("#confirmOk").attr('data-pqr', id);
    }
    $("#confirmOk").click(function () {
        var prqId = $("#confirmOk").attr('data-pqr');
        window.location.href = "<?php echo $this->webroot;?>Pqrs/delete/" + prqId;
    });
    $("#confirmCancel").click(function () {
        $("#ConfirmDelete").modal('hide');
    });
</script>