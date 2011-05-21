<?php 
class DirTest extends Controller {
	
	function __construct() {
		parent::Controller();
		
	}
	
	public function index() {
		
	}
	
	private function getDataDir() {
		$dataPath = 'data/mysql-backups/rules_backup 20071010 2313.sql';
		return str_replace( 'system/', $dataPath, BASEPATH );
	}
}
?>