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

$cakeDescription = __d('cake_dev', 'CakePHP: Add user');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
    <h1>
        Editar Producto
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Products/index">Productos</a></li>
        <li class="active">Editar Producto</li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
					<?php
						echo $this->Form->create('Product', array(
							'class' => 'form-horizontal',
							'formnovalidate' => true
						));

						echo $this->Form->input('codigo', array(
							'required' => true,                                                      
							'class' => 'form-control',
                                                        'placeholder' => 'Código',
							'label' => array('class' => 'col-sm-2 control-label',  "text" => "Código"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
						echo $this->Form->input('nombre_prod', array(
							'required' => true,
                                                        'placeholder' => 'Nombre Producto',
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label',  "text" => "Nombre Producto"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));                                               
                                                
                                                echo $this->Form->input('modelo', array(
							'required' => true,
                                                        'placeholder' => 'Modelo',
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Modelo"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
                                                
						echo $this->Form->input('talla', array(
							'required' => true,
                                                        'placeholder' => 'Talla',
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Talla"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));  
                                                
						echo $this->Form->input('stock', array(
							'required' => true,
                                                        'placeholder' => 'Cantidad del Producto',
							'class' => 'form-control datepicker',
							'id' => 'stock',
							'type' => 'text',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Cantidad"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
                                                
                                                 echo $this->Form->input('v_unitario', array(
							'required' => true,
                                                        'placeholder' => 'Precio',
							'class' => 'form-control',
							'id' => 'v_unitario',
							'type' => 'text',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Precio"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
                                                
                                                $options = $almacenes;
						echo $this->Form->input('id_almacen', array(
							'required' => true,
							'type' => 'select',							
							'label' => false,
							'options' => $options,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Almacen"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
                                                
                                                
                                                echo $this->Form->input('create_at', array(
                                                    'type' => 'hidden',
                                                    'value' => $fecha_actual
                                                    ));
                                                
                                                echo $this->Form->input('create_by', array(
                                                    'type' => 'hidden',
                                                    'value' => $create_by
                                                    ));
                                                
                                                echo $this->Form->input('iva', array(
                                                    'type' => 'hidden',
                                                    'value' => 19
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
        window.location.href = "<?php echo $this->webroot;?>Products/index";
    }
</script>