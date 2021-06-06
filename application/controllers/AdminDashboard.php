<?php
class Admindashboard extends CI_Controller{
    function index()
    {
        // echo "i am logged in now";
        // print_r($this->session->userdata);
        // if(empty($this->session->userdata['user']))
        // {
        //     redirect(base_url().'login');
        // }

        // echo "<a href=".base_url().'adminDashboard/signout'.">Sign Out</a>";
        $this->load->view('admin/dashboard');
    }
    function signout()
    {
$this->session->unset_userdata('user');
redirect(base_url().'login');
    }
}
?>