<?php

namespace WilliamVenner;

class QuillToPlaintext {
	public function Convert($delta) {
		$delta_obj;
		if (is_string($delta))
			$delta_obj = json_decode($delta);
		elseif (is_object($delta))
			$delta_obj = $delta;
		
		if (!isset($delta_obj) || !isset($delta -> ops))
			throw new Exception('Can\'t convert invalid Quill Delta to plaintext!');
		
		$plaintext = '';
		foreach($delta_obj -> ops as $op) {
			if (isset($op -> insert)) {
				if (is_string($op -> insert))
					$plaintext .= $op -> insert;
				else
					$plaintext .= ' ';
			}
		}
		return $plaintext;
	}
}