<?php

/**
 * This is the model class for table "sugerencias".
 *
 * The followings are the available columns in table 'sugerencias':
 * @property string $sgId
 * @property string $sfComentario
 * @property string $sfRespuesta
 * @property string $sfLeido
 * @property string $sfFecha
 * @property string $sfUsuario
 */
class Sugerencias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sugerencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sfComentario', 'required'),
			array('sfComentario, sfRespuesta', 'length', 'max'=>767),
			array('sfLeido', 'length', 'max'=>10),
			array('sfComentario',  'match', 'pattern'=>'/[a-zA-Z]/'
                , 'message'=>CrugeTranslator::t("Ingrese al menos una letra")),
			array('sfRespuesta',  'match', 'pattern'=>'/[a-zA-Z]/'
                , 'message'=>CrugeTranslator::t("Ingrese al menos una letra")),
			array('sfUsuario', 'length', 'max'=>13),
			array('sfFecha', 'safe'),


			array('sgId, sfComentario, sfRespuesta, sfLeido, sfFecha, sfUsuario', 'safe', 'on'=>'search'),
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
			'sgId' => 'N&uacutemero',
			'sfUsuario' => 'Usuario',
			'sfComentario' => 'Comentario',
			'sfRespuesta' => 'Respuesta',
			'sfLeido' => 'Estado',
			'sfFecha' => 'Fecha',
			
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

		$criteria->compare('sgId',$this->sgId,true);
		$criteria->compare('sfComentario',$this->sfComentario,true);
		$criteria->compare('sfRespuesta',$this->sfRespuesta,true);
		$criteria->compare('sfLeido',$this->sfLeido,true);
		$criteria->compare('sfFecha',$this->sfFecha,true);
		$criteria->compare('sfUsuario',$this->sfUsuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sugerencias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
