<?php
/*
    * Result
    * Controller for Result module
    * @author Ponprapai Atsawanurak Phatchara Khongthandee and Thitima Popila
    * @Create Date 2565-01-25
    * @Create Date 2565-03-18
    * @Create Date 2565-03-19
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
        $this->load->model('M_vos_event', 'event');
        $this->load->model('M_vos_person', 'person');

        $data['arr_event'] = $this->event->get_event_all()->result();
        $data['arr_person'] = $this->person->get_per_all()->result();
        $this->output('consent/v_dashboard', $data);
    }

    public function show_amount_event_ajax()
    {
        $this->load->model('M_vos_event', 'event');
        $data = $this->event->get_amount_event();
        echo json_encode($data[0]);
    }

    public function show_amount_person_ajax()
    {
        $this->load->model('M_vos_person', 'person');
        $data = $this->person->get_amount_person();
        echo json_encode($data[0]);
    }
}