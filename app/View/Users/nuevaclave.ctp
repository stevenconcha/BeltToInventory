<div class="panel panel-success col-xs-12" style="width: 50%; left: 25%; top: 20%;">
    <div class="panel-heading" style="text-align: center; font-size: 16px;">
        Ingrease su nueva clave de ingreso
    </div>
    <?php echo $this->Form->create("User"); ?>
    <div class="panel-body small">
        <div class="row">
            <div class="col-md-12">                                                
                <div class="col-md-12">
                    <?php echo $this->Form->input("pass", ["class" => "form-control", "type" => "password"]); ?>
                </div>
                <div class="col-md-12">
                    <?php echo $this->Form->input("confirmacion", ["class" => "form-control", "type" => "password"]); ?>
                    <?php echo $this->Form->input("codigo", ['type' => 'hidden', 'value' => $codigo]); ?>
                </div>                
                <div class="col-md-12">
                    <br>
                    <?php
                    $options = array(
                        'label' => 'Reestablecer',
                        'class' => 'btn btn-primary'
                    );
                    echo $this->Form->end($options);
                    ?>
                </div>
            </div>
        </div>
    </div>    
</div>