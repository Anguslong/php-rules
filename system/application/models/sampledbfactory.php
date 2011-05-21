<?php

class SampleDbFactory extends Model {
	
	public function SampleDbFactory(){
		parent::Model();
		$this->load->dbforge();
	}
	
	public function create(){
		// Create the tables
		$finished  = $this->createTables();
		// Insert the data
		$finished &= $this->insertData();
		return $finished;
	}
	
	private function createTables(){
		$created  = $this->createVariablesTable();
		$created &= $this->createPassengersTable();
		$created &= $this->createBaggageTable();
		return $created;
	}
	
	private function insertData(){
		$inserted  = $this->insertVariablesData();
		$inserted &= $this->insertPassengersData();
		$inserted &= $this->insertBaggageData();
		return $inserted;
	}
	
	private function createVariablesTable(){
		$tableName = $this->getTableName('variables');
		
		// Create the id
		$this->dbforge->add_field('id');
		
		// Create remaining fields
		$fields = array(
			'name'  => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => FALSE
			),
			'value' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => FALSE
			)
		);
		
		// Add the remaining fields
		$this->dbforge->add_field($fields);
		
		// Drop the table if it already exists
		$this->dbforge->drop_table($tableName);
		
		// Create the table
		return $this->dbforge->create_table($tableName);
	}
	
	private function createPassengersTable(){
		$tableName = $this->getTableName('passengers');
		
		// Create the id
		$this->dbforge->add_field('id');
		
		// Create remaining fields
		$fields = array(
			'class'     => array(
				'type'       => 'VARCHAR',
				'constraint' => '45',
				'null'       => FALSE,
				'default'    => 'economy'
			),
			'card_type' => array(
				'type'       => 'VARCHAR',
				'constraint' => '45',
				'null'       => TRUE
			)
		);
		
		// Add the remaining fields
		$this->dbforge->add_field($fields);
		
		// Drop the table if it already exists
		$this->dbforge->drop_table($tableName);
		
		// Create the table
		return $this->dbforge->create_table($tableName);
	}
	
	private function createBaggageTable(){
		$tableName = $this->getTableName('baggage');
		
		// Create the id
		$this->dbforge->add_field('id');
		
		// Create remaining fields
		$fields = array(
			'passenger_id' => array(
				'type'       => 'INT',
				'null'       => FALSE
			),
			'weight'       => array(
				'type'       => 'FLOAT',
				'unsigned'   => TRUE,
				'null'       => FALSE,
				'default'    => '0'
			)
		);
		
		// Add the remaining fields
		$this->dbforge->add_field($fields);
		
		// Drop the table if it already exists
		$this->dbforge->drop_table($tableName);
		
		// Create the table
		return $this->dbforge->create_table($tableName);
	}
	
	private function insertVariablesData(){
		$tableName = $this->getTableName('variables');
		$sql = "INSERT INTO " . $tableName . " (id,name,value) VALUES (1,'passengerCarryOnBaggageAllowance','15.0');";
		return $this->db->query($sql);
	}
	
	private function insertPassengersData(){
		$tableName = $this->getTableName('passengers');
		$sql = "INSERT INTO " . $tableName . " (id,class,card_type) VALUES (3,'business','gold'), (4,'economy','silver'), (5,'economy',NULL);";
		return $this->db->query($sql);
	}
	
	private function insertBaggageData(){
		$tableName = $this->getTableName('baggage');
		$sql = "INSERT INTO " . $tableName . " (id,passenger_id,weight) VALUES (1,3,10.5),(2,4,10),(3,5,5.5);";
		return $this->db->query($sql);
	}
	
	private function getTableName($name){
		return $this->db->database . '.' . $name;
	}
}