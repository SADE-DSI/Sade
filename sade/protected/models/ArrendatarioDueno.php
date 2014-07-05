<?php

/**
 * This is the model class for table "arrendatariodueno".
 *
 * The followings are the available columns in table 'arrendatariodueno':
 * @property string $adRut
 * @property string $adClave
 * @property integer $adEstado
 * @property string $adFechaLiberacion
 *
 * The followings are the available model relations:
 * @property Persona $adRut0
 * @property Reservaespaciocomun[] $reservaespaciocomuns
 * @property Residedpto[] $residedptos
 */
class Arrendatariodueno extends CActiveRecord
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
		return 'arrendatariodueno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adRut, adClave','required'),
			array('adRut','match','pattern'=>'/^[0-9.kK-]{11,12}$/',
              'message'=>CrugeTranslator::t("El rut debe tener el formato '11.111.111-1'")),			
			array('adRut', 'length', 'max'=>12, 'min'=>11),
			array('adRut','validateRut'),
			array('adRut', 'unique'),
			array('adClave', 'length', 'max'=>30),
			array('adClave', 'length', 'min'=>6),
		    array('adClave','match','pattern'=>'/^[a-zA-Z0-9]{6,30}$/',
               	 'message'=>CrugeTranslator::t("Solo letras y números")),
			array('adFechaLiberacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('adRut, adClave, adEstado, adFechaLiberacion', 'safe', 'on'=>'search'),
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
			'ad_pe' => array(self::BELONGS_TO, 'Persona', 'adRut'),
			'reservaespaciocomuns' => array(self::HAS_MANY, 'Reservaespaciocomun', 'adRut'),
			'ad_rd' => array(self::HAS_MANY, 'Residedpto', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'adRut' => 'Rut',
			'adClave' => 'Clave',
			'adEstado' => 'Estado',
			'adFechaLiberacion' => 'Fecha Liberación',
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
	public function search($activo)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->with = array('ad_pe');
		$criteria->condition = "peActivo=$activo";
		$criteria->condition = "adEstado=$activo";
		$criteria->compare('adRut',$this->adRut,true);
		$criteria->compare('adClave',$this->adClave,true);
		$criteria->compare('adEstado',$this->adEstado);
		$criteria->compare('adFechaLiberacion',$this->adFechaLiberacion,true);
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
	 * @return Arrendatariodueno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getDatos ($adRut, $dato){
		$persona = Persona::model()->findByPk($adRut);
		if($persona===null)
			throw new CHttpException(404,'La página solicitada No existe.');	
		else if ($persona->$dato===null)
			return '';
		return $persona->$dato;
	}

public function validateRut($attribute,$params){
		$rut = $this->adRut;
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
