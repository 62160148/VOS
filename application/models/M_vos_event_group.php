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
        
        
        $sql = "SELECT * FROM vos_database.vos_event_group AS grevent
                    INNER JOIN vos_database.vos_event AS event
                    ON grevent.grp_evt_id =  event.evt_id
                    INNER JOIN vos_database.vos_cluster AS cluster
                    ON  grevent.grp_cls_id = cluster.cls_id
                WHERE grevent.grp_evt_id =  event.evt_id
                GROUP BY grevent.grp_evt_id";
        $query = $this->db->query($sql);
        return $query;
    }

}