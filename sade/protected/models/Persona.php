<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $peRut
 * @property string $peNombresApellidos
 * @property integer $peActivo
 * @property string $peEmail
 * @property string $peTelefono
 * @property string $peTipo
 * @property string $peDescripcion
 * @property string $peDireccion
 *
 * The followings are the available model relations:
 * @property Arrendatariodueno $arrendatariodueno
 * @property Conserjeadministrador $conserjeadministrador
 * @property Contratopersonal[] $contratopersonals
 * @property Sueldopersonal[] $sueldopersonals
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peRut, peNombresApellidos, peEmail, peTipo', 'required'),
			array('peRut','match','pattern'=>'/^[0-9.kK-]{11,12}$/',
              'message'=>CrugeTranslator::t("El rut debe tener el formato '11.111.111-1'")),
			array('peRut', 'length', 'max'=>12, 'min'=>11),
			array('peRut','validateRut'),
			array('peRut','unique'),
			array('peNombresApellidos', 'length', 'max'=>80),
			array('peNombresApellidos','match','pattern'=>'/^[a-zA-Z\s]{3,80}$/',
              	 'message'=>CrugeTranslator::t("El nombre/apellido no es válido")),
			array('peEmail', 'length', 'max'=>30),
			array('peEmail', 'email'),
			array('peTelefono', 'length', 'max'=>10, 'min'=>6),
			array('peTelefono','match','pattern'=>'/^[0-9]{6,10}$/',
               	'message'=>CrugeTranslator::t("El Teléfono debe contener solo números")),
			array('peDescripcion, peDireccion', 'length', 'max'=>255),
			array('peDescripcion',  'match', 'pattern'=>'/.[a-zA-Z]{2,255}/', 
                'message'=>CrugeTranslator::t("Ingrese al menos una palabra")),
			array('peDireccion',  'match', 'pattern'=>'/.[a-zA-Z]{2,255}/', 
                'message'=>CrugeTranslator::t("Ingrese al menos una palabra")),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('peRut, peNombresApellidos, peActivo, peEmail, peTelefono, peTipo, peDescripcion, peDireccion', 'safe', 'on'=>'search'),
		);
	}


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pe_ad' => array(self::HAS_ONE, 'Arrendatariodueno', 'adRut'),
			'pe_ca' => array(self::HAS_ONE, 'Conserjeadministrador', 'caRut'),
			'contratopersonals' => array(self::HAS_MANY, 'Contratopersonal', 'peRut'),
			'sueldopersonals' => array(self::HAS_MANY, 'Sueldopersonal', 'peRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'peRut' => 'Pe Rut',
			'peNombresApellidos' => 'Pe Nombres Apellidos',
			'peActivo' => 'Pe Activo',
			'peEmail' => 'Pe Email',
			'peTelefono' => 'Pe Telefono',
			'peTipo' => 'Pe Tipo',
			'peDescripcion' => 'Pe Descripcion',
			'peDireccion' => 'Pe Direccion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('peRut',$this->peRut,true);
		$criteria->compare('peNombresApellidos',$this->peNombresApellidos,true);
		$criteria->compare('peActivo',$this->peActivo);
		$criteria->compare('peEmail',$this->peEmail,true);
		$criteria->compare('peTelefono',$this->peTelefono,true);
		$criteria->compare('peTipo',$this->peTipo,true);
		$criteria->compare('peDescripcion',$this->peDescripcion,true);
		$criteria->compare('peDireccion',$this->peDireccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function formatRut($peRut){ 
     
    $parte4 = substr($peRut, -1); // seria solo el numero verificador 
    $parte3 = substr($peRut, -4,3); // la cuenta va de derecha a izq  
    $parte2 = substr($peRut, -7,3);  
    $parte1 = substr($peRut, 0,-7); //de esta manera toma todos los caracteres desde el 8 hacia la izq 

    $peRut =  $parte1.".".$parte2.".".$parte3."-".$parte4; 
    return $peRut;
}
	
	public function validateRut($attribute,$params){


		$rut = $this->peRut;
		$suma = "";
		if(strpos($rut,"-")==false){
	        $RUT[0] = substr($rut, 0, -1);
	        $RUT[1] = substr($rut, -1);
	    }else{
	        $RUT = explode("-", trim($rut));
	    }
	    $elRut = str_replace(".", "", trim($RUT[0]));
	    $factor = 2;
	    for($i = strlen($elRut)-1; $i >= 0; $i--):
	        $factor = $factor > 7 ? 2 : $factor;
	        $suma += $elRut{$i}*$factor++;
	    endfor;
	    $resto = $suma % 11;
	    $dv = 11 - $resto;
	    if($dv == 11){
	        $dv=0;
	    }else if($dv == 10){
	        $dv="k";
	    }else{
	        $dv=$dv;
	    }
	   if($dv == trim(strtolower($RUT[1]))){
	       return true;
	   }else{
	       $this->addError($attribute, 'El rut ingresado NO es válido');
	   }
	}

}
