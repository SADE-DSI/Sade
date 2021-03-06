<?php

/**
 * This is the model class for table "sueldopersonal".
 *
 * The followings are the available columns in table 'sueldopersonal':
 * @property integer $spCodigo
 * @property integer $cpCodigo
 * @property string $spFechaPago
 * @property integer $spOtrosDescuentos
 * @property string $spHorasExtras
 *
 * The followings are the available model relations:
 * @property Contratopersonal $cpCodigo0
 */
class Sueldopersonal extends CActiveRecord
{
	public $peNombresApellidos;
	public $spSueldoLiquido;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sueldopersonal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('spFechaPago, spFechaVencimiento, cpCodigo', 'required'),
			array('cpCodigo', 'validarClaveForanea'),
			array('cpCodigo', 'numerical', 'integerOnly'=>true),
			array('spHorasExtras', 'numerical', 'min'=>0,  'max'=>20),
			array('spOtrosDescuentos', 'numerical', 'min'=>0,  'max'=>50000, 'integerOnly'=>true),
			array('spFechaVencimiento', 'claveUnica'),
			array('spFechaVencimiento', 'pagoMensual'),
			array('spFechaPago, spFechaVencimiento', 'date', 'format'=>'yyyy-M-d'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('spCodigo, cpCodigo, spFechaPago, spFechaVencimiento, spOtrosDescuentos, spHorasExtras, 
				peNombresApellidos, spSueldoLiquido', 'safe', 'on'=>'search'),
		);
	}

	public function claveUnica ($attribute, $param){
		if ($this->spCodigo=='')
			$sueldo = $this->find('spFechaVencimiento=:spFechaVencimiento AND cpCodigo=:cpCodigo', 
						array(':spFechaVencimiento'=>$this->spFechaVencimiento, ':cpCodigo'=>$this->cpCodigo));
		else 
			$sueldo = $this->find('spCodigo<>:spCodigo AND spFechaVencimiento=:spFechaVencimiento AND cpCodigo=:cpCodigo', 
						array(':spCodigo'=>$this->spCodigo, ':spFechaVencimiento'=>$this->spFechaVencimiento, ':cpCodigo'=>$this->cpCodigo));
		if (isset($sueldo))
			$this->addError($attribute, 'Esta Persona Ya Tiene Un Sueldo Ingresado en Esta fecha.');	
	}

	//Esta función valida que se permita sólo un sueldo al mes
	public function pagoMensual ($attribute, $param){
		$array = explode("-", $this->spFechaVencimiento);
		$dia = $array[2];
		$mes = $array[1];
		$year = $array[0];
		$fechaInicio = $year.'-'.$mes.'-'.'01';
		$fechaFin = $year.'-'.$mes.'-'.'31';


		if ($this->spCodigo=='')
			$sueldo = $this->find('spFechaVencimiento>=:spFechaInicio AND spFechaVencimiento<=:spFechaFin AND cpCodigo=:cpCodigo', 
						array(':spFechaInicio'=>$fechaInicio, ':spFechaFin'=>$fechaFin, ':cpCodigo'=>$this->cpCodigo));
		else 
			$sueldo = $this->find('spCodigo<>:spCodigo AND spFechaVencimiento>=:spFechaInicio 
								AND spFechaVencimiento<=:spFechaFin AND cpCodigo=:cpCodigo', 
						array(':spCodigo'=>$this->spCodigo, ':spFechaInicio'=>$fechaInicio, ':spFechaFin'=>$fechaFin, ':cpCodigo'=>$this->cpCodigo));
		if (isset($sueldo))
			$this->addError($attribute, 'Esta Persona ya tiene un sueldo ingresado en este mes');	
	}

	public function validarClaveForanea ($attribute, $param){
		$modelCP = Contratopersonal::model()->findByPk($this->$attribute);
		if($modelCP===null)
			$this->addError($attribute, 'Este Contrato No se encuentra Registrado en nuestra Base de Datos.');			
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cpCodigo0' => array(self::BELONGS_TO, 'Contratopersonal', 'cpCodigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'spCodigo' => 'Código Sueldo',
			'cpCodigo' => 'Código Contrato',
			'spFechaPago' => 'Fecha Real De Pago',
			'spFechaVencimiento' => 'Fecha Vencimiento',
			'spOtrosDescuentos' => 'Otros Descuentos',
			'spHorasExtras' => 'Horas Extras',
			'spSueldoLiquido' => 'Sueldo Líquido',	
			'cpSueldoBruto' => 'Sueldo Bruto',
			'cpDctoAFP' => 'Descuento AFP',
			'cpDctoIsapre' => 'Descuento Isapre',
			'cpHoraExtra' => 'Valor Hora Extra',
			'peNombresApellidos' => 'Empleado',
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

		$criteria->compare('spCodigo',$this->spCodigo);
		$criteria->compare('cpCodigo',$this->cpCodigo);
		$criteria->compare('spFechaPago',$this->spFechaPago,true);
		$criteria->compare('spFechaVencimiento',$this->spFechaVencimiento,true);
		$criteria->compare('spOtrosDescuentos',$this->spOtrosDescuentos);
		$criteria->compare('spHorasExtras',$this->spHorasExtras,true);
		$criteria->with = array('cpCodigo0');
		$criteria->compare('cpCodigo0.peNombresApellidos', $this->peNombresApellidos, true );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sueldopersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getNombre ($codigoContrato){
		$modelCodigoContrato = Contratopersonal::model()->findByPk($codigoContrato);
		if($modelCodigoContrato===null)
			throw new CHttpException(404,'La pagina solicitada No existe.');	
		else{
  			$peRut = $modelCodigoContrato->peRut;
  			$peNombreApellidos = $modelCodigoContrato->getNombre($peRut);
  			return $peNombreApellidos;
  		}
	}

	public function getSueldoLiquido ($cpCodigo, $spCodigo){
		$modelCP = Contratopersonal::model()->findByPk($cpCodigo);
		return $modelCP->cpSueldoBruto + ($modelCP->cpValorHoraExtra * $this->spHorasExtras)
								- $modelCP->cpAFPMonto - $modelCP->cpPrevisionMonto - $this->spOtrosDescuentos;
	}

	public function getDatosSueldo ($cpCodigo, $dato){
		$modelCP = Contratopersonal::model()->findByPk($cpCodigo);
		if($modelCP===null)
			throw new CHttpException(404,'La página solicitada No existe.');	
		else if ($modelCP->$dato===null)
			throw new CHttpException(404,'El dato solicitado No existe.');
		return $modelCP->$dato;
	}

	public function extraerDatoFecha ($fecha, $dato){
		$array = explode("-", $fecha);
		if ($dato=='dia') return $array[2];
		else if ($dato=='mes') return $array[1];
		else return $array[0];
	}

	public function getContratos (){
		//return $this->peRut;
		return CHtml::listData(Contratopersonal::model()->findAll(), "cpCodigo", "nombresFechaFinContratos");
	}
}
