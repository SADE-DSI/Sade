<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $peRut
 * @property string $peNombresApellidos
 * @property integer $peActivo
 * @property string $peEmail
 * @property string $peTelefono
 * @property string $peTipo
 * @property string $peDescripcion
 * @property string $peDireccion
 *
 * The followings are the available model relations:
 * @property Arrendatariodueno $arrendatariodueno
 * @property Conserjeadministrador $conserjeadministrador
 * @property Contratopersonal[] $contratopersonals
 * @property Sueldopersonal[] $sueldopersonals
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peRut, peNombresApellidos, peEmail, peTipo', 'required'),
			array('peActivo', 'numerical', 'integerOnly'=>true),
			array('peRut', 'length', 'max'=>13),
			array('peNombresApellidos', 'length', 'max'=>80),
			array('peEmail', 'length', 'max'=>30),
			array('peTelefono', 'length', 'max'=>10),
			array('peTipo', 'length', 'max'=>12),
			array('peDescripcion, peDireccion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('peRut, peNombresApellidos, peActivo, peEmail, peTelefono, peTipo, peDescripcion, peDireccion', 'safe', 'on'=>'search'),
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
			'pe_ad' => array(self::HAS_ONE, 'Arrendatariodueno', 'adRut'),
			'pe_ca' => array(self::HAS_ONE, 'Conserjeadministrador', 'caRut'),
			'contratopersonals' => array(self::HAS_MANY, 'Contratopersonal', 'peRut'),
			'sueldopersonals' => array(self::HAS_MANY, 'Sueldopersonal', 'peRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'peRut' => 'Pe Rut',
			'peNombresApellidos' => 'Pe Nombres Apellidos',
			'peActivo' => 'Pe Activo',
			'peEmail' => 'Pe Email',
			'peTelefono' => 'Pe Telefono',
			'peTipo' => 'Pe Tipo',
			'peDescripcion' => 'Pe Descripcion',
			'peDireccion' => 'Pe Direccion',
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
		$criteria->compare('peNombresApellidos',$this->peNombresApellidos,true);
		$criteria->compare('peActivo',$this->peActivo);
		$criteria->compare('peEmail',$this->peEmail,true);
		$criteria->compare('peTelefono',$this->peTelefono,true);
		$criteria->compare('peTipo',$this->peTipo,true);
		$criteria->compare('peDescripcion',$this->peDescripcion,true);
		$criteria->compare('peDireccion',$this->peDireccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
