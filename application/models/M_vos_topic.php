<?php
include_once("Da_vos_topic.php");

class M_vos_topic extends Da_vos_topic
{

	function __construct()
	{
		parent::__construct();
	}
 
    public function get_topic_by_id()
    {
                    $sql = "SELECT * FROM vos_database.vos_topic  
                    WHERE top_evt_id = ?";
         $query = $this->db->query($sql, array($this->Evnt_group_id));
        return $query;
    }
 
}