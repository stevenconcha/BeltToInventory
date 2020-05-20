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

$cakeDescription = __d('cake_dev', 'Manage Users');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;
?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>




<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box ">
                <div class="box-body">
                    <?php echo $this->Flash->render(); ?>
               </div>
            </div>          
        </div>
    </div>
</section>


<div class="wrapper wrapper-content animated fadeInRight" style="background: none;">
<div class="panel panel-success col-xs-12" style="width: 50%; left: 20%; ">
    <div class="panel-heading" style="text-align: center; font-size: 16px;">
        Inicio de sesi&oacute;n
    </div>
    <div class="panel-body small" style="padding: 0px;">
        <div class="row">
            <div class="col-md-12" style="padding-left: 4px;">
                <div class="col-md-7 col-xs-12" style="margin-top:35px; padding-left: 10px">
                    <img src="<?php echo WEB_ROOT . "/dist/img/BeltToInventory2.png" ?>" class="img-responsive" style="width: 280px; height: 125px;margin-left: 63px;"/>
                </div>
                <div class="col-md-5">
                    <?php //echo AuthComponent::password(12345);?>
                    <?php
                    echo $this->Form->create("");
                    echo "<div class='col-md-12'>&nbsp;</div>";
                    echo "<div class='col-md-12'>&nbsp;</div>";
                    echo $this->Form->input("document", array("class" => "form-control"));
                    echo "<div class='col-md-12'>&nbsp;</div>";
                    echo $this->Form->input("pass", array("type" => "password", "class" => "form-control"));
                    echo "<br/>";
                    $options = array(
                        'label' => 'Ingresar',
                        'class' => 'btn btn-primary'
                    );
                    echo $this->Form->end($options);                    
                    ?>  
                    <br><?php echo $this->Html->link("Olvidé mi contraseña", ["action" => "recuperarPass"])?>
                </div>
				
            </div>        
    </div>
    <div class="panel-footer" style="text-align: center;">
        
    </div>
</div>
</div>
</div>
<?php
//echo AuthComponent::password("555"); 
?>