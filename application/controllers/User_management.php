<?php
/*
* User_Management
* Controller for User_Management module   
* @author Apinya Phadungkit
* @Create Date 2565-03-10
* @Update Date 2565-03-10
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class User_Management extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
	* show_user_management
	* display view user list management
	* @input  -
	* @output  User list
	* @author  Apinya Phadungkit
	* @Create  Date 2565-03-10
    * @Update  Date 2565-03-10
    */
    public function show_user_management()
    {
        // $this->load->model('M_pef_group_assessor', 'mpef');
        // $this->load->model('M_pef_assessor_position', 'map');
        // $data['arr_group'] = $this->mpef->get_group_assessor_all()->result();
        // $data['arr_position'] = $this->map->get_position_all()->result();
        // print_r($data['arr_position']);
        // print_r($data);
        // $this->output('consent/v_assessor_management', $data);
        $this->output('consent/v_user_management');
        
    }
    public function show_add_user()
    {
        $this->output('consent/v_add_user');
        
    }
}