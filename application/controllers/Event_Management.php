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
    

    public function show_event_list_detail_event()
    {
        $person_id = 1;
        $this->load->model('M_vos_person', 'per');
        $this->per->per_id =$person_id;
        
        $data['per_event'] = $this->per->get_per()->result();

        $this->output('consent/v_event_list_detail_event', $data);
    }


    public function show_event_list_detail_member()
    {   
        
         
        //if ดักว่า มีข้อมูลมั้ย ในกรณีใช้ del isert update
        if($this->input->post('event_id')!=NULL){
            $_SESSION["evt_id"]  = $this->input->post('event_id');
        }

        $event_id = $_SESSION["evt_id"];
        //$this->load->model('M_vos_person', 'per');
        $this->load->model('M_vos_event', 'event');
        $this->load->model('M_vos_event_group', 'event_gro');
        $this->load->model('M_vos_topic', 'top');

        
        //$this->per->per_id =$person_id;
        $this->event->Evnt_id =$event_id;
        $this->event_gro->Evnt_group_id =$event_id;
        $this->top->Evnt_group_id = $event_id;

       // $data['per_event'] = $this->per->get_per()->result();
        $data['event'] = $this->event->get_event_by_id()->result();
        $data['event_group'] = $this->event_gro->get_event_group_by_id_set()->result();

        $data['event_choice'] = $this->top->get_topic_by_id()->result();


        $this->load->model('M_vos_cluster', 'clus');
        $this->clus->Evnt_group_id =$event_id;
        $data['cluster'] = $this->clus->get_cluster_by_id_event()->result();
        $data['amount_cluster'] = $this->clus->get_amount_cluster()->result();
        $data['cluster_not_in'] = $this->clus->get_cluster_by_id_not_in_event()->result();
 
        $data['event_id'] = $event_id;
        
        

         $this->output('consent/v_event_list_detail_member', $data);
    }


    public function Event_Management_insert_event()
    {
        //print_r($_POST);
        
        $event_image_name = iconv("UTF-8", "TIS-620", $_FILES['event_image']['name']);
        $event_image_file =  $_FILES['event_image']['tmp_name'];

        $this->load->model('Da_vos_event', 'event');
        $this->event->evt_name = $this->input->post('event_name');
        $this->event->evt_detail = $this->input->post('event_detail'); 
        $this->event->evt_start_date = $this->input->post('event_start_date');
        $this->event->evt_end_date = $this->input->post('event_end_date'); 
        //$this->event->evt_create_date = $this->input->post('event_create_date'); 
        $this->event->evt_image = $event_image_name; 
        
        $this->event->insert_event(); //add data in table
        copy($event_image_file, 'assests/image/event/'.$event_image_name); //add flie in folder
        redirect('Event_Management/show_event_list');
    }


    public function event_management_insert_member()
    {   
 
        
        $this->load->model('Da_vos_event_group', 'da_event');
        $this->da_event->grp_cls_id = $this->input->post('newmemeber');
        $this->da_event->grp_evt_id = $this->input->post('event_id'); 
        
        $this->da_event->insert_event_group();
 
        redirect('Event_Management/show_event_list_detail_member');
    }
    
 
    public function event_management_delete_member($id)
    {   

        $this->load->model('Da_vos_event_group', 'da_event');
        $this->da_event->Evnt_group_id = $id;

        $this->da_event->delete_group_in_event();

        
        redirect('Event_Management/show_event_list_detail_member');

    }

    public function event_management_update_event()
    {   
        $event_id = $this->input->post('event_id');
        
        $this->load->model('Da_vos_event', 'event');
        $this->event->evt_name = $this->input->post('event_name');
        $this->event->evt_detail = $this->input->post('event_detail'); 
        $this->event->evt_start_date = $this->input->post('event_start_date');
        $this->event->evt_end_date = $this->input->post('event_end_date'); 
        $this->event->evt_id= $event_id;
        $this->event->update_event();

        redirect('Event_Management/show_event_list');

    }



    public function event_management_insert_choice()
    {   
 

        $this->load->model('Da_vos_topic', 'da_choice');
        $this->da_choice->newchoice = $this->input->post('newchoice');
        $this->da_choice->event_id = $this->input->post('event_id'); 
        
        $this->da_choice->insert_event_choice();
 
        redirect('Event_Management/show_event_list_detail_member');
    }


    public function event_management_delete_choice($id)
    {   
        //print_r($id);
        $this->load->model('Da_vos_topic', 'da_choice');
        $this->da_choice->top_id = $id;

         $this->da_choice->deletet_event_choice();

        
         redirect('Event_Management/show_event_list_detail_member');

    }

    public function event_management_delete_event($id)
    {   
        print_r($id);
        $this->load->model('Da_vos_event', 'da_evnt');
        $this->da_evnt->evt_id = $id;

         $this->da_evnt->delete_event();

        
         redirect('Event_Management/show_event_list');

    }


}