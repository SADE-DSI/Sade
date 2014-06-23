<?php

/**
 * This is the model class for table "residedpto".
 *
 * The followings are the available columns in table 'residedpto':
 * @property string $rdFechaInicio
 * @property string $adRut
 * @property string $dlDireccion
 * @property string $rdFechaFin
 *
 * The followings are the available model relations:
 * @property Dptolocal $dlDireccion0
 * @property Arrendatariodueno $adRut0
 */
class Residedpto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'residedpto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		$fecha=date('Y-m-d', strtotime('+1 month')) ;
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rdFechaInicio, adRut, dlDireccion', 'required'),
			array('adRut', 'length', 'max'=>13),
			array('dlDireccion', 'length', 'max'=>767),
			array('rdFechaFin', 'date', 'format'=>'yyyy-M-d'),
			array('rdFechaFin', 'compare', 'compareValue'=>$fecha,'operator'=>'>'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rdFechaInicio, adRut, dlDireccion, rdFechaFin', 'safe', 'on'=>'search'),
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
			'adRut0' => array(self::BELONGS_TO, 'Arrendatariodueno', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rdFechaInicio' => 'Fecha Inicio',
			'adRut' => 'Rut',
			'dlDireccion' => 'Dirección',
			'rdFechaFin' => 'Fecha Fin Contrato',
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

		$criteria->compare('rdFechaInicio',$this->rdFechaInicio,true);
		$criteria->compare('adRut',$this->adRut,true);
		$criteria->compare('dlDireccion',$this->dlDireccion,true);
		$criteria->compare('rdFechaFin',$this->rdFechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Residedpto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
