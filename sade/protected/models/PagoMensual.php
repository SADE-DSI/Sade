<?php

/**
 * This is the model class for table "pagoMensual".
 *
 * The followings are the available columns in table 'pagoMensual':
 * @property string $pmCodigo
 * @property string $dlDireccion
 * @property string $pmFechaPago
 * @property integer $pmMonto
 * @property string $pmObs
 * @property string $pmFechaRealPago
 *
 * The followings are the available model relations:
 * @property DptoLocal $dlDireccion0
 */
class PagoMensual extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagoMensual';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pmMonto', 'numerical', 'integerOnly'=>true),
			array('dlDireccion, pmObs', 'length', 'max'=>100),
			array('pmFechaPago, pmFechaRealPago', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pmCodigo, dlDireccion, pmFechaPago, pmMonto, pmObs, pmFechaRealPago', 'safe', 'on'=>'search'),
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
			'dlDireccion0' => array(self::BELONGS_TO, 'DptoLocal', 'dlDireccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pmCodigo' => 'Pm Codigo',
			'dlDireccion' => 'Dl Direccion',
			'pmFechaPago' => 'Pm Fecha Pago',
			'pmMonto' => 'Pm Monto',
			'pmObs' => 'Pm Obs',
			'pmFechaRealPago' => 'Pm Fecha Real Pago',
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

		$criteria->compare('pmCodigo',$this->pmCodigo,true);
		$criteria->compare('dlDireccion',$this->dlDireccion,true);
		$criteria->compare('pmFechaPago',$this->pmFechaPago,true);
		$criteria->compare('pmMonto',$this->pmMonto);
		$criteria->compare('pmObs',$this->pmObs,true);
		$criteria->compare('pmFechaRealPago',$this->pmFechaRealPago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PagoMensual the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
