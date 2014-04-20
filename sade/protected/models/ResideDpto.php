<?php

/**
 * This is the model class for table "resideDpto".
 *
 * The followings are the available columns in table 'resideDpto':
 * @property string $adRut
 * @property string $dlDireccion
 * @property string $fechaInicio
 * @property string $fechaFin
 *
 * The followings are the available model relations:
 * @property DptoLocal $dlDireccion0
 * @property ArrendatarioDueno $adRut0
 */
class ResideDpto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resideDpto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adRut, dlDireccion, fechaInicio', 'required'),
			array('adRut', 'length', 'max'=>13),
			array('dlDireccion', 'length', 'max'=>100),
			array('fechaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('adRut, dlDireccion, fechaInicio, fechaFin', 'safe', 'on'=>'search'),
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
			'adRut0' => array(self::BELONGS_TO, 'ArrendatarioDueno', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'adRut' => 'Ad Rut',
			'dlDireccion' => 'Dl Direccion',
			'fechaInicio' => 'Fecha Inicio',
			'fechaFin' => 'Fecha Fin',
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

		$criteria->compare('adRut',$this->adRut,true);
		$criteria->compare('dlDireccion',$this->dlDireccion,true);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaFin',$this->fechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ResideDpto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
