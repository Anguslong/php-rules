<?php
class Tests extends Controller {

	function Tests(){
		parent::Controller();
		$this->load->library('unit_test');
	}
	
	function index(){
		
		
		$this->load->view('unit-tests/test-suite');
	}
	
	function testProposition(){
	
	}
	
	function testVariable(){
	
	}
	
	function testOperator(){
	
	}
	
	function testRule(){
	
	}
	
	function testRuleContext(){
	
	}
	
	function testRuleEvaluation(){
	
	}
	
	function testRuleSet(){
	
	}
	
	function testActivityRule(){
	
	}

}

