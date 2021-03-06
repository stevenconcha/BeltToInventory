<?php
//echo "<pre>";
//print_r($_SESSION);

$cakeDescription = __d('cake_dev', 'CakePHP: Add Store');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
    <h1>
        Nueva Bodega
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Stores/index">Bodegas</a></li>
        <li class="active">Nueva Bodega</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                <?php
                        echo $this->Form->create('Store', array(
                                'class' => 'form-horizontal',
                                'formnovalidate' => true
                        ));


                        echo $this->Form->input('nombre', array(
                                'required' => false,
                                'placeholder' => 'Descripción',
                                'class' => 'form-control',
                                'label' => array('class' => 'col-sm-2 control-label',  "text" => "Descripción"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        ));                                               

                        echo $this->Form->input('direccion', array(
                                'required' => false,
                                'placeholder' => 'Dirección',
                                'class' => 'form-control',
                                'label' => array('class' => 'col-sm-2 control-label', "text" => "Dirección"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        ));

                        echo $this->Form->input('telefono', array(
                                'required' => false,
                                'placeholder' => 'Teléfono',
                                'class' => 'form-control',
                                'label' => array('class' => 'col-sm-2 control-label', "text" => "Teléfono"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        ));   
                        
                        echo '<div class="col-sm-offset-2 col-sm-10">';
                        echo $this->Form->submit('Guardar', array(
                                'div' => false,                                                        
                                'class' => 'btn btn-sm btn-primary mar_right5'
                        ));

                        echo $this->Form->button('Cancelar', array(
                                'type'=>'button',
                                'class' => 'btn btn-sm btn-danger',
                                'div' => false,
                                'onclick' => 'cancelFrm();'
                        ));
                        echo '</div>';

                        echo $this->Form->end();
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function cancelFrm()
    {
        window.location.href = "<?php echo $this->webroot;?>Stores/index";
    }
</script>