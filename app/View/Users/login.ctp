<div class="wrapper wrapper-content animated fadeInRight" style="background: none;">
<div class="panel panel-success col-xs-12" style="width: 50%; left: 48%; margin-top: 10%;">
    <div class="panel-heading" style="text-align: center; font-size: 16px;">
        Inicio de sesi&oacute;n
    </div>
    <div class="panel-body small" style="padding: 0px;">
        <div class="row">
            <div class="col-md-12" style="padding-left: 4px;">
                <div class="col-md-7 col-xs-12" style="margin-top:35px; padding-left: 10px">
                    <img src="<?php echo WEB_ROOT . "images/logo_saf.png" ?>" class="img-responsive" style="width: 280px; height: 125px"/>
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
<h5><br> <center>Para una mejor funcionalidad de la aplicación se recomienda utilizar el navegador   <br />   Google Chrome <img style="width: 6%;" src="<?php echo WEB_ROOT . "images/Chrome.png" ?>"></h5>   </center>     </div>
    </div>
    <div class="panel-footer" style="text-align: center;">
        
    </div>
</div>
</div>
</div>
<?php
//echo AuthComponent::password("555"); 
?>