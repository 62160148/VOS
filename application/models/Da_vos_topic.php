<?php
include_once("vos_model.php");

class Da_vos_topic extends vos_model
{

	function __construct()
	{
		parent::__construct();
	}
	function insert_event_choice()
    {
        $sql = "INSERT INTO vos_database.vos_topic (top_evt_id,top_name)
        VALUES (?,?)";
        $this->db->query($sql, array($this->event_id,$this->newchoice));
        return $this->db->insert_id();
    }

	function deletet_event_choice()
    {
        $sql = "DELETE FROM vos_database.vos_topic WHERE top_id = ?;";
        $query = $this->db->query($sql, array($this->top_id));
        return $query;

    }
}