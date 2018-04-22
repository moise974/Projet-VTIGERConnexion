<?php 
   class Stud_controller extends CI_Controller 
   {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("stud"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url');
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data);
         $this->load->view("templates/footer"); 
      } 
  
      //Ajoute un 
      public function add_student_view() { 
         $this->load->helper('form');
         $this->load->view('templates/header'); 
         $this->load->view('Stud_add');
         $this->load->view("templates/footer"); 
      } 
  
      public function add_student() { 
         $this->load->model('Stud_Model');
			
         $data = array( 
            'login' => $this->input->post('login'), 
            'name' => $this->input->post('name') 
         ); 
			
         $this->Stud_Model->insert($data); 
   
         $query = $this->db->get("stud"); 
         $data['records'] = $query->result();
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data);
         $this->load->view("templates/footer"); 
      } 
  
      //Modifie
      public function update_student_view() { 
         $this->load->helper('form'); 
         $login = $this->uri->segment('3'); 
         $query = $this->db->get_where("stud",array("login"=>$login));
         $data['records'] = $query->result(); 
         $data['old_login'] = $login; 
         $this->load->view('templates/header');
         $this->load->view('Stud_edit',$data);
         $this->load->view("templates/footer");  
      } 
  
      public function update_student(){ 
         $this->load->model('Stud_Model');
			
         $data = array( 
            'login' => $this->input->post('login'), 
            'name' => $this->input->post('name') 
         ); 
			
         $old_login = $this->input->post('old_login'); 
         $this->Stud_Model->update($data,$old_login); 
			
         $query = $this->db->get("stud"); 
         $data['records'] = $query->result();
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data);
         $this->load->view("templates/footer"); 
      } 
  

      //Supprime
      public function delete_student() { 
         $this->load->model('Stud_Model'); 
         $login = $this->uri->segment('3'); 
         $this->Stud_Model->delete($login); 
   
         $query = $this->db->get("stud"); 
         $data['records'] = $query->result();
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data);
         $this->load->view("templates/footer");  
      } 

      public function affiche_stud_edit() 
      { 
         $this->load->view('Stud_edit');

      } 
   }
?>