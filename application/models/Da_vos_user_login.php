<?php
/*
	* Da_vos_user_login.php
    * Da_vos_user_login เข้าสู่ระบบ
    * @Chakrit Boonprasert
    * @Create Date 2565-03-19
*/
defined('BASEPATH') OR exit('No direct script access allowed');

include_once ('vos_model.php');

class Da_vos_user_login extends vos_model
{//class Da_vos_user_login
    

	public function __construct()
	{
        parent::__construct();
	}

    
    function insert_person()
    {
        $sql = "INSERT INTO vos_database.vos_person (per_name, per_lastname, per_email,  per_image, per_point, per_cls_id)
        VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, array($this->per_name,$this->per_lastname, $this->per_email,$this->per_image,$this->per_point,$this->per_cls_id));
        return $this->db->insert_id();
    }
    function insert_user_login()
    {
        $sql = "INSERT INTO vos_database.vos_user_login (user_name, user_password,  user_role, user_per_id)
        VALUES (?,?,?,?)";
        $this->db->query($sql, array($this->user_name,$this->user_password, $this->user_role,$this->user_per_id));
        return $this->db->insert_id();

    }
    function delete_person()
    {
        $sql = "DELETE FROM vos_database.vos_person WHERE per_id = ?;";
        $query = $this->db->query($sql, array($this->per_id));
        return $query;

    }

    /*
    * Function update_edit_user_login
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2565-3-24
    * @Update Date 2565-3-24
    */
    function update_user_login2($id)
    {
        $sql = "UPDATE vos_database.vos_user_login SET(user_name, user_password, user_role, user_per_id)
        VALUES (?,?,?,?)";
        $this->db->query($sql, array($this->user_name,$this->user_password, $this->user_role,$this->user_per_id));
        // return $this->db->insert_id();

    } //update_edit_user_login

    function update_user_login($id)
    {
        $sql = "UPDATE vos_database.vos_user_login AS lo
		SET lo.user_name = ? , lo.user_password = ? , lo.user_role = ? , lo.user_per_id = ?
		WHERE lo.user_per_id = $id";
        $this->db->query($sql, array($this->user_name,$this->user_password, $this->user_role,$this->user_per_id));
        // return $this->db->insert_id();
    }

}//end class Da_vos_user_login