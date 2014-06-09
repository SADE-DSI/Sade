<?php

/**
 * This is the model class for table "sueldopersonal".
 *
 * The followings are the available columns in table 'sueldopersonal':
 * @property string $spFechaPago
 * @property string $peRut
 * @property string $spOtrosDescuento
 * @property string $spHorasExtra
 *
 * The followings are the available model relations:
 * @property Contratopersonal $peRut0
 */
class Sueldopersonal extends CActiveRecord
{
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
			array('spFechaPago, peRut', 'required'),
			array('peRut', 'length', 'max'=>13),
			array('spOtrosDescuento, spHorasExtra', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('spFechaPago, peRut, spOtrosDescuento, spHorasExtra', 'safe', 'on'=>'search'),
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
			'peRut0' => array(self::BELONGS_TO, 'Contratopersonal', 'peRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'spFechaPago' => 'Fecha De Pago',
			'peRut' => 'Rut Empleado',
			'spOtrosDescuento' => 'Otros Descuentos',
			'spHorasExtra' => 'Horas Extra',
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

		$criteria->compare('spFechaPago',$this->spFechaPago,true);
		$criteria->compare('peRut',$this->peRut,true);
		$criteria->compare('spOtrosDescuento',$this->spOtrosDescuento,true);
		$criteria->compare('spHorasExtra',$this->spHorasExtra,true);

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
}
