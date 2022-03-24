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
                FROM  vos_database.vos_event
                -- LEFT JOIN vos_database.vos_event
                -- ON  vos_database.vos_event_group.evt_id =  vos_database.vos_event.evt_id";
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
}