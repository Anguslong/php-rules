<?php

class TestRuleLibraryVariable extends UnitTestCase {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function setUp()
	{
		$this->vInt = new Variable('maxNumPeople',10);
		$this->vStr = new Variable('ticketType','firstClass');
		$this->vFlt = new Variable('saleAmount',99.95);
    }

    public function tearDown()
	{

    }
	
	// Integer data type tests
	
	public function testVariableInt_getType()
	{
		$this->assertEqual($this->vInt->getType(), 'Variable');
	}
	
	public function testVariableInt_toString()
	{
		$this->assertEqual($this->vInt->toString(), 'Variable name = maxNumPeople, value = 10');
	}
	
	public function testVariableInt_equalTo()
	{
		$v = new Variable('actNumbPeople',10);
		$this->assertTrue($this->vInt->equalTo($v));
	}
	
	public function testVariableInt_notEqualTo()
	{
		$v = new Variable('actNumbPeople',11);
		$this->assertTrue($this->vInt->notEqualTo($v)->value);
		$v->value = 9;
		$this->assertTrue($this->vInt->notEqualTo($v)->value);
		$v->value = 10.001;
		$this->assertTrue($this->vInt->notEqualTo($v)->value);
	}
	
	public function testVariableInt_lessThan()
	{
		$v = new Variable('actNumbPeople',11);
		$this->assertTrue($this->vInt->lessThan($v)->value);
		$v->value = 9;
		$this->assertFalse($this->vInt->lessThan($v)->value);
		$v->value = 10.001;
		$this->assertTrue($this->vInt->lessThan($v)->value);		
	}
	
	public function testVariableInt_lessThanOrEqualTo()
	{
		$v = new Variable('actNumbPeople',11);
		$this->assertTrue($this->vInt->lessThanOrEqualTo($v)->value);
		$v->value = 9;
		$this->assertFalse($this->vInt->lessThanOrEqualTo($v)->value);
		$v->value = 10.001;
		$this->assertTrue($this->vInt->lessThanOrEqualTo($v)->value);
		$v->value = 10;	
		$this->assertTrue($this->vInt->lessThanOrEqualTo($v)->value);
	}
	
	public function testVariableInt_greaterThan()
	{
		$v = new Variable('actNumbPeople',11);
		$this->assertFalse($this->vInt->greaterThan($v)->value);
		$v->value = 9;
		$this->assertTrue($this->vInt->greaterThan($v)->value);
		$v->value = 10.001;
		$this->assertFalse($this->vInt->greaterThan($v)->value);
		$v->value = 10;	
		$this->assertFalse($this->vInt->greaterThan($v)->value);
	}
	
	public function testVariableInt_greaterThanOrEqualTo()
	{
		$v = new Variable('actNumbPeople',11);
		$this->assertFalse($this->vInt->greaterThanOrEqualTo($v)->value);
		$v->value = 9;
		$this->assertTrue($this->vInt->greaterThanOrEqualTo($v)->value);
		$v->value = 10.001;
		$this->assertFalse($this->vInt->greaterThanOrEqualTo($v)->value);
		$v->value = 10;	
		$this->assertTrue($this->vInt->greaterThanOrEqualTo($v)->value);
	}
	
	// String data type tests
	
	public function testVariableStr_getType()
	{
		$this->assertEqual($this->vStr->getType(), 'Variable');
	}
	
	public function testVariableStr_toString()
	{
		$this->assertEqual($this->vStr->toString(), 'Variable name = ticketType, value = firstClass');
	}
	
	public function testVariableStr_equalTo()
	{
		$v = new Variable('actTicketType','firstClass');
		$this->assertTrue($this->vStr->equalTo($v));
	}
	
	public function testVariableStr_notEqualTo()
	{
		$v = new Variable('actTicketType','coach');
		$this->assertTrue($this->vStr->notEqualTo($v)->value);
	}
	
	public function testVariableStr_lessThan()
	{
		$v = new Variable('actTicketType','koach');
		$this->assertTrue($this->vStr->lessThan($v)->value);
	}
	
	public function testVariableStr_lessThanOrEqualTo()
	{
		$v = new Variable('actTicketType','firstClass');
		$this->assertTrue($this->vStr->lessThanOrEqualTo($v)->value);
		$v->value = 'secondClass';
		$this->assertTrue($this->vStr->lessThanOrEqualTo($v)->value);
		$v->value = 's';
		$this->assertTrue($this->vStr->lessThanOrEqualTo($v)->value);
	}
	
	public function testVariableStr_greaterThan()
	{
		$v = new Variable('actTicketType','coach');
		$this->assertTrue($this->vStr->greaterThan($v)->value);
		$v->value = 'e';
		$this->assertTrue($this->vStr->greaterThan($v)->value);
	}
	
	public function testVariableStr_greaterThanOrEqualTo()
	{
		$v = new Variable('actTicketType','coach');
		$this->assertTrue($this->vStr->greaterThanOrEqualTo($v)->value);
		$v->value = 'firstClass';
		$this->assertTrue($this->vStr->greaterThanOrEqualTo($v)->value);
		$v->value = 'e';
		$this->assertTrue($this->vStr->greaterThanOrEqualTo($v)->value);
	}

	// Float data type tests
	
	public function testVariableFlt_getType()
	{
		$this->assertEqual($this->vFlt->getType(), 'Variable');
	}
	
	public function testVariableFlt_toString()
	{
		$this->assertEqual($this->vFlt->toString(), 'Variable name = saleAmount, value = 99.95');
	}
	
	public function testVariableFlt_equalTo()
	{
		$v = new Variable('retail',99.95);
		$this->assertTrue($this->vFlt->equalTo($v));
	}
	
	public function testVariableFlt_notEqualTo()
	{
		$v = new Variable('retail',99.94);
		$this->assertTrue($this->vFlt->notEqualTo($v)->value);
		$v = new Variable('retail',99.96);
		$this->assertTrue($this->vFlt->notEqualTo($v)->value);
		$v = new Variable('retail',99.955);
		$this->assertTrue($this->vFlt->notEqualTo($v)->value);
	}
	
	public function testVariableFlt_lessThan()
	{
		$v = new Variable('retail',99.96);
		$this->assertTrue($this->vFlt->lessThan($v)->value);
		$v = new Variable('retail',99.95001);
		$this->assertTrue($this->vFlt->lessThan($v)->value);
	}
	
	public function testVariableFlt_lessThanOrEqualTo()
	{
		$v = new Variable('retail',99.96);
		$this->assertTrue($this->vFlt->lessThanOrEqualTo($v)->value);
		$v = new Variable('retail',99.95001);
		$this->assertTrue($this->vFlt->lessThanOrEqualTo($v)->value);
		$v = new Variable('retail',99.95000);
		$this->assertTrue($this->vFlt->lessThanOrEqualTo($v)->value);
	}
	
	public function testVariableFlt_greaterThan()
	{
		$v = new Variable('retail',99.95);
		$this->assertFalse($this->vFlt->greaterThan($v)->value);
		$v->value = .0001;
		$this->assertTrue($this->vFlt->greaterThan($v)->value);
	}
	
	public function testVariableFlt_greaterThanOrEqualTo()
	{
		$v = new Variable('retail',99.95);
		$this->assertTrue($this->vFlt->greaterThanOrEqualTo($v)->value);
		$v->value = .0001;
		$this->assertTrue($this->vFlt->greaterThanOrEqualTo($v)->value);
	}
	
	// NULL data type tests
}