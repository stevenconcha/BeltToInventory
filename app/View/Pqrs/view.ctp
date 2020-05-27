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
        Pqrs No. <?php echo $pqr['Pqr']['id']; ?>:
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Pqrs/index">Prqs</a></li>
        <li class="active">View <?php echo $pqr['Pqr']['id'];?>'s Information</li>
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
                                        <td>Tipo Pqrs:  <b><?php echo $pqr['Pqr']['tipo']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Descripción:  <br><b><?php echo $pqr['Pqr']['descripcion']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Documento:  <b><?php echo $pqr['Pqr']['documento']; ?></b></td>
                                    </tr>
                                     <tr>
                                        <td>Usuario:  <b><?php echo $pqr['Pqr']['nombre_completo']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Dirección:  <b><?php echo $pqr['Pqr']['direccion']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Teléfono:  <b><?php echo $pqr['Pqr']['telefono']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de Solicitud:  <b><?php echo $pqr['Pqr']['fecha_solicitud']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Estado:  <b><?php echo $pqr['Pqr']['estado']; ?></b></td>
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
        window.location.href = "<?php echo $this->webroot;?>Pqrs/index";
    }
</script>