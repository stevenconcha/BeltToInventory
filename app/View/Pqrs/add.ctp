<?php

//echo "<pre>";
//print_r($_SESSION);
//die;

$cakeDescription = __d('cake_dev', 'CakePHP: Add Store');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<section class="content-header">
    <h1>
        Nueva PQRS
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Pqrs/index">PQRS</a></li>
        <li class="active">Nueva PQRS</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                <?php
                        echo $this->Form->create('Pqr', array(
                                'class' => 'form-horizontal',
                                'formnovalidate' => true
                        ));

                        
                        $options = $tipopqr;
                        echo $this->Form->input('tipo', array(
                                'required' => false,
                                'type' => 'select',							
                                'label' => false,
                                'options' => $options,
                                'class' => 'form-control',
                                'label' => array('class' => 'col-sm-2 control-label', "text" => "Tipo Pqr"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        ));
                        
                        echo $this->Form->input('telefono', array(                                 
                                'required' => false,
                                'placeholder' => 'Telefono',
                                'class' => 'form-control',
                                'label' => array('class' => 'col-sm-2 control-label',  "text" => "Telefono"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        )); 

                        echo $this->Form->input('descripcion', array(
                                'type' => "textarea",    
                                'required' => false,
                                'placeholder' => 'Descripción',
                                'class' => 'form-control',
                                'label' => array('class' => 'col-sm-2 control-label',  "text" => "Descripción"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        ));      
                        
                        echo $this->Form->input('estado', array('type' => 'hidden', "value" => "Activa"));
                        echo $this->Form->input('documento', array('type' => 'hidden', "value" => $documento));
                        echo $this->Form->input('direccion', array('type' => 'hidden', "value" => $direccion));
                        echo $this->Form->input('fecha_solicitud', array('type' => 'hidden', "value" => $fecha_solicitud));
                        echo $this->Form->input('nombre_completo', array('type' => 'hidden', "value" => $nombre_completo));

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
        window.location.href = "<?php echo $this->webroot;?>Pqrs/index";
    }
</script>


