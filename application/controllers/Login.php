<?php
class Login extends CI_controller{
    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
    $this->load->model('Signup');


    }
function index()
{
    $this->load->model('User_model');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
if($this->form_validation->run()==false)
{
    $this->load->view('admin/login');

}
else{
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $user=$this->User_model->doLogin($username,$password);
if(!empty($user))
{
    $this->session->set_userdata('sign_up',$user);
    redirect(base_url().'adminDashboard');
}
else{
    $this->session->set_flashdata('errorMsg','incorrect username/password');
    redirect(base_url().'Login');

}
}
}
public function signup(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('first_name','first_name','required');
     $this->form_validation->set_rules('last_name','last_name','required');
     $this->form_validation->set_rules('email','email','required');
     $this->form_validation->set_rules('phone','phone','required');
     $this->form_validation->set_rules('address','address','required');
     $this->form_validation->set_rules('city','city','required');
      $this->form_validation->set_rules('state','state','required');
     $this->form_validation->set_rules('country','country','required');
     $this->form_validation->set_rules('zip','zip','required');
    
     $this->form_validation->set_rules('password','password','required');
    if($this->form_validation->run()==false)
{
    $this->load->view('admin/signup');

}
else{ 

        $data['first_name'] =$this->input->post('first_name');
        $data['last_name'] =$this->input->post('last_name');
        $data['email'] =$this->input->post('email');
        $data['phone'] =$this->input->post('phone');
        $data['address'] =$this->input->post('address');
        $data['city'] =$this->input->post('city');
         $data['state'] =$this->input->post('state');
        $data['country'] =$this->input->post('country');
        $data['zip'] =$this->input->post('zip');
       
        $data['password'] =$this->input->post('password');
   $response= $this->Signup->signup_Entry($data);
  
   
    redirect(base_url().'Login');



}
}
}

?>