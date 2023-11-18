<?php

class ProductController extends CI_Controller
{
    public function addProduct()
    {
        return $this->load->view("addProduct");
    }

    public function storeProduct()
    {
        echo "FFDDDDD";
        // $this->load->model("AuthModel");
        // $this->form_validation->set_rules("name", "Name", "required");
        // $this->form_validation->set_rules("email", "Email", "required|valid_email");
        // $this->form_validation->set_rules("phone", "Phone", "required|numeric");
        // $this->form_validation->set_rules("address", "Address", "required");
        // $this->form_validation->set_rules("password", "Password", "required");

        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view("register");
        // } else {
        //     $formArray = array();
        //     $formArray["name"] = $this->input->post("name");
        //     $formArray["email"] = $this->input->post("email");
        //     $formArray["phone"] = $this->input->post("phone");
        //     if($this->input->post("refId")!= "")
        //     {
        //         $formArray["refId"] = $this->input->post("refId");
        //     }
        //     $formArray["address"] = $this->input->post("address");
        //     $formArray["password"] = $this->input->post("password");

        //     $this->AuthModel->create($formArray);
        //     $this->session->set_flashdata("success", "User Registration successfully");
        //     redirect(base_url() . 'index.php/AuthController/login');
        // }
    }

    public function signin()
    {
        // $this->load->model('AuthModel');
        // $this->form_validation->set_rules('email', 'Email','required|valid_email');
        // $this->form_validation->set_rules('password', 'Passwoord','required');

        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view("login");
        // } else {
        //     $formArray = array();
        //     $formArray["email"] = $this->input->post("email");
        //     $formArray["password"] = $this->input->post("password");

        //     $user = $this->AuthModel->login($formArray);
        //     $this->session->set_flashdata("success", "User Login successfully");
        //     if($user['role'] == 1)
        //     {
        //         redirect(base_url() . 'index.php/AuthController/adminHome');
        //     }
        //     else
        //     {
        //         redirect(base_url() . 'index.php/AuthController/userHome');
        //     }
        // }
    }

    
}
