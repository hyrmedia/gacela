<?php
/** 
 * @author noah
 * @date 3/19/11
 * @brief
 * 
*/

namespace Gacela\Field;

class Enum extends Field{

	public function validate($value)
	{
		if(is_null($value)) return $this->null;

		return in_array($value, $this->values);
	}

	public function transform($value, $in = true)
	{
		return $value;
	}
}