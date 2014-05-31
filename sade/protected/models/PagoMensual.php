<?php

/**
 * This is the model class for table "pagomensual".
 *
 * The followings are the available columns in table 'pagomensual':
 * @property string $pmCodigo
 * @property string $dlDireccion
 * @property string $pmFechaPago
 * @property string $pmMonto
 * @property string $pmObs
 * @property string $pmFechaRealPago
 * @property string $pmId
 *
 * The followings are the available model relations:
 * @property Dptolocal $dlDireccion0
 */
class Pagomensual extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagomensual';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dlDireccion, pmFechaPago, pmMonto, pmFechaRealPago', 'required'),
			array('dlDireccion', 'length', 'max'=>767),
			array('pmMonto, pmId', 'length', 'max'=>10),
			array('pmObs', 'length', 'max'=>255),

			array('dlDireccion','exist','allowEmpty' => true, 'attributeName' => 'dlDireccion', 'className' => 'Dptolocal'),
			//valida si la direccion ingresada esta en la tabla dptolocal

			array('pmFechaPago', 'date', 'format'=>'yyyy-M-d'),
			array('pmFechaRealPago', 'date', 'format'=>'yyyy-M-d'),
				//valida los formatos de las fechas

			array('pmMonto','numerical','integerOnly'=>true,'min'=>1,'tooSmall'=>'No se pueden ingresar menor a 1'),
				//valida si es un numero
				//valida si es mayor a 1

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pmCodigo, dlDireccion, pmFechaPago, pmMonto, pmObs, pmFechaRealPago, pmId', 'safe', 'on'=>'search'),
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
			'dlDireccion0' => array(self::BELONGS_TO, 'Dptolocal', 'dlDireccion'),
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
			'pmId' => 'Pm',
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
		$criteria->compare('pmMonto',$this->pmMonto,true);
		$criteria->compare('pmObs',$this->pmObs,true);
		$criteria->compare('pmFechaRealPago',$this->pmFechaRealPago,true);
		$criteria->compare('pmId',$this->pmId,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pagomensual the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
