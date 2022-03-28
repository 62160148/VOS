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
		$this->output("consent/v_list_event", $data);
	}

    function vote($id)
	{
        $this->load->model('M_vos_event', 'vos');
		$data['arr_event'] = $this->vos->get_event_all_by_id($id)->row();
		$this->output("consent/v_vote", $data);
	}

    public function get_point()
	{
		$this->load->model('M_vos_point', 'poi');
		$data = $this->poi->get_score_to_chart()->result();
		echo json_encode($data);
	}

	public function vote_cluster()
    {
        $cluster = $this->input->post('cluster');
        $point  = $this->input->post('point');
        $evt_id  = $this->input->post('evt_id');
        $per_id = $this->input->post('per_id');
        $this->load->model('Da_vos_point', 'vos');
        $this->vos->pot_evt_id  = $evt_id;
        $this->vos->pot_point = $point;
        $this->vos->pot_top_id = $cluster;
        $this->vos->pot_per_id = $per_id;
        $this->vos->insert_point();

        $this->load->model('Da_vos_person', 'per');
		$result = $_SESSION['UsPoint'];
		$result = $result -  $point;
        $this->per->per_point = $result;
        $this->per->update_score($per_id);
	
        Redirect('/Vote/vote/' . $evt_id);
    }
}
