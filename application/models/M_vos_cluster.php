<?php
include_once("Da_vos_cluster.php");

class M_vos_cluster extends Da_vos_cluster
{

	function __construct()
	{
		parent::__construct();
	}

    public function get_amount_cluster()
    {
        $sql = "SELECT COUNT(cls_id) as numclus FROM vos_database.vos_event_group AS gro
        INNER JOIN vos_database.vos_cluster AS clus
        ON gro.grp_cls_id = clus.cls_id
        WHERE gro.grp_evt_id=?";
        $query = $this->db->query($sql, array($this->Evnt_group_id));
        return $query;
    }
    
    public function get_cluster_by_id_event()
    {
        $sql = "SELECT * FROM vos_database.vos_event_group AS gro
        INNER JOIN vos_database.vos_cluster AS clus
        ON gro.grp_cls_id = clus.cls_id
        WHERE gro.grp_evt_id=?";
        $query = $this->db->query($sql, array($this->Evnt_group_id));

        return $query;
    }


    


    public function get_cluster_by_id_not_in_event()
    {
        $sql = " SELECT   * 
        FROM    vos_database.vos_cluster AS clus
        WHERE  clus.cls_id NOT IN
        (   SELECT  grp_cls_id
            FROM  vos_database.vos_event_group 
            WHERE grp_evt_id=? )";
        $query = $this->db->query($sql, array($this->Evnt_group_id));

        return $query;
    }
 
}