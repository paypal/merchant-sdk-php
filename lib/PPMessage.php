<?php

/**
 * @author 
 */
abstract class PPMessage
{

	/**
	 * @param string $prefix
	 * @return string
	 */
	public function toNVPString($prefix = '')
	{
		$nvp = array();
		foreach (get_object_vars($this) as $property => $defaultValue) {
			
			if (($propertyValue = $this->{$property}) === NULL || $propertyValue == NULL) {
				continue;
			}

			if (is_object($propertyValue)) {
				$nvp[] = $propertyValue->toNVPString($prefix . $property . '.'); // prefix

			} elseif (is_array($defaultValue) || is_array($propertyValue)) {
				foreach (array_values($propertyValue) as $i => $item) {
					if (!is_object($item)){
                        $nvp[] = $prefix . $property . "($i)" . '=' . urlencode($item);
					}else{
                        $nvp[] = $item->toNVPString($prefix . $property . "($i).");
                    }
				}

			} else {
				$nvp[] = $prefix . $property . '=' . urlencode($propertyValue);
			}
		}

		return implode('&', $nvp);
	}



	/**
	 * @param array $map
	 * @param string $prefix
	 */
	public function init(array $map = array(), $prefix = '')
	{
		if (empty($map)) {
			return;
		}

		$map = PPUtils::lowerKeys($map);
		foreach (get_object_vars($this) as $property => $defaultValue) {
			if (array_key_exists($propKey = strtolower($prefix . $property), $map)) {
				$this->{$property} = $map[$propKey];
				continue; // string

			} elseif (!$filtered = PPUtils::filterKeyPrefix($map, $propKey)) {
				continue; // NULL
			}

			if (!class_exists($type = PPUtils::propertyType($this, $property))) {
				trigger_error("Class $type not found.", E_USER_NOTICE);
				continue; // just ignore
			}

			if (is_array($defaultValue) || PPUtils::isPropertyArray($this, $property)) { // array of objects
				for ($i = 0; $itemValues = PPUtils::filterKeyPrefix($filtered, "($i).") ;$i++) {
					$this->{$property}[] = $item = new $type();
					$item->init($itemValues);
				}

			} else { // one object
				$this->{$property} = new $type();
				$this->{$property}->init(PPUtils::filterKeyPrefix($filtered, '.')); // unprefix
			}
		}
	}

}
