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
        Editar Venta
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Sales/index">Ventas</a></li>
        <li class="active">Editar Venta</li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
					<?php
						echo $this->Form->create('Sale', array(
							'class' => 'form-horizontal',
							'formnovalidate' => true
						));

							$options = $almacenes;
						echo $this->Form->input('id_prod', array(
							'required' => false,
							'type' => 'select',							
							'label' => false,
							'options' => $options,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Producto"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
                                   


                         $optionsusers = $users;
						echo $this->Form->input('user_id', array(
							'required' => false,
							'type' => 'select',							
							'label' => false,
							'options' => $optionsusers,
							'class' => 'form-control',
							'label' => array('class' => 'col-sm-2 control-label', "text" => "Usuario"),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));     

						echo $this->Form->input('cantidad', array( 
							'required' => false,
							'class' => 'form-control',
							'type' => 'text',
							'label' => array('text'=> 'Cantidad','class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));


						echo $this->Form->input('total', array( 
							'required' => false,
							'class' => 'form-control',
							'type' => 'text',
							'label' => array('text'=> 'Total','class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
             
                                                
                         echo $this->Form->input('fecha_venta', array(
                                  'type' => 'hidden',
                                   'value' => $fecha_actual
                            ));

					
						echo $this->Form->input('id', array('type' => 'hidden'));


						echo '<div class="col-sm-offset-2 col-sm-10">';
						echo $this->Form->submit('Editar', array(
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
        window.location.href = "<?php echo $this->webroot;?>Sales/index";
    }
</script>