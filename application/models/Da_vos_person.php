<?php
include_once("vos_model.php");

class Da_vos_person extends vos_model
{

	function __construct()
	{
		parent::__construct();
	}

	/*
    * Function update_edit
    * @input  $id  
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2565-3-24
    * @Update Date 2565-3-24
    */
	function update_edit($id)
    {
        $sql = "UPDATE vos_database.vos_person AS per
		SET per.per_name = ? , per.per_lastname = ? , per.per_email = ? , per.per_image = ? , per.per_point = ? , per.per_cls_id = ?
		WHERE per.per_id = $id";
        $this->db->query($sql, array($this->per_name,$this->per_lastname, $this->per_email,$this->per_image,$this->per_point,$this->per_cls_id));
        // return $this->db->insert_id();
    }

}