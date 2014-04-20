<?php

/**
 * This is the model class for table "sueldoPersona".
 *
 * The followings are the available columns in table 'sueldoPersona':
 * @property string $peRut
 * @property string $spFechaPago
 * @property string $spAFP
 * @property string $spIsapre
 * @property integer $spSueldo
 * @property integer $spDescuento
 * @property string $spHorasExtras
 *
 * The followings are the available model relations:
 * @property Persona $peRut0
 */
class SueldoPersona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sueldoPersona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peRut, spFechaPago', 'required'),
			array('spSueldo, spDescuento', 'numerical', 'integerOnly'=>true),
			array('peRut', 'length', 'max'=>13),
			array('spAFP, spIsapre', 'length', 'max'=>20),
			array('spHorasExtras', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('peRut, spFechaPago, spAFP, spIsapre, spSueldo, spDescuento, spHorasExtras', 'safe', 'on'=>'search'),
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
			'peRut0' => array(self::BELONGS_TO, 'Persona', 'peRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'peRut' => 'Pe Rut',
			'spFechaPago' => 'Sp Fecha Pago',
			'spAFP' => 'Sp Afp',
			'spIsapre' => 'Sp Isapre',
			'spSueldo' => 'Sp Sueldo',
			'spDescuento' => 'Sp Descuento',
			'spHorasExtras' => 'Sp Horas Extras',
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

		$criteria->compare('peRut',$this->peRut,true);
		$criteria->compare('spFechaPago',$this->spFechaPago,true);
		$criteria->compare('spAFP',$this->spAFP,true);
		$criteria->compare('spIsapre',$this->spIsapre,true);
		$criteria->compare('spSueldo',$this->spSueldo);
		$criteria->compare('spDescuento',$this->spDescuento);
		$criteria->compare('spHorasExtras',$this->spHorasExtras,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SueldoPersona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
