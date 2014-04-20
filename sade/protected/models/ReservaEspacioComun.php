<?php

/**
 * This is the model class for table "reservaEspacioComun".
 *
 * The followings are the available columns in table 'reservaEspacioComun':
 * @property string $ecCodigo
 * @property string $reFechaInicio
 * @property string $reFechaFin
 * @property string $adRut
 *
 * The followings are the available model relations:
 * @property EspacioComun $ecCodigo0
 * @property ArrendatarioDueno $adRut0
 */
class ReservaEspacioComun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservaEspacioComun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ecCodigo, reFechaInicio, adRut', 'required'),
			array('ecCodigo', 'length', 'max'=>30),
			array('adRut', 'length', 'max'=>13),
			array('reFechaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ecCodigo, reFechaInicio, reFechaFin, adRut', 'safe', 'on'=>'search'),
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
			'ecCodigo0' => array(self::BELONGS_TO, 'EspacioComun', 'ecCodigo'),
			'adRut0' => array(self::BELONGS_TO, 'ArrendatarioDueno', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ecCodigo' => 'Ec Codigo',
			'reFechaInicio' => 'Re Fecha Inicio',
			'reFechaFin' => 'Re Fecha Fin',
			'adRut' => 'Ad Rut',
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

		$criteria->compare('ecCodigo',$this->ecCodigo,true);
		$criteria->compare('reFechaInicio',$this->reFechaInicio,true);
		$criteria->compare('reFechaFin',$this->reFechaFin,true);
		$criteria->compare('adRut',$this->adRut,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReservaEspacioComun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
