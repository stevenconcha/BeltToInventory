<?php

$cakeDescription = __d('cake_dev', 'Agradecimiento');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;

?>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<section class="content-header">
    <h1>
        Agradecimientos..!
    </h1>    
</section>

<section class="content">
    <div class="row">
        <div class="col-sm-12">

            <div class="alert alert-success" role="alert" style="font-size: 30px;color: #155724!important;background-color: #d4edda!important;
                 border-color: #c3e6cb!important;">
               <?php echo $thanks; ?>  
            </div>


            			
        </div>
    </div>
</section>
