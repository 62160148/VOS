<?php
include_once("Da_vos_event_group.php");

class M_vos_event_group extends Da_vos_event_group
{

	function __construct()
	{
		parent::__construct();
	}

    public function get_event_group_all()
    {
        $sql = "SELECT * FROM vos_database.vos_event_group AS event_group
                    INNER JOIN vos_database.vos_event AS event_list
                    ON event_group.grp_evt_id =  event_list.evt_id
                    INNER JOIN vos_database.vos_cluster AS cluster
                    ON  event_group.grp_cls_id = cluster.cls_id
                    GROUP BY event_group.grp_evt_id";
        $query = $this->db->query($sql);
        return $query;
    }

}