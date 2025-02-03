<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends My_Controller{

    public function index()
    {
        // $this->load->helper('url');
        // $this->load->helper('html');

        // echo "testing..";
        $this->load->view('Users/articleList');
        // echo base_url(); //this is used to show the webiste url
    }
}
?>