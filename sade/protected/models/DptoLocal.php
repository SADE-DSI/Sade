<?php

/**
 * This is the model class for table "dptolocal".
 *
 * The followings are the available columns in table 'dptolocal':
 * @property string $dlDireccion
 * @property double $dlMts2Construidos
 * @property string $dlValorArriendo
 * @property string $dlActivo
 *
 * The followings are the available model relations:
 * @property Pagomensual[] $pagomensuals
 * @property Residedpto[] $residedptos
 * @property Visitadpto[] $visitadptos
 */
class Dptolocal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dptolocal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
		public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dlValorArriendo', 'numerical', 'integerOnly'=>true, 'min'=>0, 'max'=>1000000000),	
			array('dlDireccion', 'length', 'max'=>767),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dlDireccion, dlMts2Construidos, dlValorArriendo, dlActivo', 'safe', 'on'=>'search'),
			array('dlDireccion, dlMts2Construidos, dlActivo', 'required'),
			array('dlDireccion', 'unique'),		
			array('dlMts2Construidos', 'numerical', 'integerOnly'=>false, 'min'=>1, 'message'=>
					'{attribute}  debe ser un entero o un decimal con punto.'),	
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
			'pagomensuals' => array(self::HAS_MANY, 'Pagomensual', 'dlDireccion'),
			'residedptos' => array(self::HAS_MANY, 'Residedpto', 'dlDireccion'),
			'visitadptos' => array(self::HAS_MANY, 'Visitadpto', 'dlDireccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dlDireccion' => 'Direccion',
			'dlMts2Construidos' => 'Metros Cuadrados Construidos',
			'dlValorArriendo' => 'Valor Arriendo',
			'dlActivo' => 'Activo',
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
		$criteria->compare('dlValorArriendo',$this->dlValorArriendo,true);
		$criteria->compare('dlActivo',$this->dlActivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dptolocal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
