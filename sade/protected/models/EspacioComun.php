<?php

/**
 * This is the model class for table "espaciocomun".
 *
 * The followings are the available columns in table 'espaciocomun':
 * @property string $ecCodigo
 * @property string $ecDescripcion
 * @property integer $ecFrecuencia
 * @property integer $ecActivo
 *
 * The followings are the available model relations:
 * @property Reservaespcomun[] $reservaespcomuns
 */
class Espaciocomun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'espaciocomun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ecCodigo', 'required'),
			array('ecCodigo', 'length', 'max'=>30),
			array('ecCodigo', 'length', 'min'=>4),
			array('ecCodigo',  'match', 'pattern'=>'/[a-zA-Z]/'),
			array('ecCodigo', 'unique'),
			array('ecFrecuencia, ecActivo', 'numerical', 'integerOnly'=>true),
			array('ecFrecuencia', 'required'),
			array('ecDescripcion', 'length', 'max'=>767),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ecCodigo, ecDescripcion, ecFrecuencia, ecActivo', 'safe', 'on'=>'search'),
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
			'reservaespcomuns' => array(self::HAS_MANY, 'Reservaespcomun', 'ecCodigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ecCodigo' => 'Código',
			'ecDescripcion' => 'Descripción',
			'ecFrecuencia' => 'Frecuencia (Minutos)',
			'ecActivo' => 'Activo',
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
		$criteria->compare('ecDescripcion',$this->ecDescripcion,true);
		$criteria->compare('ecFrecuencia',$this->ecFrecuencia);
		$criteria->compare('ecActivo',$this->ecActivo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Espaciocomun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
