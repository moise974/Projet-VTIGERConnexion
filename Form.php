<?php

class Form extends CI_Controller 
{

        public function index()
        {
               /* $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('username', 'Username', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                        echo 'erreur';

                }
                else
                {
                        $this->load->view('success');
                }*/

                 $this->load->view("connexion");
        }


        public function data_submitted() 
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('u_name', "nom de l'utilisateur vtiger", 'trim|required|min_length[2]');
            $this->form_validation->set_rules('userak', "user access key", 'trim|required|min_length[2]');

            $data = array(
            'user_name' => $this->input->post('u_name'),
            'useraccesskey' => $this->input->post('userak'),);


            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view("connexion");
            }
            else
            {
                $this->load->view("connexion", $data);
            }

        }

}

?>








