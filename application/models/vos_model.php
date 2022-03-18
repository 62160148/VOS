<?php
class vos_model extends CI_Model
{

    function construct()
    {
        parent::__construct();
        $this->vos = $this->load->database('vos', TRUE);
    }
}