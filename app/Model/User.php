<?php 
class User extends AppModel 
{


    var $name = "User";

    var $validate = array(
        'firstname' => array(
            'firstname_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Nombres es requerido'
            ),
            'firstname_must_be_alphabet' => array(
                'rule' =>  array('custom', '/^[a-zA-Z]*$/i'),
                'message' => 'El campo Nombres debe ser alfabetico'
            ),
            'firstname_must_be_max' => array(
                'rule' =>  array('maxLength', 32),
                'message' => 'El campo Nombres debe tener una longitud maxima de 32 caracteres.'
            )
        ),
        'lastname' => array(
            'lastname_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Apellidos es requerido'
            ),
            'lastname_must_be_alphabet' => array(
                'rule' =>  array('custom', '/^[a-zA-Z]*$/i'),
                'message' => 'El campo Apellidos debe ser alfabetico '
            ),
            'lastname_must_be_max' => array(
                'rule' =>  array('maxLength', 32),
                'message' => 'El campo Apellidos debe tener una longitud maxima de 32 caracteres.'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('email'),
                'message' => 'El campo Email es requerido'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 255),
                'message' => 'El campo Apellidos debe tener una longitud maxima de 255 caracteres.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'El email ya se encuentra registrado en la plataforma.'
            )
        ),
        'dob' => array(
            'dob_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Date of birth is required'
            )
        ),
        'gender' => array(
            'gender_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Genero es requerido'
            )
        ),
        'address' => array(
            'address_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Dirección es requerido'
            )
        ),
        'country' => array(
            'country_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Pais es requerido'
            )
        ),
        'state' => array(
            'state_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Estado es requerido'
            )
        ),
        'city' => array(
            'city_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Ciudad es requerido'
            )
        ),
        'doj' => array(
            'doj_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Date of joining is required'
            )
        ),
        'salary' => array(
            'salary_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Salary is required'
            ),
            'salary_must_be_numeric' => array(
                'rule' => array('money', 'left'),
                'message' => 'Salary must be a valid monetary amount'
            ),
        ),
        'document' => array(
            'document_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Documento es requerido'
            ),
        ),
        'pass' => array(
            'pass_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'El campo Clave es requerido'
            ),
        ),
    );


 public function beforeSave($options = array()) {        
        if (isset($this->data['User']['pass']) && $this->data['User']['pass'] != "") {
            $this->data['User']['pass'] = AuthComponent::password($this->data['User']['pass']);            
        }
        return true;
}

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Usuariorole' => array(
            'className' => 'Usuariorole',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
        )
    );

}
