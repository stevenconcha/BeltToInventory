<br><br><br><br><br><br><br>
<div class="container" style="width:600px;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 style="text-align:center;"class="panel-title">Recuperación de contraseña</h3>
        </div>
        <div class="panel-body small">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo WEB_ROOT . "/users/recuperarPass/"; ?>" method="POST">
                    <div style="width: 500px; margin:auto; margin-top:25px;" class="input-group margin">
                            
                            <input type="text" name="document" placeholder="Numero de identificación" class="form-control" required>
                        <span class="input-group-btn">
                            <button style="width: 100px;" class="btn btn-primary" type="submit">Enviar</button>
                            </form>
                        </span>
                    </div>
                    <br><br>
                </div>            
            </div>
        </div>
    </div>
</div>
<?php  
    //echo AuthComponent::password("555"); 
?>

<!--
<div style="width: 450px; margin:auto; margin-top:200px;" class="input-group margin">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button style="width: 100px;" class="btn btn-primary" type="button">Enviar</button>
                    </span>
                  </div>

-->