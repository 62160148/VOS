<?php
/*
    * Vote
    * Controller for Vote module
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-23
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Vote extends MainController
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    function event_list()
	{
		$this->load->model('M_vos_event', 'vos');
		$data['arr_event'] = $this->vos->get_event_all()->result();
		$this->output("consent/v_vote", $data);
	}
}
