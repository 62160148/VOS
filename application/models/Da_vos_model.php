<?php
class vos_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->pefs = $this->load->database('vos', TRUE);
	}
}