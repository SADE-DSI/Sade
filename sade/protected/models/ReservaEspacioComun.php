<?php

/**
 * This is the model class for table "reservaespaciocomun".
 *
 * The followings are the available columns in table 'reservaespaciocomun':
 * @property string $reFechaInicio
 * @property string $adRut
 * @property string $ecCodigo
 * @property string $reFechaFin
 *
 * The followings are the available model relations:
 * @property Espaciocomun $ecCodigo0
 * @property Arrendatariodueno $adRut0
 */
class Reservaespaciocomun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservaespaciocomun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reFechaInicio, adRut, ecCodigo, reFechaFin', 'required'),
			array('adRut', 'length', 'max'=>13),
			array('ecCodigo', 'length', 'max'=>30),
			array('adRut','validateRut'),

			array('reFechaInicio', 'date', 'format'=>'yyyy-M-d'),
			array('reFechaFin', 'date', 'format'=>'yyyy-M-d'),
			

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reFechaInicio, adRut, ecCodigo, reFechaFin', 'safe', 'on'=>'search'),
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
			'ecCodigo0' => array(self::BELONGS_TO, 'Espaciocomun', 'ecCodigo'),
			'adRut0' => array(self::BELONGS_TO, 'Arrendatariodueno', 'adRut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reFechaInicio' => 'Fecha Inicio',
			'adRut' => 'Rut',
			'ecCodigo' => 'Codigo',
			'reFechaFin' => 'Fecha Fin',
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

		$criteria->compare('reFechaInicio',$this->reFechaInicio,true);
		$criteria->compare('adRut',$this->adRut,true);
		$criteria->compare('ecCodigo',$this->ecCodigo,true);
		$criteria->compare('reFechaFin',$this->reFechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservaespaciocomun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validateRut($attribute,$params){
		$rut = $this->adRut;
		$suma = "";
		if(strpos($rut,"-")==false){
	        $RUT[0] = substr($rut, 0, -1);
	        $RUT[1] = substr($rut, -1);
	    }else{
	        $RUT = explode("-", trim($rut));
	    }
	    $elRut = str_replace(".", "", trim($RUT[0]));
	    $factor = 2;
	    for($i = strlen($elRut)-1; $i >= 0; $i--):
	        $factor = $factor > 7 ? 2 : $factor;
	        $suma += $elRut{$i}*$factor++;
	    endfor;
	    $resto = $suma % 11;
	    $dv = 11 - $resto;
	    if($dv == 11){
	        $dv=0;
	    }else if($dv == 10){
	        $dv="k";
	    }else{
	        $dv=$dv;
	    }
	   if($dv == trim(strtolower($RUT[1]))){
	       return true;
	   }else{
	       $this->addError($attribute, 'El rut ingresado NO es válido');
	   }
	}
}
