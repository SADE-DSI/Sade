<?php

/**
 * This is the model class for table "material".
 *
 * The followings are the available columns in table 'material':
 * @property integer $maCodigo
 * @property string $maNombre
 * @property string $maDescripcion
 * @property integer $maEstado
 */
class Material extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('maNombre', 'required'),
			array('maNombre', 'length', 'max'=>20,'min'=>3),
			array('maNombre','match','pattern'=>'/^[a-zA-Z\s]{3,20}$/',
				 'message'=>CrugeTranslator::t("El nombre deben ser solo letras")),
			array('maDescripcion', 'length', 'max'=>767),
			array('maDescripcion',  'match', 'pattern'=>'/.[a-zA-Z]{2,255}/', 
                'message'=>CrugeTranslator::t("Ingrese al menos una palabra")),
			array('maEstado', 'length', 'max'=>10),
			array('maEstado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('maCodigo, maNombre, maDescripcion, maEstado', 'safe', 'on'=>'search'),
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
			'maCodigo' => 'Código',
			'maNombre' => 'Nombre',
			'maDescripcion' => 'Descripción',
			'maEstado' => 'Estado',
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

		$criteria->compare('maCodigo',$this->maCodigo);
		$criteria->compare('maNombre',$this->maNombre,true);
		$criteria->compare('maDescripcion',$this->maDescripcion,true);
		$criteria->compare('maEstado',$this->maEstado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Material the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
