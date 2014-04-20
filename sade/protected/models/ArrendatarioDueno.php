<?php

/**
 * This is the model class for table "arrendatarioDueno".
 *
 * The followings are the available columns in table 'arrendatarioDueno':
 * @property string $adRut
 * @property string $adClave
 * @property integer $adEstado
 * @property string $adFechaLiberacion
 *
 * The followings are the available model relations:
 * @property Persona $adRut0
 * @property ReservaEspacioComun[] $reservaEspacioComuns
 * @property ResideDpto[] $resideDptos
 */
class ArrendatarioDueno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arrendatarioDueno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adRut', 'required'),
			array('adEstado', 'numerical', 'integerOnly'=>true),
			array('adRut', 'length', 'max'=>13),
			array('adClave', 'length', 'max'=>30),
			array('adFechaLiberacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('adRut, adClave, adEstado, adFechaLiberacion', 'safe', 'on'=>'search'),
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
			'adRut0' => array(self::BELONGS_TO, 'Persona', 'adRut'),
			'reservaEspacioComuns' => array(self::HAS_MANY, 'ReservaEspacioComun', 'adRut'),
			'resideDptos' => array(self::HAS_MANY, 'ResideDpto', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'adRut' => 'Ad Rut',
			'adClave' => 'Ad Clave',
			'adEstado' => 'Ad Estado',
			'adFechaLiberacion' => 'Ad Fecha Liberacion',
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
		$criteria->compare('adClave',$this->adClave,true);
		$criteria->compare('adEstado',$this->adEstado);
		$criteria->compare('adFechaLiberacion',$this->adFechaLiberacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArrendatarioDueno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
