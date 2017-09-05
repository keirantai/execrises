<?php

class ItemList {

	public $items = [];

	protected $_name=''; // list name
	protected $_prefix;

	public function __construct($name, $prefix=null) {
		$this->_name = $name;
		if (is_null($prefix)) {
			$prefix = $name . '-';
		}
		$this->_prefix = $prefix;
	}

	public static function create($name, $prefix=null, $min=10, $max=20) {
		$_instance = new self($name, $prefix);
		$length  = rand($min, $max);
		return $_instance->generate($length);
	}

	public function generate($length) {
		$this->items = [];
		for ($i=0; $i < $length; $i++) {
			$this->items[] = $this->_prefix . ($i + 1);
		}
		return $this;
	}

	public function appendTo(&$arr) {
		$arr[$this->_name] = $this;
	}

	public function __toString() {
		return json_encode($this->items);
	}

}