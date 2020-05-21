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

$cakeDescription = __d('cake_dev', 'CakePHP: Agregar  Rol');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
      <h1>
     Agregar Rol
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/users/index">Roles</a></li>
        <li class="active"> Agregar Roles</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-primary">
				<div class="box-body">
					<?php
						echo $this->Form->create('Role', array(
							'class' => 'form-horizontal',
							'formnovalidate' => true
						));

						echo $this->Form->input('nombre', array(
							'required' => false,
							'class' => 'form-control',
							'label' =>  array('text'=> 'Nombre del Rol','class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
						echo $this->Form->input('descripcion', array(
							'required' => false,
							'class' => 'form-control',
							'label' => array('text'=> 'Descripción del Rol','class' => 'col-sm-2 control-label'),
							'div' => array('class' => 'form-group'),
							'between' => '<div class="col-md-3">',
							'after' => '</div>'
						));
					
						echo $this->Form->input('id', array('type' => 'hidden'));

						echo '<div class="col-sm-offset-2 col-sm-10">';
						echo $this->Form->submit('submit', array(
							'div' => false,
							'label'=> 'Aceptar',
							'class' => 'btn btn-sm btn-primary mar_right5'
						));

						echo $this->Form->button('Cancel', array(
							'type'=>'button',
							'class' => 'btn btn-sm btn-danger',
							'label'=> 'Cancelar',
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

<script type="text/javascript">
$(document).ready(function(){
	$("#dob").datepicker({
		minDate: new Date(1900,1-1,1), maxDate: '-18Y',
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
		yearRange: '-110:-18'
	});

	$("#doj").datepicker({
		dateFormat: 'yy-mm-dd',
		maxDate: 0,
		changeMonth: true,
		changeYear: true,
	});
});


function cancelFrm()
{
	window.location.href = "<?php echo $this->webroot;?>Users/index";
}
</script>