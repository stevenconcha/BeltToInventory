<?php

$cakeDescription = __d('cake_dev', 'Resultados Encuesta');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$paginator = $this->Paginator;

?>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<section class="content-header">
    <h1>
        Resultados Encuestas -- Total Usuarios: <?php echo $data['totalElements'][0][0]['total']; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Encuestas</a></li>
        <li class="active">Resultados Encuestas</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">             

                <div class="box-body">
					<?php echo $this->Flash->render(); ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Por cuánto tiempo uso el producto (Faja)?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP1']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP1'][$i]['inquiries']['p1'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP1'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP1'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Como supiste de este prodcto?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP2']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP2'][$i]['inquiries']['p2'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP2'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP2'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Dónde compras usualmente este producto?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP3']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP3'][$i]['inquiries']['p3'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP3'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP3'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>



                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Cúan satisfecho está con el producto?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP4']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP4'][$i]['inquiries']['p4'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP4'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP4'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Cómo fue la calidad del producto?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP5']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP5'][$i]['inquiries']['p5'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP5'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP5'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Comparado con otros productos, este producto es?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP6']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP6'][$i]['inquiries']['p6'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP6'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP6'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Seguiría comprando este producto?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP7']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP7'][$i]['inquiries']['p7'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP7'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP7'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>¿Recomendaría este producto?</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP8']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP8'][$i]['inquiries']['p8'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP8'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP8'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Por favor seleccione el atributo que busca cuando compra un producto como este</th>
                                    <th style="width: 60%">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php for ($i = 0; $i < count($data['dataP9']); $i++) { ?>
                                <tr>                                      
                                    <td>
                                       <?php echo $data['dataP9'][$i]['inquiries']['p9'] ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                 aria-valuemin="0" aria-valuemax="<?php echo $data['totalElements'][0][0]['total'] ?>" style="width:<?php echo round(($data['dataP9'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?>%">
                                                <span><?php echo round(($data['dataP9'][$i][0]['total']*100) / $data['totalElements'][0][0]['total'], 1) ?> %</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php 
                                             }
                                    ?>
                            </tbody>	
                        </table>
                    </div>


                </div>
            </div>			
        </div>
    </div>
</section>
