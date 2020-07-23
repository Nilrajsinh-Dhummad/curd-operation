<?php
class user extends CI_controller
{
    function create()
    {
        $this->load->model('user_model');
        $this->form_validation->set_rules('name','name','required');     
        $this->form_validation->set_rules('email','email','required|valid_email'); 

        if($this->form_validation->run() == false)
            {
                $this->load->view('create');
            }
        else
            {
                //save reccord to database
                $formArray = array();
                $fromArray['name']=$this->input->post('name');
                $fromArray['email']=$this->input->post('email');
                $fromArray['created_at'] = date('y-m-d');
                $this->user_model->create($fromArray);
                $this->session->set_flashdata('success','record added successfully');
                redirect(base_url().'index.php/user/index');
            }
    }
    function edit($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->getuser($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('name','name','required');     
        $this->form_validation->set_rules('email','email','required|valid_email'); 

            if($this->form_validation->run() == false)
            {
                $this->load->view('edit',$data);
            }
            else
            {
                $fromArray = array();
                $fromArray['name']=$this->input->post('name');
                $fromArray['email']=$this->input->post('email');
                $this->user_model->updateuser($userid,$fromArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/user/index');
            }
    }
    function delete($userid)
    {
        $this->load->model('user_model');
        $user=$this->user_model->getuser($userid);
        if(empty($user))        
        {
            $this->session->set_flashdata('failure','record not found in database');
            redirect(base_url().'index.php/user/index');
        }
        else{
        $this->user_model->deleteuser($userid);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/user/index');
        }
    }
    function index()
    {
        $this->load->model('user_model');
        $users = $this->user_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list',$data);

    }
    
}
?>