<?php
/*
	* M_vos_user_login.php
    * M_vos_user_login เข้าสู่ระบบ
    * @Chakrit Boonprasert
    * @Create Date 2565-03-19
*/
defined('BASEPATH') or exit('No direct script access allowed');

include_once("Da_vos_user_login.php");


class M_vos_user_login extends vos_model
{ //class M_vos_user_login

    public function __construct()
    {
        parent::__construct();
    } //function construct

    /*
    * check_login
    * Check User_login and Pass_login in database
    * @input User_login and Pass_loginn
    * @output - 
    * @author Chakrit Boonprasert
    * @Create Date 2564-03-19
    */
    function check_login($user_name, $user_password)
    { //check User_login and Pass_login in database
        $sql = "SELECT *
			FROM vos_database.vos_user_login AS ulog 
			WHERE ulog.user_name='$user_name' 
			AND ulog.user_password = '$user_password'";
        $query = $this->db->query($sql);
        return $query;
    } //end check_login

    /*
    * get_user_list
    * get_user_list in database
    * @input -
    * @output user list
    * @author Apinya Phadungkit
    * @Create Date 2564-03-19
    */
    function get_user_list()
    {
        $sql = " SELECT *
        FROM vos_database.vos_user_login AS ulog 
        INNER JOIN vos_database.vos_person AS per
        ON ulog.user_per_id = per.per_id";
        $query = $this->db->query($sql);
        return $query;
    } //end get_user_list

    /*
    * get_user_edit
    * get_user_edit in database
    * @input -
    * @output user edit
    * @author Apinya Phadungkit
    * @Create Date 2564-03-21
    */
    function get_user_edit($id)
    {
        $sql = " SELECT *
        FROM vos_database.vos_user_login AS ulog 
        INNER JOIN vos_database.vos_person AS per
        ON ulog.user_per_id = per.per_id
        WHERE ulog.user_per_id = $id";
        $query = $this->db->query($sql);
        return $query;
    } //end get_user_edit

    /*
    * get_user_list
    * get_user_list in database
    * @input -
    * @output user list
    * @author Apinya Phadungkit
    * @Create Date 2564-03-19
    */
    function check_user_role()
    {
        $sql = " SELECT *
        FROM vos_database.vos_user_login AS ulog 
        INNER JOIN vos_database.vos_person AS per
        ON ulog.user_per_id = per.per_id
        WHERE ulog.user_role = ?";
        $query = $this->db->query($sql, array($this->user_role));
        return $query;
    } //end get_user_list

    function check_user_name()
    {
        $sql = "SELECT *
        FROM vos_database.vos_user_login
        WHERE user_name = ?";
        $query = $this->db->query($sql, array($this->username));
        return $query;
    }
}//end class M_vos_user_login