<?php
/*
    * Login
    * Controller for Login module
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-19
    */
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Login extends MainController
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    /*
    * show_user_login
    * show login
    * @input  -
    * @output show display login for user
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-19
    */
    public function show_user_login()
    { //show login
        $this->output_login("auth/v_user_login");
    } //end show_user_login

    /*
    * show_user_home
    * show login
    * @input  Emp_ID
    * @output show display home for user
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-19
    */
    public function show_user_home($user_per_id)
    { //show home
        $this->load->model('M_vos_person', 'mper');
        $this->mper->per_id  = $user_per_id;
        $data['Per_ID'] = $this->mper->get_per()->row();

        $temp = $data['Per_ID'];
        $this->session->set_userdata('UsPer_ID', $temp->user_per_id);
        $this->session->set_userdata('UsFullName', $temp->per_name);
        $this->session->set_userdata('UsLastName', $temp->per_lastname);
        $this->session->set_userdata('UsImage', $temp->per_image);
        $this->session->set_userdata('UsPoint', $temp->per_point);
        $this->session->set_userdata('Usrole', $temp->user_role);
        $this->check_role();
    } //end show_user_home

    /*
    * login
    * Login for user
    * @input  User_login and Pass_login
    * @output -
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-19
    */
    public function login()
    { //login for user
        $user_name = $this->input->POST('user_name');
        $user_password = $this->input->POST('user_password');

        $this->load->model('M_vos_user_login', 'mlog');

        $userlogin = $this->mlog->check_login($user_name, $user_password)->row();
        if (count($userlogin) == 1) {
            $data = $userlogin;
            echo json_encode($data);
        } else {
            $data = [];
            echo json_encode($data);
        }
    } //end login

    /*
    * check_role
    * check role for user
    * @input  UsEmp_ID  and Usrole
    * @output show display home for role
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-19
    */
    public function check_role()
    { // check role
        if (!empty($this->session->userdata('UsPer_ID'))) {
            if ($_SESSION['Usrole'] == 1) {
                redirect('Vote/event_list', 'refresh');
            } else if ($_SESSION['Usrole'] == 2) {
                redirect('Report/show_dashboard', 'refresh');
            }
        }
        // if
        else {
            redirect('Login/show_user_login', 'refresh');
        }
        // else
    } //end check_role

    /*
    * main
    * Login for user
    * @input  User_login and Pass_login
    * @output -
    * @author Chakrit Boonprasert
    * @Create Date 2565-03-19
    */
    public function logout()
    { //logout to user login page
        $this->session->unset_userdata('UsPer_ID');
        $this->session->unset_userdata('UsFullName');
        $this->session->unset_userdata('UsLastName');
        $this->session->unset_userdata('UsImage');
        $this->session->unset_userdata('UsPoint');
        redirect('Login/show_user_login', 'refresh');
    } //end logout
}
