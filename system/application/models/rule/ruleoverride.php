<?php

class RuleOverride extends Model {
	var $ruleName;
	var $value;
	var $who;
	var $why;
	var $when;
	
	function RuleOverride( $ruleName, $value, $who, $why, $when ) {
		$this->ruleName = $ruleName;
		$this->value = $value;
		$this->who = $who;
		$this->why = $why;
		$this->when = $when;
	}
	
	function __construct( $ruleName, $value, $who, $why, $when ) {
		$this->ruleName = $ruleName;
		$this->value = $value;
		$this->who = $who;
		$this->why = $why;
		$this->when = $when;
	}
}

?>