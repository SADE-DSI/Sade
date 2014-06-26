<?php

/**
 * This is the model class for table "compromisopago".
 *
 * The followings are the available columns in table 'compromisopago':
 * @property string $cpId
 * @property string $cpTipo
 * @property string $cpFechaVencimiento
 * @property string $cpMonto
 * @property string $cpDescripcion
 * @property string $cpFechaIngreso
 * @property string $cpObs
 * @property string $cpNumeroBoleta
 * @property string $cpFechaRealPago
 */
class Compromisopago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compromisopago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cpTipo, cpFechaVencimiento, cpMonto, cpFechaIngreso', 'required'),
			array('cpTipo', 'length', 'max'=>255),
			array('cpMonto, cpNumeroBoleta', 'length', 'max'=>10),
			array('cpDescripcion, cpObs', 'length', 'max'=>767),
			array('cpFechaRealPago', 'safe'),

// Tipo *

// Fecha Vencimiento *
array('cpFechaVencimiento', 'date', 'format'=>'yyyy-M-d'),
array('cpFechaVencimiento','compare','compareValue'=>date('Y-m-d'),'operator'=>'>'),
	

// Monto *
array('cpMonto', 'numerical', 'integerOnly'=>true, 'min'=>1, 'max'=>1000000000),

// Descripción

// Observación

// Numero Boleta


			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cpId, cpTipo, cpFechaVencimiento, cpMonto, cpDescripcion, cpFechaIngreso, cpObs, cpNumeroBoleta, cpFechaRealPago', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cpId' => 'Cp',
			'cpTipo' => 'Tipo',
			'cpFechaVencimiento' => 'Fecha Vencimiento',
			'cpMonto' => 'Monto',
			'cpDescripcion' => 'Descripción',
			'cpFechaIngreso' => 'Fecha Ingreso',
			'cpObs' => 'Observación',
			'cpNumeroBoleta' => 'Numero Boleta',
			'cpFechaRealPago' => 'Fecha Real Pago',
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

		$criteria->compare('cpId',$this->cpId,true);
		$criteria->compare('cpTipo',$this->cpTipo,true);
		$criteria->compare('cpFechaVencimiento',$this->cpFechaVencimiento,true);
		$criteria->compare('cpMonto',$this->cpMonto,true);
		$criteria->compare('cpDescripcion',$this->cpDescripcion,true);
		$criteria->compare('cpFechaIngreso',$this->cpFechaIngreso,true);
		$criteria->compare('cpObs',$this->cpObs,true);
		$criteria->compare('cpNumeroBoleta',$this->cpNumeroBoleta,true);
		$criteria->compare('cpFechaRealPago',$this->cpFechaRealPago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Compromisopago the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
