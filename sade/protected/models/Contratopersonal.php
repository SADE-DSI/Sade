<?php

/**
 * This is the model class for table "contratopersonal".
 *
 * The followings are the available columns in table 'contratopersonal':
 * @property integer $cpCodigo
 * @property string $peRut
 * @property string $cpAFPNombre
 * @property integer $cpAFPMonto
 * @property string $cpPrevisionNombre
 * @property integer $cpPrevisionMonto
 * @property integer $cpSueldoBruto
 * @property string $cpFechaInicio
 * @property string $cpFechaFin
 *
 * The followings are the available model relations:
 * @property Persona $peRut0
 * @property Sueldopersonal[] $sueldopersonals
 */
class Contratopersonal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratopersonal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peRut, cpAFPMonto, cpPrevisionMonto, cpSueldoBruto, cpAFPNombre, cpPrevisionNombre, cpFechaInicio','required'),
			array('cpAFPMonto, cpPrevisionMonto, cpSueldoBruto,', 'numerical', 'integerOnly'=>true),
			array('cpSueldoBruto', 'numerical', 'integerOnly'=>true, 'min'=>156770, 'max'=>5000000),
			array('cpPrevisionMonto', 'numerical', 'integerOnly'=>true, 'min'=>10974, 'max'=>500000),
			array('cpAFPMonto', 'numerical', 'integerOnly'=>true, 'min'=>15677, 'max'=>700000),
			array('cpAFPMonto', 'AFPmenorAlSueldo'),
			array('cpPrevisionMonto', 'IsapreMenorAlSueldo'),
			array('cpValorHoraExtra', 'numerical', 'integerOnly'=>true, 'min'=>0),
			array('peRut','exist','allowEmpty'=>true, 'attributeName'=>'peRut', 'className' => 'persona'),
			array('peRut', 'length', 'max'=>13),
			array('cpFechaInicio', 'claveUnica'),
			array('peRut', 'contratoVigente'),
			array('cpAFPNombre, cpPrevisionNombre', 'length', 'max'=>20),
			array('cpFechaInicio, cpFechaFin', 'date', 'format'=>'yyyy-M-d'),
			array('cpFechaFin', 'validarFechas'),
			array('cpFechaInicio, cpFechaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cpCodigo, peRut, cpAFPNombre, cpAFPMonto, cpPrevisionNombre, cpPrevisionMonto, cpSueldoBruto, cpFechaInicio, cpFechaFin, cpValorHoraExtra', 'safe', 'on'=>'search'),
		);
	}

	public function claveUnica ($attribute, $param){
		if ($this->cpCodigo=='')
			$contrato = $this->find('cpFechaInicio=:cpFechaInicio AND peRut=:peRut', 
						array(':cpFechaInicio'=>$this->cpFechaInicio, ':peRut'=>$this->peRut));
		else 
			$contrato = $this->find('cpCodigo<>:cpCodigo AND cpFechaInicio=:cpFechaInicio AND peRut=:peRut', 
						array(':cpCodigo'=>$this->cpCodigo, ':cpFechaInicio'=>$this->cpFechaInicio, ':peRut'=>$this->peRut));
		if (isset($contrato))
			$this->addError($attribute, 'Esta Persona Ya Tiene Un contrato Ingresado en Esta fecha.');	
	}

	public function contratoVigente ($attribute, $param){
		if ($this->cpCodigo=='')
			$contrato = $this->find('peRut=:peRut AND cpFechaFin is null', 
						array(':peRut'=>$this->peRut));
		else
			$contrato = $this->find('cpCodigo<>:cpCodigo AND peRut=:peRut AND cpFechaFin is null', 
						array(':cpCodigo'=>$this->cpCodigo, ':peRut'=>$this->peRut));
		if (isset($contrato))
			$this->addError($attribute, 'Esta Persona Tiene Un contrato Vigente.');
	}

	public function validarFechas ($attribute, $param){
		if($this->cpFechaFin != '')
			if($this->cpFechaInicio >= $this->cpFechaFin)
				$this->addError($attribute, 'La Fecha de Fin Del Contrato debe ser mayor a la Fecha de Inicio');
	}

	public function AFPmenorAlSueldo ($attribute, $param){
		if (($this->cpSueldoBruto/2) < $this->cpAFPMonto )
		$this->addError($attribute, 'El Monto de AFP No puede superar la mitad del sueldo bruto');
	}

	public function isapreMenorAlSueldo ($attribute, $param){
		if (($this->cpSueldoBruto/2) < $this->cpPrevisionMonto )
		$this->addError($attribute, 'El Monto de Isapre No puede superar la mitad del sueldo bruto');
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'peRut0' => array(self::BELONGS_TO, 'Persona', 'peRut'),
			'sueldopersonals' => array(self::HAS_MANY, 'Sueldopersonal', 'cpCodigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cpCodigo' => 'Código Contrato',
			'peRut' => 'Rut',
			'cpAFPNombre' => 'Nombre AFP',
			'cpAFPMonto' => 'Monto AFP',
			'cpPrevisionNombre' => 'Nombre Previsión',
			'cpPrevisionMonto' => 'Monto Previsión',
			'cpSueldoBruto' => 'Sueldo Bruto',
			'cpFechaInicio' => 'Fecha Inicio',
			'cpFechaFin' => 'Fecha Fin',
			'cpValorHoraExtra' => 'Valor Hora Extra',
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

		$criteria->compare('cpCodigo',$this->cpCodigo);
		$criteria->compare('peRut',$this->peRut,true);
		$criteria->compare('cpAFPNombre',$this->cpAFPNombre,true);
		$criteria->compare('cpAFPMonto',$this->cpAFPMonto);
		$criteria->compare('cpPrevisionNombre',$this->cpPrevisionNombre,true);
		$criteria->compare('cpPrevisionMonto',$this->cpPrevisionMonto);
		$criteria->compare('cpSueldoBruto',$this->cpSueldoBruto);
		$criteria->compare('cpFechaInicio',$this->cpFechaInicio,true);
		$criteria->compare('cpFechaFin',$this->cpFechaFin,true);
		$criteria->compare('cpValorHoraExtra',$this->cpValorHoraExtra,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contratopersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getNombre ($peRut){
		$model=Persona::model()->findByPk($peRut);
		if($model===null)
			throw new CHttpException(404,'La pagina solicitada No existe.');	
		else
  			return $model->peNombresApellidos;
	}

	public function getNombresEmpleados (){
		//return $this->peRut;
		return CHtml::listData(Persona::model()->findAll(), "peRut", "nombresRutEmpleados");
	}
}
