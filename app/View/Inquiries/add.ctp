<?php

//echo "<pre>";
//print_r($_SESSION);
//die;

$cakeDescription = __d('cake_dev', 'CakePHP: Llenar Encuesta');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>


<section class="content-header">
    <h1>
        Encuesta de satisfacción del producto (Fajas)
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo WEB_ROOT;?>/Inquiries/index">Encuesta</a></li>
        <li class="active">Nueva PQRS</li>
    </ol>
</section>



<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-body">
                <?php
                        echo $this->Form->create('Inquiry', array(
                                'class' => 'form-horizontal',
                                'formnovalidate' => false
                        ));

                        
                        $options = array('Menos de un mes' => 'Menos de un mes',
                                         'De 1 a 6 meses' => 'De 1 a 6 meses',
                                         'De 6 meses a 1 año' => 'De 6 meses a 1 año',
                                         'Mas de 2 años' => 'Mas de 2 años'                                    
                                    );
                        $attributes = array('required' => false,'legend' => '¿Por cuánto tiempo uso el producto (Faja)?', "style" => "margin-left:10px;margin-top:-20px;");
                        echo $this->Form->radio('p1', $options, $attributes);
                        
                        echo "<br>";
                        $options = array('Revistas' => 'Revistas',
                                         'Televisor' => 'Televisor',
                                         'Internet' => 'Internet',
                                         'Amigos/Parientes' => 'Amigos/Parientes',
                                         'Otro' => 'Otro' 
                                    );
                        $attributes = array('legend' => '¿Cómo supiste de este producto?', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p2', $options, $attributes);


                        echo "<br>";
                        $options = array('Almacenes' => 'Almacenes',
                                         'Internet' => 'Internet',
                                         'Tiendas Online' => 'Tiendas Online',                                     
                                         'Otro' => 'Otro' 
                                    );
                        $attributes = array('legend' => '¿Dónde compras usualmente este producto (Faja)?', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p3', $options, $attributes);

                        
                        echo "<br>";
                        $options = array('Totalmente Satisfecho' => 'Totalmente Satisfecho',
                                         'Muy Satisfecho' => 'Muy Satisfecho',
                                         'Satisfecho' => 'Satisfecho',                                     
                                         'Insatisfecho' => 'Insatisfecho' 
                                    );
                        $attributes = array('legend' => '¿Cuan satisfecho está con el producto?', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p4', $options, $attributes);
                        
                        echo "<br>";
                        $options = array('Excelente Calidad' => 'Excelente Calidad',
                                         'Buena Calidad' => 'Buena Calidad',
                                         'Normal' => 'Normal',                                     
                                         'Baja Calidad' => 'Baja Calidad' 
                                    );
                        $attributes = array('legend' => '¿Cómo fue la calidad del producto?', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p5', $options, $attributes);
                        
                        
                        echo "<br>";
                        $options = array('Mucho Mejor' => 'Mucho Mejor',
                                         'Mejor' => 'Mejor',
                                         'Igual' => 'Igual',                                     
                                         'Peor' => 'Peor' 
                                    );
                        $attributes = array('legend' => 'Comparado con otros productos, este producto es:', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p6', $options, $attributes);
                        
                        
                        echo "<br>";
                        $options = array('Si' => 'Si','No' => 'No');
                        $attributes = array('legend' => '¿Seguiría comprando este producto?', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p7', $options, $attributes);
                        
                        
                         echo "<br>";
                        $options = array('Si' => 'Si','No' => 'No');
                        $attributes = array('legend' => '¿Recomendaría este producto?', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p8', $options, $attributes);
                        
                        
                        echo "<br>";
                        $options = array('Costo' => 'Costo','Calidad' => 'Calidad'
                                         ,'Marca' => 'Marca','Familiaridad' => 'Familiaridad','Duración' => 'Duración');
                        $attributes = array('legend' => ' Por favor seleccione el atributo que busca cuando compras un producto como este.', "style" => "margin-left:10px;");
                        echo $this->Form->radio('p9', $options, $attributes);
                        
                        echo "<hr style='border-top: 1px solid #e5e5e5;'>";
                        echo $this->Form->input('p10', array(
                                'type' => "textarea",    
                                'required' => false,
                                'placeholder' => 'Descripción',
                                'class' => 'form-control',
                                'style' => 'display:block',
                                'label' => array('class' => 'col-sm-2 control-label',  "text" => "¿Qué fue lo que mas le gusto de este producto?"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        )); 
                        
                        echo "<hr style='border-top: 1px solid #e5e5e5;'>";
                        echo $this->Form->input('p11', array(
                                'type' => "textarea",    
                                'required' => false,
                                'placeholder' => 'Descripción',
                                'class' => 'form-control',
                                'style' => 'display:block',
                                'label' => array('class' => 'col-sm-2 control-label',  "text" => "¿Qué fue lo que menos le gusto de este producto?"),
                                'div' => array('class' => 'form-group'),
                                'between' => '<div class="col-md-3">',
                                'after' => '</div>'
                        )); 
                         echo "<br>";
                         
                        echo $this->Form->input('id_usuario', array(
                                                 'type' => 'hidden',
                                                 'value' => $user
                                                 ));

                        echo $this->Form->input('fecha', array(
                            'type' => 'hidden',
                            'value' => $fecha
                            ));

                        echo '<div class="col-sm-offset-2 col-sm-10">';
                        echo $this->Form->submit('Guardar', array(
                                'div' => false,                                                        
                                'class' => 'btn btn-sm btn-primary mar_right5'
                        ));

                        echo $this->Form->button('Cancelar', array(
                                'type'=>'button',
                                'class' => 'btn btn-sm btn-danger',
                                'div' => false,
                                'onclick' => 'cancelFrm();'
                        ));
                        echo '</div>';

                        echo $this->Form->end();
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function cancelFrm()
    {
        window.location.href = "<?php echo $this->webroot;?>Inquiries/add";
    }
</script>

