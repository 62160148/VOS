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
        $this->output('consent/v_dashboard');
    }
}