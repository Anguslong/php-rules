<?php
class Custodian extends Controller {
	private $appPhysicalPath = null;
	
	function __construct() {
		parent::Controller();
		$this->load->helper( 'file' );
		$this->load->helper('url');
		$this->dataFolderPath = FCPATH.'data/';
		$this->ruleText = read_file( 'data/SuitableForUpgrade.rul' );
	}
	
	public function loadSql($id) {
		$strategy = new SqlFileLoaderStrategy();
		$loader = new RuleLoader();
		$loader->setStrategy($strategy);
		$data['rule'] = $loader->loadRule($this->dataFolderPath . 'SuitableForUpgrade.rul');
		$data['ruleContext'] = $loader->loadRuleContext($this->dataFolderPath . 'SuitableForUpgrade.sql.con', $id);
		$data[ 'result' ] = $data[ 'rule' ]->evaluate( $data[ 'ruleContext' ] );
		$data[ 'ruleText' ] = $this->ruleText;
		$data[ 'ruleContextText' ] = read_file( 'data/SuitableForUpgrade.sql.con' );
		$this->load->view( 'ruleview', $data );
	}
	
	public function loadTxt($id) {
		$strategy = new TxtFileLoaderStrategy();
		$loader = new RuleLoader();
		$loader->setStrategy($strategy);
		$data['rule'] = $loader->loadRule($this->dataFolderPath . 'SuitableForUpgrade.rul');
		$data['ruleContext'] = $loader->loadRuleContext($this->dataFolderPath . 'SuitableForUpgrade.txt.con', $id);
		$data[ 'result' ] = $data[ 'rule' ]->evaluate( $data[ 'ruleContext' ] );
		$data[ 'ruleText' ] = $this->ruleText;
		$data[ 'ruleContextText' ] = read_file( 'data/SuitableForUpgrade.txt.con' );
		$this->load->view( 'ruleview', $data );
	}
}
