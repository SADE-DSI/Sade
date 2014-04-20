<?php

/**
 * This is the model class for table "visitaDpto".
 *
 * The followings are the available columns in table 'visitaDpto':
 * @property string $viRut
 * @property string $dlDireccion
 * @property string $vdFechaIngreso
 * @property string $caRut
 * @property string $vdFechaSalida
 *
 * The followings are the available model relations:
 * @property Visita $viRut0
 * @property DptoLocal $dlDireccion0
 * @property ConserjeAdministrador $caRut0
 */
class VisitaDpto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitaDpto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('viRut, caRut', 'required'),
			array('viRut, caRut', 'length', 'max'=>13),
			array('dlDireccion', 'length', 'max'=>100),
			array('vdFechaSalida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('viRut, dlDireccion, vdFechaIngreso, caRut, vdFechaSalida', 'safe', 'on'=>'search'),
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
			'viRut0' => array(self::BELONGS_TO, 'Visita', 'viRut'),
			'dlDireccion0' => array(self::BELONGS_TO, 'DptoLocal', 'dlDireccion'),
			'caRut0' => array(self::BELONGS_TO, 'ConserjeAdministrador', 'caRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'viRut' => 'Vi Rut',
			'dlDireccion' => 'Dl Direccion',
			'vdFechaIngreso' => 'Vd Fecha Ingreso',
			'caRut' => 'Ca Rut',
			'vdFechaSalida' => 'Vd Fecha Salida',
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

		$criteria->compare('viRut',$this->viRut,true);
		$criteria->compare('dlDireccion',$this->dlDireccion,true);
		$criteria->compare('vdFechaIngreso',$this->vdFechaIngreso,true);
		$criteria->compare('caRut',$this->caRut,true);
		$criteria->compare('vdFechaSalida',$this->vdFechaSalida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VisitaDpto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
