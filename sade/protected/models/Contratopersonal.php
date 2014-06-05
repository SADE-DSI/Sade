<?php

/**
 * This is the model class for table "contratopersonal".
 *
 * The followings are the available columns in table 'contratopersonal':
 * @property string $peRut
 * @property string $cpAFPNombre
 * @property integer $cpAFPMonto
 * @property string $cpPrevisionNombre
 * @property string $cpPrevisionMonto
 * @property string $cpSueldoBruto
 * @property string $cpFechaInicio
 * @property string $cpFechaFin
 *
 * The followings are the available model relations:
 * @property Persona $peRut0
 * @property Sueldopersonal $sueldopersonal
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
			array('peRut','exist','allowEmpty'=>true, 'attributeName'=>'peRut', 'className' => 'persona'),
			array('cpAFPMonto, cpPrevisionMonto, cpSueldoBruto,', 'numerical', 'integerOnly'=>true),
			array('cpSueldoBruto', 'numerical', 'integerOnly'=>true, 'min'=>156770, 'max'=>5000000),
			array('cpPrevisionMonto', 'numerical', 'integerOnly'=>true, 'min'=>10974, 'max'=>500000),
			array('cpAFPMonto', 'numerical', 'integerOnly'=>true, 'min'=>15677, 'max'=>700000),
			array('peRut', 'length', 'max'=>13),
			array('peRut', 'unique'),
			array('cpAFPNombre, cpPrevisionNombre', 'length', 'max'=>20),
			array('cpFechaInicio, cpFechaFin', 'date', 'format'=>'yyyy-M-d'),
			array('cpFechaInicio, cpFechaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('peRut, cpAFPNombre, cpAFPMonto, cpPrevisionNombre, cpPrevisionMonto, cpSueldoBruto, cpFechaInicio, cpFechaFin', 'safe', 'on'=>'search'),
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
			'peRut0' => array(self::BELONGS_TO, 'Persona', 'peRut'),
			'sueldopersonal' => array(self::HAS_ONE, 'Sueldopersonal', 'peRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'peRut' => 'Pe Rut',
			'cpAFPNombre' => 'Cp Afpnombre',
			'cpAFPMonto' => 'Cp Afpmonto',
			'cpPrevisionNombre' => 'Cp Prevision Nombre',
			'cpPrevisionMonto' => 'Cp Prevision Monto',
			'cpSueldoBruto' => 'Cp Sueldo Bruto',
			'cpFechaInicio' => 'Cp Fecha Inicio',
			'cpFechaFin' => 'Cp Fecha Fin',
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
		$criteria->compare('cpAFPNombre',$this->cpAFPNombre,true);
		$criteria->compare('cpAFPMonto',$this->cpAFPMonto);
		$criteria->compare('cpPrevisionNombre',$this->cpPrevisionNombre,true);
		$criteria->compare('cpPrevisionMonto',$this->cpPrevisionMonto,true);
		$criteria->compare('cpSueldoBruto',$this->cpSueldoBruto,true);
		$criteria->compare('cpFechaInicio',$this->cpFechaInicio,true);
		$criteria->compare('cpFechaFin',$this->cpFechaFin,true);

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
}
