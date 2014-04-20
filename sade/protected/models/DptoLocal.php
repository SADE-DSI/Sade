<?php

/**
 * This is the model class for table "dptoLocal".
 *
 * The followings are the available columns in table 'dptoLocal':
 * @property string $dlDireccion
 * @property integer $dlMts2Construidos
 * @property integer $dlValorArriendo
 *
 * The followings are the available model relations:
 * @property PagoMensual[] $pagoMensuals
 * @property ResideDpto[] $resideDptos
 * @property VisitaDpto[] $visitaDptos
 */
class DptoLocal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dptoLocal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dlDireccion', 'required'),
			array('dlMts2Construidos, dlValorArriendo', 'numerical', 'integerOnly'=>true),
			array('dlDireccion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dlDireccion, dlMts2Construidos, dlValorArriendo', 'safe', 'on'=>'search'),
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
			'pagoMensuals' => array(self::HAS_MANY, 'PagoMensual', 'dlDireccion'),
			'resideDptos' => array(self::HAS_MANY, 'ResideDpto', 'dlDireccion'),
			'visitaDptos' => array(self::HAS_MANY, 'VisitaDpto', 'dlDireccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dlDireccion' => 'Dl Direccion',
			'dlMts2Construidos' => 'Dl Mts2 Construidos',
			'dlValorArriendo' => 'Dl Valor Arriendo',
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

		$criteria->compare('dlDireccion',$this->dlDireccion,true);
		$criteria->compare('dlMts2Construidos',$this->dlMts2Construidos);
		$criteria->compare('dlValorArriendo',$this->dlValorArriendo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DptoLocal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
