<?php

/**
 * This is the model class for table "reservaespaciocomun".
 *
 * The followings are the available columns in table 'reservaespaciocomun':
 * @property string $reFechaInicio
 * @property string $adRut
 * @property string $ecCodigo
 * @property string $reFechaFin
 *
 * The followings are the available model relations:
 * @property Espaciocomun $ecCodigo0
 * @property Arrendatariodueno $adRut0
 */
class Reservaespaciocomun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservaespaciocomun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reFechaInicio, adRut, ecCodigo, reFechaFin', 'required'),
			array('adRut', 'length', 'max'=>13),
			array('ecCodigo', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reFechaInicio, adRut, ecCodigo, reFechaFin', 'safe', 'on'=>'search'),
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
			'ecCodigo0' => array(self::BELONGS_TO, 'Espaciocomun', 'ecCodigo'),
			'adRut0' => array(self::BELONGS_TO, 'Arrendatariodueno', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reFechaInicio' => 'Re Fecha Inicio',
			'adRut' => 'Ad Rut',
			'ecCodigo' => 'Ec Codigo',
			'reFechaFin' => 'Re Fecha Fin',
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

		$criteria->compare('reFechaInicio',$this->reFechaInicio,true);
		$criteria->compare('adRut',$this->adRut,true);
		$criteria->compare('ecCodigo',$this->ecCodigo,true);
		$criteria->compare('reFechaFin',$this->reFechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservaespaciocomun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
