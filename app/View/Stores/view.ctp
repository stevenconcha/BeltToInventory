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

$cakeDescription = __d('cake_dev', 'Detalle Bodega');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<section class="content-header">
    <h1>
        Bodega - <?php echo $store['Store']['nombre']; ?>:
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Stores/index">Users</a></li>
        <li class="active">View <?php echo $store['Store']['nombre'];?>'s Information</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-striped">	
                                    <tr>
                                        <td>ID:  <b><?php echo $store['Store']['id']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Descripción: <b><?php echo $store['Store']['nombre'] ;?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Dirección: <b><?php echo $store['Store']['direccion'] ;?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Teléfono: <b><?php echo $store['Store']['telefono'] ;?></b></td>
                                    </tr>                                    																	</table>
                            </div>		
                        </div>
                        <?php
                            echo $this->Form->button('Regresar', array(
                                                'type'=>'button',
                                                'class' => 'btn btn-sm btn-primary mar_right5',
                                                'style' => 'margin-left: 16px;margi' ,
                                                'div' => false,
                                                'onclick' => 'back();'
                                        ));
    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function back()
    {
        window.location.href = "<?php echo $this->webroot;?>Stores/index";
    }
</script>


