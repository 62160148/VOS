<?php
include_once("vos_model.php");

class Da_vos_event extends vos_model
{

	function __construct()
	{
		parent::__construct();
	}

	function insert_event()
    {
        $sql = "INSERT INTO vos_database.vos_event (evt_name,evt_detail,evt_image, evt_start_date,evt_end_date)
        VALUES (?,?,?,?,?)";
        $this->db->query($sql, array($this->evt_name,$this->evt_detail, $this->evt_image,$this->evt_start_date,$this->evt_end_date));
        return $this->db->insert_id();
    }

    function update_event()
    {
        $sql = "UPDATE vos_database.vos_event 
        SET evt_name=?,
            evt_detail=?,
            evt_start_date=?,
            evt_end_date=?  
        WHERE evt_id = ?";
        $this->db->query($sql, array($this->evt_name,$this->evt_detail,$this->evt_start_date,$this->evt_end_date,$this->evt_id));
    }

    
    function delete_event()
    {
        $sql = "DELETE FROM vos_database.vos_event WHERE evt_id = ?;";
        $query = $this->db->query($sql, array($this->evt_id));
        return $query;

    }


}