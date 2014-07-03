<?php

/**
 * This is the model class for table "reservaespaciocomun".
 *
 * The followings are the available columns in table 'reservaespaciocomun':
 * @property string $reId
 * @property string $ecCodigo
 * @property string $reFecha
 * @property string $adRut
 * @property string $reHoraInicio
 * @property string $reHoraFin
 *
 * The followings are the available model relations:
 * @property Espaciocomun $ecCodigo0
 * @property Arrendatariodueno $adRut0
 */
class Reservaespaciocomun_res extends CActiveRecord
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
			array('ecCodigo, reFecha, adRut, reHoraInicio, reHoraFin', 'required'),
			array('ecCodigo', 'length', 'max'=>30),
			array('adRut', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reId, ecCodigo, reFecha, adRut, reHoraInicio, reHoraFin', 'safe', 'on'=>'search'),
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
			'reId' => 'Re',
			'ecCodigo' => 'Nombre',
			'reFecha' => 'Fecha',
			'adRut' => 'Rut',
			'reHoraInicio' => 'Hora inicio',
			'reHoraFin' => 'Hora Fin',
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

		$criteria->addCondition("adRut = '".Yii::app()->user->name."'");
		$criteria->compare('reId',$this->reId,true);
		$criteria->compare('ecCodigo',$this->ecCodigo,true);
		$criteria->compare('reFecha',$this->reFecha,true);
		$criteria->compare('adRut',$this->adRut,true);
		$criteria->compare('reHoraInicio',$this->reHoraInicio,true);
		$criteria->compare('reHoraFin',$this->reHoraFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservaespaciocomun_res the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
