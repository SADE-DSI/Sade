<?php

/**
 * This is the model class for table "conserjeadministrador".
 *
 * The followings are the available columns in table 'conserjeadministrador':
 * @property string $caRut
 * @property string $caClave
 *
 * The followings are the available model relations:
 * @property Persona $caRut0
 * @property Visitadpto[] $visitadptos
 */
class Conserjeadministrador extends CActiveRecord
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
			array('caClave', 'length', 'max'=>20, 'min'=>6),
		    array('caClave','match','pattern'=>'/^[a-zA-Z0-9]{6,20}$/',
               	 'message'=>CrugeTranslator::t("Solo letras y números")),
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
			'ca_pe' => array(self::HAS_ONE, 'Persona', 'peRut'),
			'visitadptos' => array(self::HAS_MANY, 'Visitadpto', 'caRut'),
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
	 * @return Conserjeadministrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
