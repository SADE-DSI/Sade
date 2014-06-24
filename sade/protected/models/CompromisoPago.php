<?php

/**
 * This is the model class for table "compromisopago".
 *
 * The followings are the available columns in table 'compromisopago':
 * @property string $cpId
 * @property string $cpTipo
 * @property string $cpMonto
 * @property string $cpFechaIngreso
 * @property string $cpObs
 * @property string $cpNumeroBoleta
 * @property string $cpAno
 * @property string $cpMes
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
			array('cpTipo, cpMonto, cpFechaIngreso, cpAno, cpMes', 'required'),
			array('cpTipo, cpObs', 'length', 'max'=>767),
			array('cpMonto, cpNumeroBoleta', 'length', 'max'=>10),
			array('cpAno, cpMes', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cpId, cpTipo, cpMonto, cpFechaIngreso, cpObs, cpNumeroBoleta, cpAno, cpMes', 'safe', 'on'=>'search'),
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
			'cpMonto' => 'Monto',
			'cpFechaIngreso' => 'Fecha Ingreso',
			'cpObs' => 'Observación',
			'cpNumeroBoleta' => 'Número Boleta',
			'cpAno' => 'Año',
			'cpMes' => 'Mes',
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
		$criteria->compare('cpMonto',$this->cpMonto,true);
		$criteria->compare('cpFechaIngreso',$this->cpFechaIngreso,true);
		$criteria->compare('cpObs',$this->cpObs,true);
		$criteria->compare('cpNumeroBoleta',$this->cpNumeroBoleta,true);
		$criteria->compare('cpAno',$this->cpAno,true);
		$criteria->compare('cpMes',$this->cpMes,true);

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
