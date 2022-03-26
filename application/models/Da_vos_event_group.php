<?php
include_once("vos_model.php");

class Da_vos_event_group extends vos_model
{

	function __construct()
	{
		parent::__construct();
	}

	function insert_event_group()
    {
        $sql = "INSERT INTO vos_database.vos_event_group (grp_evt_id,grp_cls_id)
        VALUES (?,?)";
        $this->db->query($sql, array($this->grp_evt_id,$this->grp_cls_id));
        return $this->db->insert_id();
    }

	function delete_group_in_event()
    {
        $sql = "DELETE FROM vos_database.vos_event_group WHERE grp_cls_id = ?;";
        $query = $this->db->query($sql, array($this->Evnt_group_id));
        return $query;

    }


}