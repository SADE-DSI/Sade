<?php

/**
 * This is the model class for table "conserjeAdministrador".
 *
 * The followings are the available columns in table 'conserjeAdministrador':
 * @property string $caRut
 * @property string $caClave
 *
 * The followings are the available model relations:
 * @property Persona $caRut0
 * @property VisitaDpto[] $visitaDptos
 */
class ConserjeAdministrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conserjeAdministrador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caRut, caClave', 'required'),
			array('caRut', 'length', 'max'=>13),
			array('caClave', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('caRut, caClave', 'safe', 'on'=>'search'),
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
			'caRut0' => array(self::BELONGS_TO, 'Persona', 'caRut'),
			'visitaDptos' => array(self::HAS_MANY, 'VisitaDpto', 'caRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'caRut' => 'Ca Rut',
			'caClave' => 'Ca Clave',
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

		$criteria->compare('caRut',$this->caRut,true);
		$criteria->compare('caClave',$this->caClave,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConserjeAdministrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}