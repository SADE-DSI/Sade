<?php
class MyValidator extends CValidator
{
	public function validateAttribute ($object, $attribute)
	{
		if($object->$attribute != 'Si' && $object->$attribute != 'No')
			$this->addError($object, $attribute, 'Solo acepta las palabras "Si" o "No"');
	}
}