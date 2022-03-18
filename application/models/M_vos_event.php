<?php
include_once("Da_vos_event.php");

class M_vos_event extends Da_vos_event
{

	function __construct()
	{
		parent::__construct();
	}

    public function get_event_all()
    {
        $sql = "SELECT *
                FROM vos_database.vos_event";
        $query = $this->db->query($sql);
        return $query;
    }

}