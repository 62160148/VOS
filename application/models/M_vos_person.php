<?php
include_once("Da_vos_person.php");

class M_vos_person extends Da_vos_person
{

	function __construct()
	{
		parent::__construct();
	}

    public function get_per_all()
    {
        $sql = "SELECT *
                FROM vos_database.vos_person";
        $query = $this->db->query($sql);
        return $query;
    }

}