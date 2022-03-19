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
    function check_login($User_login, $User_pass_login)
    { //check User_login and Pass_login in database
        $sql = "SELECT *
			FROM ttps_database.user_login AS ulog 
			WHERE User_login='$User_login' 
			AND User_pass_login = '$User_pass_login'
			";
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
        ON ulog.user_id = per.per_id";
        $query = $this->db->query($sql);
        return $query;
    } //end get_user_list

}//end class M_vos_user_login