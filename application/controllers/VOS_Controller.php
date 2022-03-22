<?php
/*
* VOS_Controller
* @input  -   
* @output -
* @author Team 6
* @Create Date 2565-03-10
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class VOS_Controller extends MainController
{

	function index()
	{
		// $this->output('Main_index');
		$this->output_login("auth/v_user_login");
	}
	// function index()
	function event_list()
	{
		$this->load->model('M_vos_event', 'vos');
		$data['arr_event'] = $this->vos->get_event_all()->result();
		$this->output_login("consent/v_list_event", $data);
	}

}
// 