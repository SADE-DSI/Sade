<?php

/**
 * This is the model class for table "compromisoPago".
 *
 * The followings are the available columns in table 'compromisoPago':
 * @property integer $coCodigo
 * @property string $cpFechaVencimiento
 * @property integer $cpMonto
 * @property string $cpDescripcion
 * @property string $cpFechaIngreso
 * @property string $cpObs
 * @property integer $gpNumeroBoleta
 * @property string $gpFechaRealPago
 *
 * The followings are the available model relations:
 * @property Codigo $coCodigo0
 */
class CompromisoPago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compromisoPago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('coCodigo', 'required'),
			array('coCodigo, cpMonto, gpNumeroBoleta', 'numerical', 'integerOnly'=>true),
			array('cpDescripcion, cpFechaIngreso, cpObs, gpFechaRealPago', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('coCodigo, cpFechaVencimiento, cpMonto, cpDescripcion, cpFechaIngreso, cpObs, gpNumeroBoleta, gpFechaRealPago', 'safe', 'on'=>'search'),
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
			'coCodigo0' => array(self::BELONGS_TO, 'Codigo', 'coCodigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'coCodigo' => 'Co Codigo',
			'cpFechaVencimiento' => 'Cp Fecha Vencimiento',
			'cpMonto' => 'Cp Monto',
			'cpDescripcion' => 'Cp Descripcion',
			'cpFechaIngreso' => 'Cp Fecha Ingreso',
			'cpObs' => 'Cp Obs',
			'gpNumeroBoleta' => 'Gp Numero Boleta',
			'gpFechaRealPago' => 'Gp Fecha Real Pago',
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

		$criteria->compare('coCodigo',$this->coCodigo);
		$criteria->compare('cpFechaVencimiento',$this->cpFechaVencimiento,true);
		$criteria->compare('cpMonto',$this->cpMonto);
		$criteria->compare('cpDescripcion',$this->cpDescripcion,true);
		$criteria->compare('cpFechaIngreso',$this->cpFechaIngreso,true);
		$criteria->compare('cpObs',$this->cpObs,true);
		$criteria->compare('gpNumeroBoleta',$this->gpNumeroBoleta);
		$criteria->compare('gpFechaRealPago',$this->gpFechaRealPago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompromisoPago the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
