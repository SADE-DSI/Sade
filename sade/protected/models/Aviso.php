<?php

/**
 * This is the model class for table "aviso".
 *
 * The followings are the available columns in table 'aviso':
 * @property string $avCodigo
 * @property string $avTitulo
 * @property string $avFecha
 * @property string $avAviso
 */
class Aviso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aviso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('avTitulo', 'length', 'max'=>40),
			array('avAviso', 'length', 'max'=>767),
			array('avFecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('avCodigo, avTitulo, avFecha, avAviso', 'safe', 'on'=>'search'),
			array('avTitulo, avAviso', 'required'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'avCodigo' => 'Codigo',
			'avTitulo' => 'Titulo',
			'avFecha' => 'Fecha',
			'avAviso' => 'Aviso',
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

		$criteria->compare('avCodigo',$this->avCodigo,true);
		$criteria->compare('avTitulo',$this->avTitulo,true);
		$criteria->compare('avFecha',$this->avFecha,true);
		$criteria->compare('avAviso',$this->avAviso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aviso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
