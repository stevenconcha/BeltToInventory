<?php 

    $user = $this->Session->read('usuarios');
    $roles = $this->Session->read('roles');
?>
<div class="box-body">
<?php echo $this->Flash->render(); ?>
</div>
    <div class="panel-heading" style="background: #00C0EF; padding-bottom: 0px; margin-top: -2px;">
        <h3 style="margin-top: -3px; color: white;">BIENVENIDO(A)</h3>
    </div>
    <div class="panel-body" style="background: #ffffff; padding-top: 0px;">
        <h2><?php    echo $user['User']['firstname'] . " " . $user['User']['lastname']?> </h2>
        <h4>Roles en el Sistema: </h4>
        <?php foreach ($roles as $value): ?>
            <?php if($value['nombre'] == "Administrador"):
                echo "Señor Administrador Bienvenido de nuevo <br>";
                else:
                    echo $value['descripcion'] . "<br>";
                endif;?>
        <?php endforeach; ?>
    </div> 
<div class="col-md-12">&nbsp;</div>
