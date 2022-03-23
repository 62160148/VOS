<?php
include_once("Da_vos_person.php");

class M_vos_person extends Da_vos_person
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_per_all()
    {
        $sql = "SELECT *
                FROM vos_database.vos_person";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_amount_person()
    {
        $sql = "SELECT COUNT(per_id) AS numPerson
                FROM vos_database.vos_person";
        $query = $this->db->query($sql)->result();
        return $query;
    }

    /*
    * get_emp
    * get Per_ID in database
    * @input  -
    * @output - 
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-23
    */
    public function get_per()
    { //get Emp_ID
        $sql = "SELECT * 
        FROM vos_database.vos_person AS per
        INNER JOIN vos_database.vos_user_login AS ulog
        ON per.per_id = ulog.user_per_id
        WHERE per.per_id=?";
        $query = $this->db->query($sql, array($this->per_id));
        return $query;
    } //end get_emp
}
