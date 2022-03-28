<?php
include_once("Da_vos_point.php");

class M_vos_point extends Da_vos_point
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_score_to_chart()
    {
        $sql = "SELECT * 
                FROM vos_database.vos_point AS pot
                INNER JOIN vos_database.vos_topic AS toc
                ON pot.pot_top_id = toc.top_id
                ORDER BY pot.pot_top_id ASC";
        $query = $this->db->query($sql);
        return $query;
    }
 
}