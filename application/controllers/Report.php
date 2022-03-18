<?php
/*
    * Result
    * Controller for Result module
    * @author Ponprapai Atsawanurak and Phatchara Khongthandee
    * @Create Date 2565-01-25
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

//Start class Result
class Report extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function show_dashboard()
    {
        $this->load->model('M_vos_event_group', 'group');
        $this->load->model('M_vos_event', 'event');
        $this->load->model('M_vos_person', 'person');

        $data['arr_evg'] = $this->group->get_event_group_all()->result();
        $data['arr_num'] = $this->event->get_event_all()->result();
        $data['arr_per'] = $this->person->get_per_all()->result();
        $this->output('consent/v_dashboard', $data);
    }
}