<?php

/**
 * This is the model class for table "visitadpto".
 *
 * The followings are the available columns in table 'visitadpto':
 * @property integer $vdCodigo
 * @property string $viRut
 * @property string $dlDireccion
 * @property string $vdFechaIngreso
 * @property string $caRut
 * @property string $vdFechaSalida
 *
 * The followings are the available model relations:
 * @property Visita $viRut0
 * @property Dptolocal $dlDireccion0
 * @property Conserjeadministrador $caRut0
 */
class Visitadpto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitadpto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('viRut', 'required'),
		//	array('viRut', 'validarClaveForanea'),
			array('viRut','exist','allowEmpty'=>true, 'attributeName'=>'viRut', 'className' => 'visita', 'message'=>
					'El {attribute}  No se encuentra en Nuestra base de Datos.'),
			array('viRut','match','pattern'=>'/^[0-9.kK-]{11,12}$/',
              'message'=>CrugeTranslator::t("El rut debe tener el formato '11.111.111-1'")),	
			array('viRut, caRut', 'length', 'max'=>13),
			array('dlDireccion', 'length', 'max'=>767),
			array('vdFechaIngreso, vdFechaSalida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('vdCodigo, viRut, dlDireccion, vdFechaIngreso, caRut, vdFechaSalida', 'safe', 'on'=>'search'),
		);
	}

	public function validarClaveForanea ($attribute, $param){
		$modelVisita = Visita::model()->findByPk($this->$attribute);
		if($modelVisita===null)
			$this->addError($attribute, 'Esta Visita No se encuentra Registrada en nuestra Base de Datos.');			
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'viRut0' => array(self::BELONGS_TO, 'Visita', 'viRut'),
			'dlDireccion0' => array(self::BELONGS_TO, 'Dptolocal', 'dlDireccion'),
			'caRut0' => array(self::BELONGS_TO, 'Conserjeadministrador', 'caRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vdCodigo' => 'Código Visita',
			'viRut' => 'Rut Visita',
			'dlDireccion' => 'Dirección',
			'vdFechaIngreso' => 'Fecha Ingreso',
			'caRut' => 'Rut Conserje',
			'vdFechaSalida' => 'Fecha Salida',
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

		$criteria->compare('vdCodigo',$this->vdCodigo);
		$criteria->compare('viRut',$this->viRut,true);
		$criteria->compare('dlDireccion',$this->dlDireccion,true);
		$criteria->compare('vdFechaIngreso',$this->vdFechaIngreso,true);
		$criteria->compare('caRut',$this->caRut,true);
		$criteria->compare('vdFechaSalida',$this->vdFechaSalida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitadpto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	//Esta funcion verifica si un rut determinado se encuentra en la tabla visitas
	public function rutExiste ($viRut){
		$modelVi = Visita::model()->findByPk($viRut);
		if($modelVi===null)
			return false;
		else if ($modelVi->viRut===null){
			return false;
		}
			
		return true;
	}

	//Esta funcion retorna todas las direcciones presentes en la tabla dptoLocal
	public function getDirecciones (){
		return CHtml::listData(Dptolocal::model()->findAll(), "dlDireccion", "dlDireccion");
	}

	public function getDatoVisita ($viRut, $dato){
		$visita = Visita::model()->findByPk($viRut);
		if($visita===null)
			throw new CHttpException(404,'La página solicitada No existe.');	
		else if ($visita->$dato===null)
			return '';
		return $visita->$dato;
	}
}
