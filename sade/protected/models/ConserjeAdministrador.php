<?php

/**
 * This is the model class for table "conserjeadministrador".
 *
 * The followings are the available columns in table 'conserjeadministrador':
 * @property string $caRut
 * @property string $caClave
 *
 * The followings are the available model relations:
 * @property Persona $caRut0
 * @property Visitadpto[] $visitadptos
 */
class Conserjeadministrador extends CActiveRecord
{
	public $nombres;
	public $activo;
	public $email;
	public $telefono;
	public $descripcion;
	public $direccion;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conserjeadministrador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caRut, caClave', 'required'),
			array('caRut','match','pattern'=>'/^[0-9.kK-]{11,12}$/',
              'message'=>CrugeTranslator::t("El rut debe tener el formato '11.111.111-1'")),			
			array('caRut', 'length', 'max'=>12, 'min'=>11),
			array('caRut','validateRut'),
			array('caRut','unique'),
			array('caClave', 'length', 'max'=>20, 'min'=>6),
		    array('caClave','match','pattern'=>'/^[a-zA-Z0-9]{6,20}$/',
               	 'message'=>CrugeTranslator::t("Solo letras y números")),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('caRut, caClave', 'safe', 'on'=>'search'),
			array('nombres,activo,email,telefono,descripcion,direccion', 'safe', 'on'=>'search'),
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
			'ca_pe' => array(self::BELONGS_TO, 'Persona', 'caRut'),
			'visitadptos' => array(self::HAS_MANY, 'Visitadpto', 'caRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'caRut' => 'Rut',
			'caClave' => 'Clave',
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
		$criteria->with = array('ca_pe');
		$criteria->compare('caRut',$this->caRut,true);
		$criteria->compare('caClave',$this->caClave,true);
		$criteria->compare('peNombresApellidos', $this->nombres,true);
		$criteria->compare('peActivo', $this->activo,true);
		$criteria->compare('peEmail', $this->email,true);
		$criteria->compare('peTelefono', $this->telefono,true);
		$criteria->compare('peDescripcion', $this->descripcion,true);
		$criteria->compare('peDireccion', $this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conserjeadministrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

public function validateRut($attribute,$params){
		$rut = $this->caRut;
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
