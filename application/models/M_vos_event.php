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
    public function get_amount_event()
    {
        $sql = "SELECT COUNT(evt_id) AS numEvent
                FROM vos_database.vos_event";
        $query = $this->db->query($sql)->result();
        return $query;
    }
    public function get_event_by_id()
    {
        $sql = "SELECT * 
        FROM vos_database.vos_event as Evnt WHERE Evnt.evt_id=?";
        $query = $this->db->query($sql, array($this->Evnt_id));
        return $query;
    }
    public function get_event_all_by_id($id)
    {
        $sql = "SELECT * 
        FROM vos_database.vos_event as Evnt WHERE Evnt.evt_id=$id";
        $query = $this->db->query($sql);
        return $query;
    }
 
}