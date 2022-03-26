<?php
include_once("vos_model.php");

class Da_vos_point extends vos_model
{

	function __construct()
	{
		parent::__construct();
	}

	function insert_point()
	{

		$sql = "INSERT INTO vos_database.vos_point (
                pot_evt_id, 
                pot_point, 
                pot_top_id, 
                pot_per_id)

            VALUES (?,?,?,?)";

		$this->db->query($sql, array($this->pot_evt_id, $this->pot_point, $this->pot_top_id, $this->pot_per_id));
	}
}
