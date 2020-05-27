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

$cakeDescription = __d('cake_dev', 'CakePHP: Edit Store');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<section class="content-header">
    <h1>
        Editar Bodega
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Stores/index">Bodegas</a></li>
        <li class="active">Editar Bodega</li>
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
                        
                        echo $this->Form->input('id', array('type' => 'hidden'));
                        
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

