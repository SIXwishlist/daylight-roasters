<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('Base_layout.php');

class Home_layout extends Base_layout {

	public $double_parse = TRUE;

	// --------------------------------------------------------------------

	/**
	 * Fields specific to the home page
	 *
	 * @access	public
	 * @return	array
	 */	
	function fields()
	{
		$fields = parent::fields();
		$this->section_fields();
		$this->meta_fields();
		return $this->fields;
	}

	// --------------------------------------------------------------------

	/**
	 * Hook used for processing variables specific to a layout
	 *
	 * @access	public
	 * @param	array	variables for the view
	 * @return	array
	 */	
	function pre_process($vars)
	{
		parent::pre_process($vars);
		return $vars;
	}

}