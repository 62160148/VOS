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
require_once dirname(__FILE__) . "/MainController.php";

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
        $this->load->model('M_vos_user_login', 'muser');
        $data['arr_user'] = $this->muser->get_user_list()->result();
        // $data['arr_position'] = $this->map->get_position_all()->result();
        // print_r($data['arr_position']);
        // print_r($data);
        // $this->output('consent/v_assessor_management', $data);
        $this->output('consent/v_user_management', $data);

    } //end show_user_management

    /*
     * show_user_role_user
     * display view user_role_user list management
     * @input  -
     * @output  user_role_user list
     * @author  Apinya Phadungkit
     * @Create  Date 2565-03-19
     * @Update  Date 2565-03-19
     */
    public function user_role_user()
    {
        $this->load->model('M_vos_user_login', 'ruser');
        $this->ruser->user_role = 1;
        $data['arr_user'] = $this->ruser->check_user_role()->result();
        // print_r($data);
        $this->output('consent/v_user_management', $data);

    } //end user_role_user

    /*
     * show_user_role_admin
     * display view user_role_admin list management
     * @input  -
     * @output  user_role_admin list
     * @author  Apinya Phadungkit
     * @Create  Date 2565-03-19
     * @Update  Date 2565-03-19
     */
    public function user_role_admin()
    {
        $this->load->model('M_vos_user_login', 'radmin');
        $this->radmin->user_role = 2;
        $data['arr_user'] = $this->radmin->check_user_role()->result();
        // print_r($data);
        $this->output('consent/v_user_management', $data);
    } //end user_role_admin

    public function show_add_user()
    {
        $this->output('consent/v_add_user');

    }
    public function add_user()
    {

        $input_student_id = $this->input->post('input_student_id');
        $input_firstname = $this->input->post('input_firstname');
        $input_lastname = $this->input->post('input_lastname');
        $input_email = $this->input->post('input_email');
        $input_password = $this->input->post('input_password');
        $input_cluster = $this->input->post('input_cluster');
        $input_score = $this->input->post('input_score');
        $input_roler = $this->input->post('input_roler');
        $input_image = $this->input->post('input_image');

        $this->load->model('M_vos_user_login', 'muser');

        //insert DB person
        $this->muser->per_name = $input_firstname;
        $this->muser->per_lastname = $input_lastname;
        $this->muser->per_email = $input_email;
        $this->muser->per_image = $input_image == "" ? "" : $input_image;
        $this->muser->per_point = $input_score;
        $this->muser->per_cls_id = $input_cluster;
        $per_id = $this->muser->insert_person();

        if ($per_id > 0) {
            //insert DB user login
            $this->muser->user_name = $input_student_id;
            $this->muser->user_password = $input_password;
            $this->muser->user_role = $input_roler;
            $this->muser->user_per_id = $per_id;
            $user_id = $this->muser->insert_user_login();
            $data = [
                "status" => true,
                "user_id" => $user_id,
            ];
        } else {
            $data = [
                "status" => false,
                "user_id" => "",
            ];
        }

        echo json_encode($data);
        redirect('consent/v_user_management');

    }
    public function upload_image()
    {
        if (isset($_FILES["image_file"]["name"])) {
            $config['upload_path'] = './assests/image/user';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image_file')) {
                echo $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $image = [
                    "url" => 'assests/image/user/' . $data["file_name"],
                ];
                echo json_encode($image);
                // echo '<img src="' . base_url() . 'assests/image/user/' . $data["file_name"] . '" width="300" height="225" class="img-thumbnail" />';
            }
        }
        // echo json_encode($data);

    }
}
