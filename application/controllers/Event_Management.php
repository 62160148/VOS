<?php
/*
* Report
* @input  -   
* @output -
* @author  Nattakorn
* @Create Date 
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Event_Management extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function show_event_list()
    {
        $this->load->model('M_vos_event', 'vos');
        $data['arr_event'] = $this->vos->get_event_all()->result();
        $this->output('consent/v_event_list', $data);
    }
}