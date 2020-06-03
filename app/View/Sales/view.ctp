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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<section class="content-header">
    <h1>
     Venta del Producto: <?php echo $products['Product']['nombre_prod']; ?>:
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Sales/index">Ventas</a></li>
        <li class="active">Vista <?php echo $products['Product']['nombre_prod'];?>'s Información</li>
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
                                      <td>Producto: <?php echo $products['Product']['nombre_prod']; ?></td>
                                    </tr>

                                     
                                     <tr>
                                      <td>Producto: <?php echo $products['User']['firstname']; ?></td>
                                    </tr>
                                    <tr>
                                      <td>Fecha de la venta: <?php echo $products['Sale']['fecha_venta']; ?></td>
                                    </tr>
                                    <tr>
                                       <td>Cantidad: <?php echo $products['Sale']['cantidad']; ?></td>  
                                    </tr>
                                    <tr>
                                      <td>Total: <?php echo $products['Sale']['total']; ?></td>
                                    </tr>
                           </table>
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
    
                        ?>  <td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>

    function back()
    {
        window.location.href = "<?php echo $this->webroot;?>Sales/index";
    }
</script>
