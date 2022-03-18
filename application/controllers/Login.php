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
    }

    public function show_login()
    {
        $this->output_login('auth/v_user_login');
    }

}